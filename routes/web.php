<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/privacy', function () {
    return view('privacy-policy');
});
Route::get('/terms', function () {
    return view('terms-and-conditions');
});
