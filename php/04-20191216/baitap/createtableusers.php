<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "CREATE TABLE quanlyuser(
id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
USER CHAR(100) NOT NULL,
PASS CHAR(50) NOT NULL,
QUYEN CHAR(1))";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>