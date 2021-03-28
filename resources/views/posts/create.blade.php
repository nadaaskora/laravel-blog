@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-10 mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <select class="form-control">
            @foreach($users as $user)
                    <option>{{$user->name}}</option>
            @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</div>
@endsection