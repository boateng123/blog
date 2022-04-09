<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('posts/index', [ 'posts' => Post::all() ]);
});
