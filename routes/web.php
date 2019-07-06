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

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::resource('services','ServiceController');
    Route::get('service/delete/{id}','ServiceController@delete')->name('services.delete');

});

Route::get('service_parlor', 'FrontController@service_show')->name('parlor_service');


Route::get('/customer/home', 'CustomerController@index')->name('customer.home');

Route::get('/customer/login', 'UserController@customerLoginForm')->name('customer.form');
Route::post('/customer/login', 'UserController@customerLogin')->name('customer.login');

Route::get('/customer/logout', 'CustomerController@logout')->name('customer.logout');

Route::get('/customer/signup', 'UserController@customerRegistrationForm')->name('customer.signup');

Route::post('/customer/register', 'UserController@customerRegistration')->name('customer.register');


Route::get('/customer/order', 'UserController@customerOrderForm')->name('customer.orderform');

Route::post('/customer/order', 'UserController@customerOrder')->name('customer.order');
