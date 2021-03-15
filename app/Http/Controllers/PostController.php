<?php
namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts.index', [
                'posts' => $posts,
            ]);
    }

    public function show($post)
    {
        $post =Post::find($post);
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data=request()->all();

        //logic for saving in db
        Post::create($data);
        return redirect()->route('posts.index');
    }
    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(StorePostRequest $myRequestObject)
    {
        // Post::whereId($myRequestObject->all());

        dd($myRequestObject);
        Post::whereId('id', $post)->update($data);

        // dd($data);
        return redirect()->route('posts.index');
    }
}
