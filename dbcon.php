<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'shop';

$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
