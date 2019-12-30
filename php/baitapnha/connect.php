<?php
$server="localhost";
$username= "root";
$password="";
$conn = mysqli_connect($server,$username,$password);
if (!$conn) {
    die("Không thể kết nối". mysqli_connect_error());
}
?>;