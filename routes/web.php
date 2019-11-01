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
Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::post('follow/{user}','FollowsController@store');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/profile/{user}', 'ProfilesController@user')->name('profile.show');
//Route::get('/settings/{user}', 'ProfilesController@settings')->name('profile.show');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::get('posts/{slug}',['as'=>'post.single','uses'=>'PostsController@getSingle'])->where('slug','[\w\d\-\_]+');

Route::get('/{username}',['as'=>'profile.single','uses'=>'ProfilesController@user'])->where('username','[\w\d\-\_]+');

Route::get('/settings/{username}',['as'=>'profile.single','uses'=>'ProfilesController@settings'])->where('username','[\w\d\-\_]+');
Route::get('/usersettings/{username}',['as'=>'users.update','uses'=>'UserSettings@show'])->where('username','[\w\d\-\_]+');



Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::patch('/users/{user}', 'UserSettings@update')->name('users.update');
//Route::get('/usersettings/{user}', 'UserSettings@update')->name('users.update');

Route::post('/storepost','PostsController@store');
//Route::get('/index', 'PostsController@index')->name('posts.create');





