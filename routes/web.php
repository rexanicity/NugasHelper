<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/test', function () {
    return 'Laravel OK!';
});