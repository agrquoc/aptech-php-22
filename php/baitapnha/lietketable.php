<?php
// $user=$_POST['gmail'];
// $pass=$_POST['pass'];
// echo $user;
// echo $pass;
$server="localhost";
$username= "root";
$passworddatabase="";
$database ="mydb";
$conn = mysqli_connect($server,$username,$passworddatabase,$database);
$sql= "SELECT * FROM mydb.users" ;
// WHERE USER = '$user'
// AND password = '$pass'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. "  pass: " . $row["password"]. "<br>";
    }
}else{
    echo "0 kết quả ";
}
?>
