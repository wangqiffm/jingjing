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
Route::get('/contact', function () {
  return view('contact');
});

Route::get('foo', function () {
  return 'Hello World';
});

Route::get('/user', 'UserController@index');

Route::post('/contact/send', 'PageController@contact')->name('contact.send');
Route::post('/reservation/send', 'PageController@reservation')->name('reservation.send');
//Route::get('/', 'PageController@index');
Route::resource('articles', 'ArticleController');




// inside the 'admin' prefix, I presume
Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'admin']], function () {
  CRUD::resource('permission', '\Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController');
  CRUD::resource('role', '\Backpack\PermissionManager\app\Http\Controllers\RoleCrudController');
  CRUD::resource('user', 'Admin\UserCrudController');
//  Route::auth();
  Route::post('register', [
    'uses'=> 'Auth\RegisterController@register',
  ]);
  Route::get('register', [
    'uses'=> 'Auth\RegisterController@showRegistrationForm ',
    'as' => 'register'
  ]);

  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
  CRUD::resource('tag', 'Admin\TagCrudController');
  CRUD::resource('article', 'Admin\ArticleCrudController');
});
