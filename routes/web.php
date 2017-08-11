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


//POST request

Route::post('/posts', 'PostController@store');

Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionController@authenticate');

Route::post('/posts/{post}/comment', 'CommentController@store')->where('post','[0-9]+');


//GET request
Route::get('/posts', 'PostController@index')->name('home');
Route::get('/home', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show')->where('post','[0-9]+');

Route::get('/posts/create', 'PostController@create');

Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionController@create')->name('login');

Route::get('/logout', 'SessionController@destroy');