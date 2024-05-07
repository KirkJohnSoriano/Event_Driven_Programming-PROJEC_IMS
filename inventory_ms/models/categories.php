<?php
include("config/database.php");

$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["in_categories_id"] . "</td>";
        echo "<td>" . $row["in_categories_name"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No data found</td></tr>";
}

$conn->close();
