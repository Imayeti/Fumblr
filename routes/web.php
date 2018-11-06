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

Route::get('/', 'PostsController@welcome');
Route::get('/posts/{id}/edit', 'PostsController@edit');

Auth::routes();
Route::post('/posts', 'PostsController@store');
Route::patch('/posts/{id}', 'PostsController@update');
Route::get('/home', 'HomeController@index')->name('home');
