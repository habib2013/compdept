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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfilesController@user')->name('profile.show');
Route::get('/settings/{user}', 'ProfilesController@settings')->name('profile.show');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/storepost','PostsController@store');
//Route::get('/index', 'PostsController@index')->name('posts.create');

