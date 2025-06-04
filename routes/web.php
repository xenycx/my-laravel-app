<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'home'])->name('home');
Route::get('/about', [MyController::class, 'about'])->name('about');
Route::get('/slide', [MyController::class, 'slide'])->name('slide');


Route::get('/posts', [MyController::class, 'posts'])->name('posts.index');
Route::get('/posts/create', [MyController::class, 'create'])->name('posts.create');
Route::post('/posts', [MyController::class, 'store'])->name('posts.store');







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
