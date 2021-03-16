<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts.index', [
                'posts' => $posts,
                'posts' => Post::paginate(4)
            ]);
    }

    public function show($post)
    {
        $post =Post::find($post);
        dd();
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

    public function update(Request $request, $post)
    {
        $request=$request->all();
        // dd($request);
        $post= Post::find($post);
        // dd($post);
        $post->update($request);
        // dd($post);
        return redirect()->route('posts.index');
    }

    public function destroy($post)
    {
        // Post::destroy($post);
        $post= Post::find($post);
        // dd($post);
        $post->delete($post);
        return redirect()->route('posts.index');
    }
}
