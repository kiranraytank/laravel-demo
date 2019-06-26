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
    return view('pages.home');
})->name('home');

Route::get('user/about', function () {
    return view('pages.about');
})->name('about');

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('home', 'QueryController@home');
Route::get('queries', 'QueryController@test')->name('queries');
Route::get('test', function(){
	dd('test');
});

Route::group(['prefix' => 'user/abc', 'namespace' => 'Auth'], function(){
	Route::get('login', function(){
		$route = Route::current();
		$name = Route::currentRouteName();
		$action = Route::currentRouteAction();
		dump($route);
		dump($name);
		dump($action);
	})->name('user.login');
	Route::get('register', function(){
		dd('register');
	});
});