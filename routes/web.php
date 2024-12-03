<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;


Route::get('/', function () {
    return view('comingsoon');
});
Route::get('/index', [AdsController::class, 'index'])->name('index');
Route::get('/banners', [AdsController::class, 'banners'])->name('banners');
Route::get('/performances', [AdsController::class, 'performances'])->name('performances');
