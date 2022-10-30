<?php
include 'dbcon.php';
session_start();

$itemID =  $_GET['itemID'];
$sql = "DELETE FROM items WHERE id=".$itemID."";

if(mysqli_query($con, $sql)){

    $_SESSION['type'] = 's';
    $_SESSION['err'] = 'Item Deleted Successfully';
    header('location: admin.php');
}
else{
    echo 'Error: ' . mysqli_error($con);
}

?>