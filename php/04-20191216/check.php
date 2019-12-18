<?php
$user=$_POST['gmail'];
$pass=$_POST['pass'];
$server="localhost";
$username= "root";
$passworddatabase="";
$database ="mydb";
$conn = mysqli_connect($server,$username,$passworddatabase,$database);
$sql= "SELECT * FROM mydb.users
 WHERE USER = '$user'
AND password = '$pass'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
    echo "Đăng nhập thành công";
    // có thể gởi tới link trang chủ đã đăng nhập
}else{
    echo "Đăng nhập thất bại";
    // lập trang đăng ký
}
?>
