<?php
use App\Link;
use Illuminate\Http\Request;
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

Route::get('/testmodal', function () {
    $links = Link::all();
    return view('testingmodal')->with('links', $links);
});


//--CREATE a link--//
Route::post('/links', function (Request $request) {
    $link = Link::create($request->all());
    return Response::json($link);
});
 
//--GET LINK TO EDIT--//
Route::get('/links/{link_id?}', function ($link_id) {
    $link = Link::find($link_id);
    return Response::json($link);
});
 
//--UPDATE a link--//
Route::put('/links/{link_id?}', function (Request $request, $link_id) {
    $link = Link::find($link_id);
    $link->url = $request->url;
    $link->description = $request->description;
    $link->save();
    return Response::json($link);
});
 
//--DELETE a link--//
Route::delete('/links/{link_id?}', function ($link_id) {
    $link = Link::destroy($link_id);
    return Response::json($link);
});







Route::get('/autocomplete', 'AutocompleteController@index');
Route::get('/verify','AdminsController@verify');
//Route::get('/users/{user_id?}','AdminsController@showModal');


Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::post('follow/{user}','FollowsController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs','FaqsController@faqs');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::get('posts/{slug}',['as'=>'post.single','uses'=>'PostsController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('/{username}',['as'=>'profile.single','uses'=>'ProfilesController@user'])->where('username','[\w\d\-\_]+');
Route::get('/settings/{username}',['as'=>'profile.single','uses'=>'ProfilesController@settings'])->where('username','[\w\d\-\_]+');
Route::get('/usersettings/{username}',['as'=>'users.update','uses'=>'UserSettings@show'])->where('username','[\w\d\-\_]+');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::patch('/users/{user}', 'UserSettings@update')->name('users.update');
Route::post('/storepost','PostsController@store');








