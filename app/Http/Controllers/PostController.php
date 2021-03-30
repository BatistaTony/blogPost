<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){


      
        $posts =  Post::all();

        return view('post.posts',compact('posts'));
    }

    public function store(){

        $data = request()->validate([
            'title'=> 'string |required | min:5',
            'text'=> 'string | min:10  | required'
        ]);



        $post = new Post;


        $post->create($data);

        return redirect('/');
    }

    public function show(Post $post){

        return view('post.post', compact('post'));

    }

    public function destroy(Post $post){

        $post->delete();

        return redirect('/');
    }
}