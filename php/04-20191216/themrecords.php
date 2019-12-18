<?php
$server="localhost";
$username= "root";
$passworddatabase="";
$database ="mydb";
$conn = mysqli_connect($server,$username,$passworddatabase,$database);
$sql= "INSERT INTO mydb.users (id,user,password)
 value (1,'hcquoc','x123'),(2,'hcvan','x1234')";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>;
