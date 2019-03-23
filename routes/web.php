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


Route::get('/books', 'BooksController@index');
Route::post('/books', 'BooksController@post');
Route::post('/books/del/{book}', 'BooksController@delete');
//Route::post('/books/del/{id}', 'BooksController@delete');

//Route::post('/book/{book}', '');

Route::get('auth/register', 'Auth\RegisterController@showRegistraterForm');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('auth/login', 'Auth\LoginController@showLoginForm');
Route::post('auth/login', 'Auth\LoginController@login');

Route::get('auth/logout', 'Auth\LoginController@logout');
