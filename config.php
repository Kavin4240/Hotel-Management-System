<?php

$server = "localhost";
$username = "root";
$password = "Kavin2628";
$database = "hotel_management_db";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>