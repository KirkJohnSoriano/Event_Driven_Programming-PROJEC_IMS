<?php
$brand = array(
    'in_brand_id' => "'" . $_POST['inp_BrandId'] . "'",
    'in_brand_name' => "'" . $_POST['inp_bName'] . "'",
    'in_brand_status' => "'" . $_POST['inp_status'] . "'",

);

save($brand);

function save($data)
{
    include("../config/database.php");

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));

    $b_id = $_POST['inp_BrandId'];
    $validate = "SELECT COUNT(*) AS i FROM brands WHERE in_brand_id LIKE '$b_id'";

    $rs = $conn->query($validate);
    $count = $rs->fetch_assoc();

    if ($count['i'] ==  0) {
        $query = "INSERT INTO brands ($attributes) VALUES ($values)";
        $conn->query($query);
        header('location: ../brand.php?success');
    } else {

        header('location: ../brand.php?invalid');
    }


    $conn->close();
}
