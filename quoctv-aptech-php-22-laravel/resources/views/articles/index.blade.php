@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">STT</th>
            <th scope="col" class="">Ticle</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Articles as $Article)
          <tr class="text-center">
            <th scope="row">{{$Article->id}}</th>
            <td>{{$Article->title}}</td>
            <td>{{$Article->description}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('articles.show',$Article->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('articles.destroy',$article->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>s
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$Article->links()}}</div>
    </div>
  </div>
</div>
@endsection