<?php

require_once("DBconnect.php");

if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["vendor"]) && isset($_POST["chemical"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["prescription"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $vendor = $_POST["vendor"];
    $chemical = $_POST["chemical"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $prescription = $_POST["prescription"];

    $sql_query = "UPDATE medicine SET name='$name', vendor='$vendor', chemical='$chemical', price='$price', stock='$stock', requires_prescription='$prescription' WHERE id='$id'";

    $result = mysqli_query($connection, $sql_query);

    // Check if insertion happened successfully
    if(mysqli_affected_rows($connection)) {
        echo "Update Successful!"; 
    } else {
        echo "ERROR: Medicine insertion failed!";
    }
} else {
    echo "Not set";
}

?>