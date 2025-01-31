<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('about', [PageController::class, 'about']);
Route::get('team', [PageController::class, 'team']);
