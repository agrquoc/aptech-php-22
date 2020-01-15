<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>DANH SÁNH USER</h1>
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">STT</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Địa chỉ Email</th>
            <th scope="col" class="">Sửa</th>
            <th scope="col" class="">xóa</th>
          </tr>
        </thead>
        <table border=1>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  sửa
                </button>
              </form>
            </td>
            <td>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Xóa
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$users->links()}}</div>
    </div>
  </div>
</div>
</body>
</html>