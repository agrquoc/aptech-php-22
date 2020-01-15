<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border =1>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>
  <?php
   foreach ($users as $user) { 
    ?>
    <tr>
        <td><?php  echo $user->id  ?></td>
        <td><?php  echo $user->name ?></td>
        <td><?php  echo $user->email ?></td>
    </tr>
   <?php }?>
</table>;
</body>
</html>