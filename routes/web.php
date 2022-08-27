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

//首頁和登入
Route::get('/', 'IndexController@showProfile');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//第三方登入
Route::get( '/auth/{social}', 'Web\AuthenticationController@getSocialRedirect' )->name('social')
    ->middleware('guest');
Route::get( '/auth/{social}/callback', 'Web\AuthenticationController@getSocialCallback' )
    ->middleware('guest');

//admin頁面和登入
Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');
Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

//admin後台
//Route::get('/admin/users', 'Admin\UserController@index')->name('admin.user.index');
Route::get('/admin/items', 'Admin\ItemController@index')->name('admin.item.index');
Route::get('/admin/tags', 'Admin\TagController@index')->name('admin.tag.index');
Route::get('/admin/orders', 'Admin\OrderController@index')->name('admin.order.index');
Route::resource('/admin/users', 'Admin\UserController');
Route::resource('/admin/items', 'Admin\ItemController');
Route::resource('/admin/tags', 'Admin\TagController');
Route::resource('/admin/orders', 'Admin\OrderController');

//購物車
Route::get('/view/{id}', 'CartController@index')->name('view');
Route::get('/add_to_cart/{id}', 'CartController@getAddToCart')->name('getAddToCart');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/increase-one-item/{id}', 'CartController@increaseByOne');
Route::get('/decrease-one-item/{id}', 'CartController@decreaseByOne');
Route::get('/remove-item/{id}', 'CartController@removeItem');
Route::get('/clear-cart', 'CartController@clearCart');

//訂單
Route::get('/order/new', 'OrderController@new');
Route::get('/orders', 'OrderController@index');
Route::post('/orders', 'OrderController@store');



