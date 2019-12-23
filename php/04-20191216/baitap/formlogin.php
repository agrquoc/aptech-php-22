<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="check.php" method="POST">
        <H1>ĐĂNG NHẬP NGƯỜI DÙNG</H1>
       <label>Tên đăng nhập: </label>
       <input type="text" placeholder="User name" name="Username"><br>
       <label>Mật khẩu: </label>
        <input type="password" placeholder="Password" name="Password"><br>
        <input type="checkbox" name="quenmatkhau"> "Quên mật khẩu" <br>
        <button type="Submit">Login</button>
    </form>
</body>
</html>