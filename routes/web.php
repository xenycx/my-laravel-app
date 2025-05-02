<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'home'])->name('home');
Route::get('/about', [MyController::class, 'about'])->name('about');
Route::get('/slide', [MyController::class, 'slide'])->name('slide');

// Examples of routes without using controllers
// Route::get('/', function() {
//     return view('home');  // Returns home.blade.php from resources/views
// })->name('home');
//
// Route::get('/about', function() {
//     return view('about');  // Returns about.blade.php from resources/views
// })->name('about');
//
// Route::get('/slide', function() {
//     return view('slide');  // Returns slide.blade.php from resources/views
// })->name('slide');
