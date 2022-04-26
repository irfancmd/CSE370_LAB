<?php

require_once("DBconnect.php");

if(isset($_POST["quantity"]) && isset($_POST["medicineId"]) && isset($_POST["unitPrice"]) && isset($_POST["userId"])) {
    $quantity = $_POST["quantity"];
    $medicine_id = $_POST["medicineId"];
    $unit_price = $_POST["unitPrice"];
    $user_id = $_POST["userId"];

    $total_price = $quantity * $unit_price;

    $sql_query = "INSERT INTO orders values (NULL, $quantity, $medicine_id, $user_id, $total_price, 0)";

    $result = mysqli_query($connection, $sql_query);

    // Check if insertion happened successfully
    if(mysqli_affected_rows($connection)) {
        echo("Order Successful!");
    } else {
        echo "ERROR: Order insertion failed!";
    }
} else {
    echo "Not set";
}

?>