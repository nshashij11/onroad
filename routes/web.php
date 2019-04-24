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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'LoginController@signin');
Route::get('/signin', 'LoginController@signin');
Route::post('/checkusername', 'LoginController@checkusername');
Route::get('/signinpwd', 'LoginController@signinpwd');
Route::post('/signin', 'LoginController@signinCreate');

Route::get('/logout', 'LoginController@logout');

Route::get('/profile', 'LoginController@profile');
Route::post('/saveUserProfile', 'LoginController@saveUserProfile');

Route::get('/signup', 'LoginController@signup');
Route::post('/signup', 'LoginController@signupCreate');