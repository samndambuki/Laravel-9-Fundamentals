<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/posts/create',function(){
    return view('create');
   
})->name('posts.create');

Route::post('/posts',function(){
    return redirect()->route('posts.create');
})->name('posts.store');

require __DIR__.'/auth.php';
