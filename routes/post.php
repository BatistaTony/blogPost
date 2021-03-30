<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'index']);

Route::get('/make_post', function(){
    return view('post.create');
});

Route::post('/post', [PostController::class, 'store']);



?>
