<?php
include 'dbcon.php';


$itemID =  $_GET['itemID'];
$sql = "DELETE FROM items WHERE id=".$itemID."";

if(mysqli_query($con, $sql)){
    header('location: admin.php');
}
else{
    echo 'Error: ' . mysqli_error($con);
}

?>