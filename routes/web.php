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

Route::get('/', 'PageController@home')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('front/menu', 'PageController@menu')->name('menu');
Route::get('contact', 'PageController@contact')->name('contact');



// Route::get('user/about', function () {
//     return view('pages.about');
// })->name('about');

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('home', 'QueryController@home');
Route::get('queries', 'QueryController@test')->name('queries');
Route::get('test', function(){
	dd('test');
});

Route::group(['middleware' => ['auth', 'activated']], function(){
	Route::get('dashboard', 'HomeController@index')->name('dashboard');
	Route::resource('categories', 'CategoryController');
	Route::resource('menu', 'MenuController');
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

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});