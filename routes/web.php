<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\JoinusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// // Route::get('/', function () {
// //     return view('welcome');
// });                                                                 


Route::get('/', [JoinusController::class, 'showEnglishForm'])->name('english.form');
Route::post('/join-us', [JoinusController::class, 'store'])->name('englishsend.form');
Route::get('/arabic', [JoinusController::class,'showArabicForm'])->name('arabic.form');


Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');



Route::get('/language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('language.change');
