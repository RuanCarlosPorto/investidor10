<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [NewsController::class, 'indexView'])->name('home');

Route::get('/sobre', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'noticias'], function () {
    Route::get('/', [NewsController::class, 'storeView'])->name('news.create.view');
    Route::get('/{id}', [NewsController::class, 'showView'])->name('news');
});

Route::group(['prefix' => 'news'], function () {
    Route::post('/', [NewsController::class, 'store'])->name('news.create');
});
