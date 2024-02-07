<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

//serve as a form for creating new blog posts
// - /posts/create - path for the route
Route::get('/posts/create',function(){
    return view('create');
    // - 'posts.create' - name of the route
})->name('posts.create');

Route::post('/posts',function(){
    return redirect()
    ->route('posts.create');
})->name('posts.store');

require __DIR__.'/auth.php';
