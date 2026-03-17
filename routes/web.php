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
    return view('th/home');
});

Route::get('/about', function () {
    return view('th/about');
});

Route::get('/contact', function () {
    return view('th/contact');
});

Route::get('/innovation-group', function () {
    return view('th/innovation-group');
});

Route::get('/research-results-commercial', function () {
    return view('th/research-results-commercial');
});

Route::get('/innovation-group-all', function () {
    return view('th/innovation-group-all');
});

