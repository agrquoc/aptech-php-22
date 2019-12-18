<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$connect=mysqli_connect($server,$username,$passworddatabase);
$sql = "CREATE DATABASE WEBNGANHANG";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>