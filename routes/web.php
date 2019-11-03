<?php
use App\User;
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
Route::post('/users', function (Request $request) {
    $user = User::create($request->all());
    return Response::json($user);
});
 

Route::get('/users/{user_id?}', function ($user_id) {
    $user = User::find($user_id);
    return Response::json($user);
});

//--GET LINK TO EDIT--//
// Route::get('/links/{link_id?}', function ($link_id) {
//     $link = Link::find($link_id);
//     return Response::json($link);
// });
 
//--UPDATE a link--//
Route::put('/users/{user_id?}', function (Request $request,User $user_id) {
    $user = User::find($user_id);
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
  
    $user->save();
    return Response::json($user);
});
 
//--DELETE a link--//
Route::delete('/users/{user_id?}', function (User $user_id) {
    $user = User::destroy($user_id);
    return Response::json($user);
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








