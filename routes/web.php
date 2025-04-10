<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'home'])->name('home');
Route::get('/about', [MyController::class, 'about'])->name('about');
