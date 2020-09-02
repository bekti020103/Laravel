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
    return view('welcome');
});

Route::get('/belajar', function(){
    return '<h1>Laravel</h1>';
});

Route::get('/belajar/laravel01', function(){
    echo '<h1 style="text-align: center">Welcome My Blog</h1>';
});