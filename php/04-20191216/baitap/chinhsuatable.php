<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "ALTER TABLE webnganhang.quanlyuser add
(email CHAR(200) NOT NULL,
SODT CHAR(15) NOT NULL)";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>