<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro');
});

Route::get('/comprof', function () {
    return view('compro');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/department/ekonomi-kreatif', function () {
    return view('depart.ekraf');
});

Route::get('/news', function () {
    return view('news.index');
});

Route::get('/sop/{any?}', function () {
    return view('coming-soon');
})->where('any', '.*');

Route::get('/features/{any?}', function () {
    return view('coming-soon');
})->where('any', '.*');

Route::get('/department/{any}', function ($any) {
    // Only ekonomi-kreatif department is built, others redirect to coming soon
    if ($any !== 'ekonomi-kreatif') {
        return view('coming-soon');
    }
    return view('depart');
})->where('any', '.*');

Route::get('/contact', function () {
    return view('coming-soon');
});

Route::get('/events', function () {
    return view('coming-soon');
});

Route::get('/gallery', function () {
    return view('coming-soon');
});

// Catch-all route for any undefined routes
Route::fallback(function () {
    return view('coming-soon');
});
