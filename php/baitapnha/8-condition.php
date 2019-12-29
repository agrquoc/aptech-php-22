<?php
$a =15;
$b= 5;
if ($a>$b) {
    echo "số ".$a ." lớn hơn số" .$b;
} else{
    echo "số ".$a ." nhỏ hơn số" .$b;
}
if ($a%2==1) {
    echo "số ".$a ." là số lẻ";
} else{
    echo "số ".$a ." là số chẵn";
}
if ($a%$b==0) {
    echo "số ".$a ." chia hết cho số " .$b;
} else{
    echo "số ".$a ." không chia hết cho số " .$b;
}
$age =65;
if ($age>=80){
    echo "bạn thuộc thế hệ trường thọ, tuổi của bạn là ".$age;
} else{
    if ($age>=60){
        echo "Tuổi của bạn cũng cao rồi, thuộc tầng lớp đã nghỉ hữu";
    }else{
        if (age>=20){
            echo "bạn thuộc tầng lớp trung niên";
        } else{
            echo "bạn còn là thanh thiếu niên";
        }
    }
}
$color = "red";
switch ($color) {
    case "red":
        echo " red!";
        break;
    case "blue":
        echo "blue!";
        break;
    case "green":
        echo "green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
// Lệnh switch là lệnh nhánh rẽ khi điều kiện đúng nhưng cần chú ý khi dùng switch thì phải dùng thêm lệnh break 

?>
