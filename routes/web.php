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

// Route User
Route::get('/user', 'UsersController@index')->name('user');
Route::get('/user/profile/{user}', 'UsersController@edit')->name('profile');
Route::get('/user/create', 'UsersController@create');
Route::get('/user/detail/{user}', 'UsersController@show');
Route::get('/user/detail/edit/{user}', 'UsersController@edit');
Route::patch('/user/detail/edit/{user}', 'UsersController@update');
Route::delete('/user/detail/edit/delete/{user}', 'UsersController@destroy');
Route::post('/user', 'UsersController@store');

// Route Menu
Route::get('/menu', 'MenusController@index')->name('menu');
Route::get('/menu/create', 'MenusController@create');
Route::get('/menu/detail/{menu}', 'MenusController@show');
Route::get('/menu/detail/edit/{menu}', 'MenusController@edit');
Route::patch('/menu/detail/edit/{menu}', 'MenusController@update');
Route::delete('/menu/detail/edit/delete/{menu}', 'MenusController@destroy');
Route::post('/menu', 'MenusController@store');

// Route Order
Route::get('/order', 'OrdersController@index')->name('order');
Route::get('/order/create', 'OrdersController@create');
Route::get('/order/detail/{order}', 'OrdersController@show');
Route::get('/order/detail/edit/{order}', 'OrdersController@edit');
Route::patch('/order/detail/edit/{order}', 'OrdersController@update');
Route::delete('/order/detail/edit/delete/{order}', 'OrdersController@destroy');
Route::post('/order', 'OrdersController@store');

// Route Order Detail
Route::get('/order_detail', 'OrderDetailsController@index')->name('order_detail');
Route::get('/order_detail/create', 'OrderDetailsController@create');
Route::get('/order_detail/detail/{order_detail}', 'OrderDetailsController@show');
Route::get('/order_detail/detail/edit/{order_detail}', 'OrderDetailsController@edit');
Route::patch('/order_detail/detail/edit/{order_detail}', 'OrderDetailsController@update');
Route::delete('/order_detail/detail/edit/delete/{order_detail}', 'OrderDetailsController@destroy');
Route::post('/order_detail', 'OrderDetailsController@store');