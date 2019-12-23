<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
if (!$connect){
    echo "thất bại";
}else{
    echo "thành công";
}
?>