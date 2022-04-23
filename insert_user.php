<?php

require_once("DBconnect.php");

if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["address"])) {
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];

    $sql_query = "INSERT INTO user values (NULL, '$first_name', '$last_name', '$email', '$password', '$address', 1)";

    $result = mysqli_query($connection, $sql_query);

    // Check if insertion happened successfully
    if(mysqli_affected_rows($connection)) {
        header("Location: index.php");
    } else {
        echo "ERROR: User insertion failed!";
    }
} else {
    echo "Not set";
}

?>