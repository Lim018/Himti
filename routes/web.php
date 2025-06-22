<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('compro');
});

Route::get('/news', function () {
    $newsList = NewsController::index();
    return view('news.index', compact('newsList'));
});


Route::get('/news.show/detail/{id}', function ($id) {
    $news = NewsController::getNewsById($id);
    if (!$news) {
        return redirect('/news')->with('error', 'Berita tidak ditemukan.');
    }
    $newsList = array_slice(NewsController::getLatestNews(4), 1, 3);
    return view('news.show', compact('news', 'newsList'));
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

Route::get('/portal', function () {
    $infoList = InfoController::index();
    return view('portal.index', compact('infoList'));
});

Route::get('/portal.show/detail/{id}', function ($id) {
    $info = InfoController::getInfoById($id);
    if (!$info) {
        return redirect('/portal')->with('error', 'Informasi tidak ditemukan.');
    }
    $infoList = array_slice(InfoController::getLatestInfo(4), 1, 3);
    return view('portal.show', compact('info', 'infoList'));
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
