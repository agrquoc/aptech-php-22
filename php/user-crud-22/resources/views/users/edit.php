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
    <div class="col-12 ">
      <form action="{{route('users.update',$user->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name"
            value="{{$user->name}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">email</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email"
            value="{{$user->email}}">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>