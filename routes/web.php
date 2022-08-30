<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Melakukan grouping route dengan nama product dengan prefix product
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/read', [ProductController::class, 'read']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::get('/store', [ProductController::class, 'store']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::get('/update/{id}', [ProductController::class, 'update']);
    Route::get('/destroy/{id}', [ProductController::class, 'destroy']);
});
