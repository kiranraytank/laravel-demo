<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::group(['namespace' => 'Admin', 'middleware' => 'permission'], function(){
	Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard.index');

	Route::resource('categories', 'CategoryController');
	Route::resource('menus', 'MenuController');
	Route::resource('staff', 'StaffController');
	Route::resource('customers', 'CustomerController');
	Route::resource('orders', 'OrderController');
});
