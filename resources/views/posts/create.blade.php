@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-10 mt-5">
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <select class="form-control">
                    <option>Nada</option>
                    <option>Ahmed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</div>
@endsection