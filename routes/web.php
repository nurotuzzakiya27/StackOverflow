<?php

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

//raw template keseluruhan
Route::get('/master', function () {
    return view('layouts/master');
});


//template login
Route::get('/login', function () {
    return view('login');
});

//template register
Route::get('/register', function () {
    return view('register');
});

//template tabel
Route::get('/table', function () {
    return view('table');
});

//template form
Route::get('/form', function () {
    return view('form');
});