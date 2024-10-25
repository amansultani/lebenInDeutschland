<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', function () {
    return view('question.category');
})->name('category');

Route::resource('questions',QuestionController::class)->only(['index']);
Route::post('/change-language', [App\Http\Controllers\LanguageController::class, 'changeLanguage'])->name('change.language');