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
    if(isset($_POST['submit'])){
        require_once("connect.php");
        $usernamex = addslashes($_POST['Username']);
        $Pass = addslashes($_POST['Password']);
        $Passx = addslashes($_POST['Passwordx']);
        $email = addslashes($_POST['email']);
        $sodt = addslashes($_POST['sodt']);
        if (!$usernamex||!$Pass||!$Passx||!$email){
            echo "Nhập đầy đủ thông tin";
            exit;
        }else{
            if ($Pass===$Passx){
                $sqlx = "SELECT EMAIL FROM ".$database.".quanlyuser 
                WHERE EMAIL = '$email';";
                if (mysqli_num_rows(mysqli_query($connect,$sqlx))>0) {
                    echo "Thành viên có địa chỉ email này đã tồn tại, đề nghị dùng email khác";
                    exit;
                }else{
                    $sql = "INSERT INTO ".$database.".quanlyuser(USER,PASS,EMAIL,SODT)
                    VALUE ('".$usernamex. "','".$Pass."','".$email."','".$sodt."');";
                    mysqli_query($connect,$sql);
                    echo "ĐĂNG KÝ THÀNH CÔNG  <a href='trangchu.php'>Về trang chủ</a>";
                    exit;
                };
            }else{
                echo "Re Password khác với Password";
                exit;                
            };
        };
        
    };
    
    ?>;
    <form action="dangky.php" method="POST">
        <H1>ĐĂNG KÝ NGƯỜI DÙNG</H1>
       <label>Tên đăng nhập: </label>
       <input type="text" placeholder="User name" name="Username"><br>
       <label>Mật khẩu: </label>
        <input type="password" placeholder="Password" name="Password"><br>
        <label>Nhập lại mật khẩu: </label>
        <input type="password" placeholder="Re Password" name="Passwordx"><br>
        <label>email: </label>
        <input type="email" placeholder="email" name="email"><br>
        <label>số điện thoại: </label>
        <input type="text" placeholder="Số điện thoại" name="sodt"><br>
        <button type="Submit" name="submit">Đăng ký</button>
    </form>
</body>
</html>