<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('testhome');
})->name('home');
Route::get('contact', function () {
    return view('contactUS');
})->name('contact');
Route::get('about', function () {
    return view('aboutUS');
})->name('about');
