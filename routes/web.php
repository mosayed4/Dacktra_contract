<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [indexController::class, 'index']);

