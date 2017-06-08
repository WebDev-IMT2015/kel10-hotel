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

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', function () {
    return view('login');
});

// Route::get('register', function () {
//     return view('auth\register');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/register', 'RegisterController@index')->name('register');
// Route::get('auth/register', [
//   'as' => 'register', 
//   'uses' => 'Auth\AuthController@getRegister'
// ]);