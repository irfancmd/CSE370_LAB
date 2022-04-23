<?php

require_once("DBconnect.php");

if(isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql_query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($connection, $sql_query);

    if(mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_array($result);

        if($row[6] == 1) {
            // Show normal user homepage
            header("Location: user_homepage.php?userId=".$row[0]."&userName=".$row[1]);
        } else {
            // Show admin homepage
            header("Location: admin_homepage.php?userId=".$row[0]."&userName=".$row[1]);
        }
    } else {
        header("Location: index.php");
    }
} else {
    echo "Not set";
}

?>