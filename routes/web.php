<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/department/ekonomi-kreatif', function () {
    return view('depart.ekraf');
});
