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

Route::get('/test', function () {
    return view('test');
});

/* admin routes */

Route::get('/admin/index', function () {
    return view('admin/index');
});

Route::get('/admin/cards', function () {
    return view('admin/cards');
});

Route::get('/admin/charts', function () {
    return view('admin/charts');
});

Route::get('/admin/buttons', function () {
    return view('admin/buttons');
});