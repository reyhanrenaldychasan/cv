<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/resume', function() {
    return view('resume');
})->name('resume');

Route::get('/portofolio', function() {
    return view('portofolio');
})->name('portofolio');
