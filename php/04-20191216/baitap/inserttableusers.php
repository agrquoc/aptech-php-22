<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "INSERT INTO quanlyuser(USER,PASS)
VALUE ('quoctrinhviet','quoc.1111')";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>