<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts =  \App\Models\Post::all();

        return view('post.posts',compact('posts'));
    }

    public function store(){

        $data = request()->validate([
            'title'=> 'string |required | min:5',
            'text'=> 'string | min:10  | required'
        ]);



        $post = new \App\Models\Post;


        $post->create($data);

        return redirect('/');
    }
}
