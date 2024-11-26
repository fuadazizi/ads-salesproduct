<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;


Route::get('/', [AdsController::class, 'index']);
