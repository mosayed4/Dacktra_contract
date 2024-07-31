<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\JoinusController;
use Illuminate\Support\Facades\Route;

// // Route::get('/', function () {
// //     return view('welcome');
// });                                                                 


Route::get('/', [JoinusController::class, 'showEnglishForm'])->name('english.form');
Route::post('/join-us', [JoinusController::class, 'store'])->name('englishsend.form');
Route::get('/arabic', [JoinusController::class,'showArabicForm'])->name('arabic.form');


