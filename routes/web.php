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

Route::group(['namespace' => 'Auth', 'prefix' => '/auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('auth.showLoginForm');
    Route::post('login', 'LoginController@login')->name('auth.login');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('auth.showRegistrationForm');
    Route::post('register', 'RegisterController@register')->name('auth.register');

    Route::get('logout', 'LoginController@logout')->name('auth.logout');

    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('auth.showLinkRequestForm');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('auth.sendResetLinkEmail');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('auth.showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('auth.reset');
});

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::put('/cart', 'CartController@update')->name('cart.update');
Route::delete('/cart', 'CartController@destroy')->name('cart.destroy');

Route::post('/cart/row', 'CartRowController@store')->name('cart.row.store');
Route::delete('/cart/row/{row}', 'CartRowController@destroy')->name('cart.row.destroy');

Route::resource('/orders', OrderController::class);
Route::resource('/inventory', InventoryController::class);
Route::resource('/products', ProductController::class);
Route::resource('/messages', MessageController::class);
Route::resource('/contact', ContactController::class);

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/mentions', 'IndexController@mentions')->name('mentions');
Route::get('/cgv', 'IndexController@cgv')->name('cgv');
Route::get('/donnees', 'IndexController@donnees')->name('donnees');
Route::get('/', 'IndexController@index')->name('index');
