<?php

use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts' => $posts]);
});

Route::get('/myposts', function () {
    if (auth()->check()) {
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
        
    }
    return view('myposts', ['posts' => $posts]);
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);


// Blog Post routes
Route::post('/create-post', [Postcontroller::class, 'createPost']);
Route::get('/edit-post/{post?}', [Postcontroller::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [Postcontroller::class, 'updatePost']);
Route::delete('/delete-post/{post}', [Postcontroller::class, 'deletePost']);