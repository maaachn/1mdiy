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
    //材料カテゴリー
    Route::get('bin', 'ItemsController@bin')->name('index.bin');
    Route::get('box', 'ItemsController@box')->name('index.box');
    Route::get('flower', 'ItemsController@flower')->name('index.flower');
    Route::get('cardboard', 'ItemsController@cardboard')->name('index.cardboard');
    Route::get('others', 'ItemsController@others')->name('index.others');
    Route::get('index', 'ItemsController@index')->name('index.all');
Route::get('show/{id}', 'ItemsController@show')->name('show.get');

Route::post('want/{id}', 'UsersController@store')->name('user.want');
Route::delete('dont_want/{id}', 'UsersController@destroy')->name('user.dont_want');



Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
   //ユーザー投稿機能,ユーザー投稿ページ,ユーザー投稿詳細ページ
    Route::get('works/create', 'ItemsController@create')->name('works.create');
    Route::post('works', 'ItemsController@store')->name('works.store');
    Route::delete('works/{id}', 'ItemsController@destroy')->name('works.destroy');
    
    //口コミ（コメント）機能
    Route::get('comment','CommentsController@index')->name('comments.index');
    Route::post('comment/{id}','CommentsController@store')->name('comments.store');
    Route::delete('comment/{id}','CommentsController@destroy')->name('comments.destroy');
});