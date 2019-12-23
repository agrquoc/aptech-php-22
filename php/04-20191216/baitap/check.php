 <?php
$userlog = $_POST["Username"];
$pass=$_POST["Password"];
$server ="localhost";
$username ="root";
$passworddatabase ="";
$database ="webnganhang";
$connect=mysqli_connect($server,$username,$passworddatabase,$database);
$sql = "SELECT * from webnganhang.quanlyuser
WHERE USER ='$userlog'
AND PASS = '$pass';";
$result = mysqli_query($connect,$sql);
$row= mysqli_num_rows($result);
if (mysqli_num_rows($result)> 0) {
    header("Location: http://localhost/aptech-php-22-quoc/php/04-20191216/baitap/trangchu.php");
}else{
    header("Location: http://localhost/aptech-php-22-quoc/php/04-20191216/baitap/dangky.php");
};
mysqli_close($connect);
?>
