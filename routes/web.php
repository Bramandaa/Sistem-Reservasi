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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/seat', function () {
    return view('seat');
});
Route::get('/myOrder', function () {
    return view('myOrder');
});
Route::get('/account', function () {
    return view('account');
});

// Dashboard
Route::get('/dashboard/', function () {
    return view('dashboard/index');
});