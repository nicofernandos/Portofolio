<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/',function(){
    return view('home', ['title' => 'Home Page Portofolio']);
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

Route::get('/experience', function(){
    return view('experience', ['title' => 'Experience']);
});

Route::get('/project', function(){
    // $posts = Project::with('category')->latest()->get();
    return view('project',['title' => 'Project','proj' => Project::filter(request(['search','category']))->latest()->paginate(9)->WithQueryString()]);
});

Route::get('/projects', function(){
    return view('projects',['title' => 'Singel Projects']);
});

Route::get('certificate', function(){
    return view('certificate',['title' => 'Certificate']);
});