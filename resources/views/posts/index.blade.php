  
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
                    <th>Title</th>
                    <th>Posted by</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['posted_by']}}</td>
                <td>{{($post['created_at'])->format('Y-m-d')}}</td>
                <td class="col">
                    <a href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" class="btn btn-info">View</a>
                    <a href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm ('Delete post?')" href="{{ route('posts.destroy', [ 'post' => $post['id'] ]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
            </tbody>
      </table>
      {{-- Pagination --}}

        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
      </div>
      </body>
     
      
@endsection