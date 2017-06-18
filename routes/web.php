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

Route::get('/', 'MainController@index');

Route::get('login', function () {
    return view('login');
});

Route::get('register', 'RegisterController@index');
// Route::get('register', function () {
//     return view('auth\register');
// });

Auth::routes();

Route::get('main', 'MainController@index');

Route::get('registerUser','RegisterUserController@index');

Route::post('registerUser','RegisterUserController@create');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('booking', function () {
    return view('booking');
});



// Route::get('auth/register', [
//   'as' => 'register', 
//   'uses' => 'Auth\AuthController@getRegister'
// ]);