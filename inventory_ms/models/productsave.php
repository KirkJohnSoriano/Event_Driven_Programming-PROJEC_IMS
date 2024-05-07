<?php

if (!isset($_FILES['productImage']) || $_FILES['productImage']['error'] !== UPLOAD_ERR_OK) {
    // Handle file upload error
    $product['product_img'] = "";
} else {
    $tmpName = $_FILES['productImage']['tmp_name'];
    $fileName = basename($_FILES['productImage']['name']);
    $destination = "../uploads/" . $fileName;

    // Check if file already exists, if yes, add timestamp to the filename
    $i = 1;
    while (file_exists($destination)) {
        $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '-' . $i . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
        $destination = "../uploads/" . $fileName;
        $i++;
    }

    if (move_uploaded_file($tmpName, $destination)) {
        $product['product_img'] = $fileName;
    } else {
        // Handle file upload error
        $product['product_img'] = "";
    }
}


$product = array(
    'product_code' => $_POST['inp_productCode'],
    'product_name' => $_POST['inp_productName'],
    'product_costRate' => $_POST['inp_productCost'],
    'product_sellingPrice' => $_POST['inp_sellingPrice'],
    'product_quantity' => $_POST['inp_quantity'],
    'p_totalCost' => $_POST['inp_totalCost'],
    'in_brand_id' => $_POST['inp_BrandId'],
    'in_categories_id' => $_POST['inp_categoryId'],
    'supplier_id' => $_POST['inp_supplierId'],
);



save($product);

function save($data)
{
    include("../config/database.php");

    $attributes = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";

    $p_id = $data['product_code'];
    $validate = "SELECT COUNT(*) AS i FROM product WHERE product_code LIKE '$p_id'";

    $rs = $conn->query($validate);
    $count = $rs->fetch_assoc();

    if ($count['i'] ==  0) {

        $query = "INSERT INTO product ($attributes) VALUES ($values)";
        $conn->query($query);
        header('location: ../product.php?success');
    } else {
        header('location: ../product.php?invalid');
    }

    $stmt->close();
    $conn->close();
}