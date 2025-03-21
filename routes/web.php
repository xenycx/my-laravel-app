<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $mes = "ალექსანდრე დოხნაძე";
    return view('about', compact('mes'));
})->name('about');
