<?php
$category = array(
    'in_categories_id' => "'" . $_POST['inp_categoryId'] . "'",
    'in_categories_name' => "'" . $_POST['inp_cName'] . "'",

);

save($category);

function save($data)
{
    include("../config/database.php");

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));

    $c_id = $_POST['inp_categoryId'];
    $validate = "SELECT COUNT(*) AS i FROM category WHERE in_categories_id LIKE '$c_id'";

    $rs = $conn->query($validate);
    $count = $rs->fetch_assoc();

    if ($count['i'] ==  0) {
        $query = "INSERT INTO category ($attributes) VALUES ($values)";
        $conn->query($query);
        header('location: ../category.php?success');
    } else {

        header('location: ../category.php?invalid');
    }


    $conn->close();
}
