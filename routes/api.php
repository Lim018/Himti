<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These API routes are loaded by the RouteServiceProvider within a group
| which is assigned the "api" middleware group.
|
| The default 'auth:sanctum' middleware on the /user route is commented out
| to ensure all routes are publicly accessible for now.
|
*/

// --- IMPORTANT: We're commenting out or removing the authentication middleware for now ---
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// --- API Routes for News ---
// These routes will be publicly accessible without authentication
Route::resource('news', NewsController::class);

// --- API Routes for Departments ---
// These routes will also be publicly accessible without authentication
Route::resource('departments', DepartmentController::class);