<?php

require_once("DBconnect.php");

if(isset($_POST["orderId"])) {
    $order_id = $_POST["orderId"];

    $sql_query = "UPDATE orders SET approved_status=1 WHERE id='$order_id'";

    $result = mysqli_query($connection, $sql_query);

    // Check if insertion happened successfully
    if(mysqli_affected_rows($connection)) {
        echo "The order has been approved!"; 
    } else {
        echo "ERROR: order approval failed!";
    }
} else {
    echo "Not set";
}

?>