<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/',function(){
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about',function(){
    return view('about', ['title' => 'About']);
});

Route::get('/galery',function(){
    return view('galery', ['title' => 'About My Galery']);
});

Route::get('/vimi', function(){
    return view('vimi', ['title' => 'Visi Misi']);
});

Route::get('/education', function(){
    return view('education', ['title' => 'Education']);
});