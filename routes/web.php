<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', function () {
    return view('question.category');
})->name('category');

Route::resource('questions',QuestionController::class)->only(['index']);
Route::post('/change-language', [App\Http\Controllers\LanguageController::class, 'changeLanguage'])->name('change.language');

Route::get('/test', [TestController::class, 'showBundeslandList'])->name('test.list');
Route::get('/test/start/{bundesland}', [TestController::class, 'startTest'])->name('test.start');