<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$userlog = $_POST["Username"];
$pass=$_POST["Password"];
$passx=$_POST["Passwordx"];
$email=$_POST["email"];
$phone=$_POST["sodt"];
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "INSERT INTO ".$database.".quanlyuser(USER,PASS,EMAIL,SODT)
VALUE ('".$userlog. "','".$pass."','".$email."','".$phone."');";
if($passx===$pass){
    mysqli_query($connect,$sql);
}else{
    echo "Password khác Re Password";
};
mysqli_close($connect);
?>
</body>
</html>