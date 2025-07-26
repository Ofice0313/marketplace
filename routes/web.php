<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/stores', [StoreController::class, 'index']);


Route::get('/admin/stores/create', [StoreController::class, 'create']);
Route::post('/admin/stores/store', [StoreController::class, 'store']);

Route::prefix('admin/stores')->group(function () {
    Route::get('/', [StoreController::class, 'index']);
    Route::get('/create', [StoreController::class, 'create']);
    Route::post('/store', [StoreController::class, 'store']);
});