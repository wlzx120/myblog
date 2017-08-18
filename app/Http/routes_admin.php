<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/admin','IndexController@index')->name('admin');

//登录退出
Route::get('/admin/login','SessionsController@index')->name('admin.login');
Route::post('/admin/login','SessionsController@store')->name('admin.login');
