<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.top.index'); // keep or change to your frontend home view
});

Route::get('/about', function () {
    return view('about'); // example frontend route
});