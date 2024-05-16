<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/details', function () {
    return view('admin.product-details');
});

Route::get('/demo', function () {
    return view('demo');
});
Route::post('/demo', [App\Http\Controllers\DemoController::class, 'store'])->name('demo.store');
Route::get('/demo', [App\Http\Controllers\DemoController::class, 'index'])->name('demo.index');

