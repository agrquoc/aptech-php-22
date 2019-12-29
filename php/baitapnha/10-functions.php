<?php
// function myFunction($argument = 'default'){
//  code to be executed;
//  };
function tinhtong ($a,$b){
    return $a+$b;
};
echo tinhtong(24,15) ."<br>";
$so1 =14;
$so2 = 12;
echo tinhtong($so1,$so2);

function displayInformation($name = "Quoc", $duan = "webnganhang"){
    echo "tên của bạn là " .$name . "hiện đang làm dự án ". $duan ."<br>";
};
$hoten = "Trịnh Việt Quốc";
$Duan = "www.agribank.com.vn";
displayInformation($hoten,$Duan); 
 ?>
