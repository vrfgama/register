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
    return view('form');
});


Route::post('/register', 'App\Http\Controllers\UserController@register');

Route::get('/read', 'App\Http\Controllers\UserController@listAll');

Route::get('/delete/{id}', 'App\Http\Controllers\UserController@delete');

Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit');

Route::put('/update/{id}', 'App\Http\Controllers\UserController@update');
