<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/hello', function () {
    return view('hello.index');
});

// // Route::get('hello', 'App\Http\Controllers\HelloController');
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// // Route::get('hello/other', 'App\Http\Controllers\HelloController@other');

// Route::post('hello', 'App\Http\Controllers\HelloController@post');
