<?php
$server ="localhost";
$username ="root";
$passworddatabase ="";
$connect=mysqli_connect($server,$username,$passworddatabase);
if(!$connect){
    echo "Kết nối không thành công";
}else{
    echo "kết nối thành công";
}
?>