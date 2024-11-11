<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::prefix("admin")->group(function(){
    Route::get("/",function(){
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get("/topics",function(){
        return view("admin.topic");
    })->name("admin.topics");

    Route::get("/posts",function(){
        return view("admin.manage-post");
    })->name("admin.posts");
    Route::get("/posts/create",function(){
        return view("admin.insert-post");
    })->name("admin.post.create");
});

Route::get("/signup",function(){
    return view("/");
})->name('signup');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
