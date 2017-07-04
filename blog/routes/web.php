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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/role/index', 'RoleController@index')->name('role/index');
    Route::post('/role/add', 'RoleController@add')->name('role/add');

    Route::get('/user/index', 'UserController@index')->name('user/index');
    Route::post('/user/add', 'UserController@add')->name('user/add');//添加用户
    Route::get('/user/del', 'UserController@del')->name('user/del');//添加用户
    Route::get('/user/reset', 'UserController@reset')->name('user/reset');//密码重置
});