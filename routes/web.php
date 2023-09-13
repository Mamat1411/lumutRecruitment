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

Route::get('/', 'LoginController@index');
Route::post('/postlogin', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/store', 'PostController@store');
Route::get('/posts/show/{post}', 'PostController@show');
Route::get('/posts/edit/{post}', 'PostController@edit');
Route::put('/posts/update/{post}', 'PostController@update');
Route::delete('/posts/destroy/{post}', 'PostController@destroy');
