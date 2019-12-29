<?php
echo "Vòng lặp while<br>";
$a =10;
while ($a<=100) {
    echo $a .";";
    if ($a ==50){
        echo "<br>";
    };
    $a++;
};
echo "<br>";
echo "Vòng lặp for<br>";
for ($b =1;$b<=100;$b++) {
    echo $b .";";
    if ($b ==50){
        echo "<br>";
    };
}
// do {
//     code to be executed;
// } while (condition is true);
echo "<br>";
echo "Vòng lặp do while<br>";
$c=1;
do {
    echo $c .";";
    if ($c ==50){
        echo "<br>";
    };
    $c++;
}while ($c <=100);
// Lưu ý: điều kiện trong while đúng thì tiếp tục vòng lặp, sai thì thoát khỏi vòng lặp
echo "<br>";
echo "Vòng lặp trong array<br>";
$arr = ["name" => "Quốc", "class" => "PHP", "age" => 36];
foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . '<br>'; 
};
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
};
?>
