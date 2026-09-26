<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//Get dashboard page
Route::get('/dashboard', function () {
    return view('dashboard.index');
});