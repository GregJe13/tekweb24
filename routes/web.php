<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function(){
    return view('homepage', [
        "judul" => "Home Page"
    ]);
});

Route::get('about',function(){
    return view('about');
});

Route::get('contact',function(){
    return view('datadiri');
});

Route::get('login',function(){
    return view('login');
});

Route::get('dashboard',function(){
    return view('dashboard');
});
