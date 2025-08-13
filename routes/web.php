<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// News Routes
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{news}', [NewsController::class, 'show'])->name('show');
});

// Portal HIMTI Routes
Route::prefix('portal')->name('portal.')->group(function () {
    Route::get('/', [PortalController::class, 'index'])->name('index');
    Route::get('/{news}', [PortalController::class, 'show'])->name('show');
});

// Marketplace Routes
Route::prefix('marketplace')->name('marketplace.')->group(function () {
    Route::get('/', [MarketplaceController::class, 'index'])->name('index');
    Route::get('/{product}', [MarketplaceController::class, 'show'])->name('show');
    Route::post('/{product}/purchase', [MarketplaceController::class, 'purchase'])->name('purchase');
});

// Payment Routes
Route::prefix('payment')->name('payment.')->group(function () {
    Route::get('/{order}/process', [PaymentController::class, 'process'])->name('process');
    Route::post('/callback', [PaymentController::class, 'callback'])->name('callback');
    Route::get('/{order}/success', [PaymentController::class, 'success'])->name('success');
});

Route::get('/sop/partnership', function () {
    return view('coming-soon');
});

Route::get('/sop/medinfo', function () {
    return view('sop.medinfo');
});

Route::get('/coming', function () {
    return view('coming-soon');
});

// Auth Routes
// require __DIR__.'/auth.php';

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // News Management
    Route::resource('news', AdminNewsController::class);
    
    // Product Management
    Route::resource('products', AdminProductController::class);
    
    // Order Management
    Route::get('orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
    Route::patch('orders/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('orders.update-status');
});

// Route::fallback(function () {
//     return view('coming-soon');
// });