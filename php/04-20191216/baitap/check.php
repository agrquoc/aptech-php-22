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

mysqli_num_rows($result);
if (mysqli_num_rows($result)> 0) {
    header("Location: http://localhost/apteck-php-22-quoc/php/04_20191216/baitap/trangchu.php");
    die();
}else{
    header("Location: http://localhost/apteck-php-22-quoc/php/04_20191216/baitap/dangky.php");
    die();
};
mysqli_close($connect);
?>
