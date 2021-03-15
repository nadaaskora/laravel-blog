  
@extends('layouts.app')

@section('content')
<body class="antialiased">
<div class="d-flex justify-content-center">
        <a href="{{route('posts.create')}}" type="button" class="m-5 btn btn-success " data-toggle="button" aria-pressed="false" autocomplete="off">
            Create Post
        </a>
    </div>
    <div class="row d-flex justify-content-center">
        <table class="table col-10">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['posted_by']}}</td>
                <td class="col">
                    <a href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" class="btn btn-info">View</a>
                    <a href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
      </table>
      </div>
      </body>
@endsection