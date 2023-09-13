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

Route::get('/', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::post('/store', 'PostController@store');
Route::get('/show/{post}', 'PostController@show');
Route::get('/edit/{post}', 'PostController@edit');
Route::put('/update/{post}', 'PostController@update');
Route::delete('/destroy/{post}', 'PostController@destroy');
