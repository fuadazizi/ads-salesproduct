<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;


Route::get('/', [AdsController::class, 'comingsoon']);
Route::get('/pages', [AdsController::class, 'index']);
