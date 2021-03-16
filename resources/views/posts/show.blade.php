@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center m-5">
  <div class="card col-10">
    <div class="card-header">
      Post Details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
      <p class="card-text">{{$post['description']}}</p>
    </div>
  </div>
  </div>
@endsection