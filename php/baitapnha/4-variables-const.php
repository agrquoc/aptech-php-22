<?php
echo "<h1>4.variables</h1>";
echo "để khai báo biến thì dùng ký tự '$', ví dụ:</br>";
$myname ="Trịnh Việt Quốc";
$age =19;
$a =10;
$b=15.5;
$c=$a+$b;
echo $c ."<br>";
echo "họ và tên:".$myname. " tuổi:". $age  ."<br>" ;
echo "<h1>5.const</h1>";
// để khai báo hằng dùng define().syntax: define(name, value, case-insensitive)
//case-insensitive chỉ định tên hằng có phân biệt chữ Hoa chữ thường,
// mặc định là sai nghĩa là có phân biệt chữ hoa chữ thường
define("sofi",3.14159,true);
echo Sofi;
?>