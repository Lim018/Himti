<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro');
});

Route::get('/about', function () {
    return view('about-us');
});
