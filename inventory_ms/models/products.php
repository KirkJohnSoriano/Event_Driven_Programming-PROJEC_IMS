<?php
include("./config/database.php");

$sql = "SELECT p.product_code, p.product_name, p.product_img, p.product_costRate, p.product_sellingPrice, 
               p.product_quantity, p.in_brand_id, b.in_brand_name AS in_brand_name, 
               p.supplier_id, s.supplier_name,
               p.in_categories_id, c.in_categories_name AS in_categories_name
        FROM product p
        LEFT JOIN brands b ON p.in_brand_id = b.in_brand_id
        LEFT JOIN supplier s ON p.supplier_id = s.supplier_id
        LEFT JOIN category c ON p.in_categories_id = c.in_categories_id";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["product_code"] . "</td>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . $row["product_costRate"] . "</td>";
        echo "<td>" . $row["product_sellingPrice"] . "</td>";
        echo "<td>" . $row["product_quantity"] . "</td>";
        echo "<td>" . $row["in_brand_name"] . "</td>";
        echo "<td>" . $row["in_categories_name"] . "</td>";
        echo "<td>" . $row["supplier_name"] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No data found</td></tr>";
}


$conn->close();