<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about']);

Route::get('team', [PageController::class, 'team']);

Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');

  Route::get('articles/{id}', [ArticleController::class, 'show'])
  ->name('articles.show');
