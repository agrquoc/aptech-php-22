<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">STT</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Password</th>
            <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>{{$user->softdeletes}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>