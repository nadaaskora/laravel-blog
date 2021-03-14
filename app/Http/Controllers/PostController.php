<?php
namespace App\Http\Controllers;
class PostController extends Controller{
    public function index(){
        $posts=[
            ['id'=>1,
            'title'=>'php',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, blanditiis aspernatur. Delectus accusantium, fuga eaque voluptatem ipsam debitis laboriosam, eum cum ducimus reprehenderit temporibus dolor? Laborum atque dolores animi at!',
            'posted_by'=>'Nada'
            ],
            ['id'=>2,
            'title'=>'js',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, blanditiis aspernatur. Delectus accusantium, fuga eaque voluptatem ipsam debitis laboriosam, eum cum ducimus reprehenderit temporibus dolor? Laborum atque dolores animi at!',
            'posted_by'=>'Ahmed'
            ],
        ];
            return view('posts.index',[
                'posts' => $posts,
            ]);      

    }

    public function show($post){
        $post =[
            ['id'=>1,
            'title'=>'php',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, blanditiis aspernatur. Delectus accusantium, fuga eaque voluptatem ipsam debitis laboriosam, eum cum ducimus reprehenderit temporibus dolor? Laborum atque dolores animi at!',
            'posted_by'=>'Nada'
            ],
            ['id'=>2,
            'title'=>'js',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, blanditiis aspernatur. Delectus accusantium, fuga eaque voluptatem ipsam debitis laboriosam, eum cum ducimus reprehenderit temporibus dolor? Laborum atque dolores animi at!',
            'posted_by'=>'Ahmed'
            ],
        ];
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        //logic for saving in db

        return redirect()->route('posts.index');
    }
}