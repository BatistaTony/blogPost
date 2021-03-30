<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'index']);

Route::get('/make_post', function(){
    return view('post.create');
});

Route::post('/post', [PostController::class, 'store']);

Route::get('/post/{post}', [PostController::class, 'show']);

Route::delete('post/{post}',[PostController::class, 'destroy']);

?>