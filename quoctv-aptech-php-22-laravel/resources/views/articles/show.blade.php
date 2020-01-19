@extends('layout.master')
@section('content')
@component('layout.components.title')
show page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">STT</th>
            <th scope="col" class="">Ticle</th>
            <th scope="col" class="">Slug</th>            
            <th scope="col" class="">description</th>
            <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th>
            <th scope="col" class="">Delete Date</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$Articles->id}}</th>
            <td>{{$Articles->title}}</td>
            <td>{{$Articles->slug}}</td>
            <td>{{$Articles->description}}</td>
            <td>{{$Articles->created_at}}</td>
            <td>{{$Articles->updated_at}}</td>
            <td>{{$Articles->delete_at}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('Articles.edit',$Articles->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('Articles.destroy',$Articles->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger mx-2 rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection