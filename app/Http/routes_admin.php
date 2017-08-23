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
Route::get('/admin/logout','SessionsController@destroy')->name('admin.logout');

//图片验证码
Route::get('/admin/yzm', 'SessionsController@captcha')->name('admin.yzm');

//article
Route::resource('/admin/articles','ArticlesController');
//新增重定义
Route::post('/admin/articles/create','ArticlesController@store')->name('admin.articles.store');
//列表搜索定义
Route::post('/admin/articles','ArticlesController@index')->name('admin.articles.index');

//sortarts
Route::resource('/admin/sortarts','SortartsController');

