@extends('layout.master')
@section('content')
@component('layout.components.title')
create page
@endcomponent
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('Articles.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">Tiêu đề</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="title" name="title">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" >Description</label>
          <input type="text" class="form-control rounded-0" id="description" placeholder="Description" name="description">
        </div>
        <div class="form-group ">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            Xác nhận
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection