<?php

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



});
