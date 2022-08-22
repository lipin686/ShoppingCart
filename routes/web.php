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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'IndexController@showProfile');
// Route::get('/admin', 'AdminController@showProfile');
Auth::routes();

Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin', 'AdminController@index')->name('admin.home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get( '/auth/{social}', 'Web\AuthenticationController@getSocialRedirect' )->name('social')
    ->middleware('guest');

Route::get( '/auth/{social}/callback', 'Web\AuthenticationController@getSocialCallback' )
    ->middleware('guest');

Route::get('/view/{id}', 'CartController@index')->name('view');
Route::get('/add_to_cart/{id}', 'CartController@getAddToCart')->name('getAddToCart');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/increase-one-item/{id}', 'CartController@increaseByOne');
Route::get('/decrease-one-item/{id}', 'CartController@decreaseByOne');
Route::get('/remove-item/{id}', 'CartController@removeItem');
Route::get('/clear-cart', 'CartController@clearCart');

Route::get('/order/new', 'OrderController@new');
Route::get('/orders', 'OrderController@index');
Route::post('/orders', 'OrderController@store');

