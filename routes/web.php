<?php
use \App\Course;
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
Route::get('/welcomenote','ForDummie@welcomenote')->name('about');
Route::get('/history','ForDummie@history')->name('history');
Route::get('/mission','ForDummie@mission')->name('mission');
Route::get('/mycourse','ProfilesController@course')->name('course');
Route::post('follow', 'ProfilesController@follwUserRequest')->name('follow');
// Route::get('/courses/{username}',['as'=>'profile.single','uses'=>'ProfilesController@course'])->where('username','[\w\d\-\_]+');
Route::post('/courses','ProfilesController@createcourse')->name('createcourse');
Route::post('/editcourse','ProfilesController@editcourse');

Route::post('/deletecourse','ProfilesController@deletecourse');



Route::get('/cvdownload/{file}',['as'=>'download.single','uses'=>'ProfilesController@download']);


Route::get('/{username}',['as'=>'profile.single','uses'=>'ProfilesController@user'])->where('username','[\w\d\-\_]+');

Route::get('/settings/{username}',['as'=>'profile.single','uses'=>'ProfilesController@settings'])->where('username','[\w\d\-\_]+');
Route::get('/usersettings/{username}',['as'=>'users.update','uses'=>'UserSettings@show'])->where('username','[\w\d\-\_]+');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');



Route::get('/course/{course_id?}', function ($course_id) {
    $course = Course::find($course_id);
    return Response::json($course);
});




