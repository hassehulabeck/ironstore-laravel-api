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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secret', 'HomeController@secret');

Route::get('/addProduct', 'ProductController@create');

Route::get('/persons', 'PersonController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
