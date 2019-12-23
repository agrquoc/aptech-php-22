<?php
    $server ="localhost";
    $username ="root";
    $passworddatabase ="";
    $database ="aptech_php_22_05";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "select users.id, users.name, users.email, 
passports.sopassport, passports.noicap,passports.ngaycap,passports.diachi
from aptech_php_22_05.users 
inner join aptech_php_22_05.passports
on users.id = passports.userid;";
$result = mysqli_query($connect,$sql);
if (mysqli_num_rows($result)>0) {
?>;
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  table, th, td {
  border: 1px solid black;
  padding =15px;
  
}
  </style>
</head>
<body>
<table border =1>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>số passport</th>
    <th>Nơi cấp</th>
    <th>Ngày cấp</th>
    <th>Đia chỉ</th>
  </tr>
  <?php
   while ($row = mysqli_fetch_assoc($result)){
    ?>
  <tr>
    <td><?php  echo $row["id"] ?></td>
    <td><?php  echo $row["name"] ?></td>
    <td><?php  echo $row["email"] ?></td>
    <td><?php  echo $row["sopassport"] ?></td>
    <td><?php  echo $row["noicap"] ?></td>
    <td><?php  echo $row["ngaycap"] ?></td>
    <td><?php  echo $row["diachi"] ?></td>
  </tr>
   <?php }?>
</table>;
<?php
}
mysqli_close($connect);
?>  
</body>
</html>
