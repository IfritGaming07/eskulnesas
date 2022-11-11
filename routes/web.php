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
    return view('dashboard');
});
Route::get('/a', function () {
    return view('aboutVoly');
});
Route::get('/b', function () {
    return view('profilevoly');
});
Route::get('/c', function () {
    return view('tambahdata');
});
Route::get('/d', function () {
    return view('editdata');
});
Route::get('/e', function () {
    return view('data');
});


