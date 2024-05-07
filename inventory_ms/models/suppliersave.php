<?php

$supplier = array(
    'supplier_id' => "'" . $_POST['inp_supplierId'] . "'",
    'supplier_name' => "'" . $_POST['inp_sName'] . "'",
    's_contactNumber' => "'" . $_POST['inp_sContact'] . "'",
    'region' => "'" . $_POST['inp_region'] . "'",
    'province' => "'" . $_POST['inp_province'] . "'",
    'municipality' => "'" . $_POST['inp_citymun'] . "'",
    'brgy' => "'" . $_POST['inp_brgy'] . "'",
);

save($supplier);

function save($data)
{
    include("../config/database.php");

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));

    $s_id = $_POST['inp_supplierId'];
    $validate = "SELECT COUNT(*) AS i FROM supplier WHERE supplier_id LIKE '$s_id'";

    $rs = $conn->query($validate);
    $count = $rs->fetch_assoc();

    if ($count['i'] ==  0) {
        $query = "INSERT INTO supplier ($attributes) VALUES ($values)";
        $conn->query($query);
        header('location: ../supplier.php?success');
    } else {

        header('location: ../supplier.php?invalid');
    }


    $conn->close();
}

