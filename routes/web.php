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
   
    Route::group(['prefix' => 'users/{id}'], function () {
        // Route::post('follow', 'UserFollowController@store')->name('user.follow');
        // Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        // Route::get('followings', 'UsersController@followings')->name('users.followings');
        // Route::get('followers', 'UsersController@followers')->name('users.followers');
    
        // Route::post('fav', 'UserFavController@store')->name('user.fav');
        // Route::delete('unfav', 'UserFavController@destroy')->name('user.unfav');
        // Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
    });
    //ユーザー投稿機能,ユーザー投稿ページ,ユーザー投稿詳細ページ
    Route::resource('works', 'WorksController');
    
});