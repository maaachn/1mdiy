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

Route::get('/', "WelcomeController@index");

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('materials', 'ItemsController@materials')->name('materials.get');
Route::get('index', 'ItemsController@index')->name('index.get');
Route::get('show/{id}', 'ItemsController@show')->name('show.get');

Route::post('want/{id}', 'UsersController@store')->name('user.want');
Route::delete('dont_want/{id}', 'UsersController@destroy')->name('user.dont_want');

Route::get('user/{id}', 'UsersController@show')->name('user.show');

