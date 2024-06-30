<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about', ['name' => 'test']);
});

Route::get('/posts', function(){
    return view('posts', ['post'=> Post::all()]);
});