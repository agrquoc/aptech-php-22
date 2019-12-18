<?php
$server="localhost";
$username= "root";
$password="";
$conn = mysqli_connect($server,$username,$password);
if(!$conn){
    echo "Không thể kết nối";
} else{
    echo "Kết nối thành công";
}
$sql = "Create database mydb";
if (mysqli_query($conn,$sql)){
    echo ("database created successfully");
} else {
    echo mysqli_error($conn);
};



?>;