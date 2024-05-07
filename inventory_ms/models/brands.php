<?php
include("config/database.php");

$sql = "SELECT * FROM brands";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["in_brand_id"] . "</td>";
        echo "<td>" . $row["in_brand_name"] . "</td>";
        echo "<td>" . $row["in_brand_status"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No data found</td></tr>";
}

$conn->close();