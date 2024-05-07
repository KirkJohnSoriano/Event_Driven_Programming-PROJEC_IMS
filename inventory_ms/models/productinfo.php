<?php

include("../config/database.php");

$value = $_POST["inp_barcode"]; // Note: 'inp_barcode' from AJAX request

$stmt = $conn->prepare("SELECT product_name, product_sellingPrice FROM product WHERE product_code = ?");
$stmt->bind_param("s", $value);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array(
        'name' => $row['product_name'],
        'price' => $row['product_sellingPrice']
    );
    echo json_encode($response);
} else {
    echo json_encode(array('error' => 'Product not found'));
}