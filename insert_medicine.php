<?php

require_once("DBconnect.php");

if(isset($_POST["name"]) && isset($_POST["vendor"]) && isset($_POST["chemical"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["prescription"])) {
    $name = $_POST["name"];
    $vendor = $_POST["vendor"];
    $chemical = $_POST["chemical"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $prescription = $_POST["prescription"];

    $sql_query = "INSERT INTO medicine values (NULL, '$name', '$vendor', '$chemical', '$price', '$stock', '$prescription')";

    $result = mysqli_query($connection, $sql_query);

    // Check if insertion happened successfully
    if(mysqli_affected_rows($connection)) {
        header("Location: show_medicines.php");
    } else {
        echo "ERROR: Medicine insertion failed!";
    }
} else {
    echo "Not set";
}

?>