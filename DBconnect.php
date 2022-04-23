<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "cse370_online_pharmacy";

// Creating connection
$connection = new mysqli($server_name, $user_name, $password);


// Checking connection
if($connection->connect_error) {
    die("Connection faliled: " . $connection->connect_error);
} else {
    mysqli_select_db($connection, $db_name);
    //echo "Connection successful";
}

?>