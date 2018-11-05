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

//homeViewに飛ばす
Route::get('/home', function () {
    return view('home');
});

/**
 * getでauth/registerに飛んだ場合
 */
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
/**
 * postでauth/registerに飛んだ場合
 */
Route::post('auth/register', 'Auth\RegisterController@register');
/**
 * login
 */
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@Login');
/**
 * logout
 */
Route::get('/auth/logout', 'Auth\LoginController@logout');

/**
 * zipcodeから変換
 */
Route::get('/zip', function(){
    return view('zip');
});
Route::get('/show', function(){
    return view('show');
});

