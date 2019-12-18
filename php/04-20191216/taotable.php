<?php
$server="localhost";
$username= "root";
$password="";
$conn = mysqli_connect($server,$username,$password);
$sql = "Create database mydb";
mysqli_query($conn,$sql);
$sql="create table mydb.users (id int, user char(200), password char(15))";
if (mysqli_query($conn,$sql)){
    echo ("table created successfully");
}


?>;