<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin/stores')->namespace('Admin')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('admin.stores.index');
    Route::get('/create', [StoreController::class, 'create'])->name('admin.stores.create');
    Route::post('/store', [StoreController::class, 'store'])->name('admin.stores.store');
    Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('admin.stores.edit');
    Route::post('/update/{store}', [StoreController::class, 'update'])->name('admin.stores.update');
    Route::get('/destroy/{store}', [StoreController::class, 'destroy'])->name('admin.stores.destroy');
});