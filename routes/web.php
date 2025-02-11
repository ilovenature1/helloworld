<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// New route for hello
Route::get('/hello', function () {
    return view('hello');
});
