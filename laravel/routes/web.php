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

Route::get('/login', 'loginController@index')->name('login.index');
Route::get('/logout', 'logoutController@index')->name('logout.index');
Route::post('/login', 'loginController@verify');
Route::get('/vehicle/update/{id}', 'vehicleUpdateController@index')->name('update.index');
Route::get('/vehicle/carlist', 'vehicleUpdateController@carlist')->name('update.carlist');
Route::post('/vehicle/rent', 'rentController@rent');
Route::post('/vehicle/final', 'rentController@finalize');
Route::get('admin/home', 'homeController@adminIndex')->name('home.admin');
Route::get('member/home', 'homeController@memberIndex')->name('home.member');
Route::resource('user', 'UserController');
Route::resource('vehicle', 'VehicleController');
Route::resource('category', 'CategoryController');
Route::resource('order', 'OrderController');
Route::resource('blog', 'BlogController');