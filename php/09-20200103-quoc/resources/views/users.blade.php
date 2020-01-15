<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    h1{
        text-align: center;
        color:green;
    };
    th{
        
    }
    </style>
</head>
<body>
<div class="Container">

<h1> DANH SÁCH KHÁCH HÀNG TIỀM NĂNG</h1>
<table class="table" border =1>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($users as $user){
    ?>
    <tr>
      <th><?php echo $user->id ?></th>
      <td><?php echo $user->user ?></td>
      <td><?php echo $user->email ?></td>
      <td><?php echo $user->address ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
