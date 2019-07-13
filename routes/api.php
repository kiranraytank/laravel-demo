<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'api\v1', 'prefix' => 'v1'], function(){
	Route::post('categories', 'GeneralController@categories');
	Route::post('menus', 'GeneralController@menus');
	Route::post('login', 'UserController@login');
	Route::post('register', 'UserController@register');
});

Route::group(['namespace' => 'api\v1', 'prefix' => 'v1', 'middleware' => 'auth:api'], function(){
	Route::post('profile', 'UserController@myProfile');
	Route::post('profile/edit', 'UserController@editProfile');
	Route::post('logout', 'UserController@logout');
});