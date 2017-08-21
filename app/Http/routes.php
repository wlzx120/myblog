<?php

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//密码重置
Route::get('/password/email','Auth\PasswordController@getEmail')->name('password');
Route::post('/password/email','Auth\PasswordController@postEmail')->name('password');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('reset');
Route::post('password/reset', 'Auth\PasswordController@postReset')->name('reset');
