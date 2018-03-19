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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/departure/apply', 'DepartureController@apply')->name('departure/apply');//离职列表
Route::get('/division/dList', 'DivisionController@dList')->name('division/dList');//部门列表
Route::post('/departure/add', 'DepartureController@add')->name('departure/add');//部门列表

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/role/index', 'RoleController@index')->name('role/index');
    Route::post('/role/add', 'RoleController@add')->name('role/add');

    Route::get('/user/index', 'UserController@index')->name('user/index');
    Route::post('/user/add', 'UserController@add')->name('user/add');//添加用户
    Route::get('/user/del', 'UserController@del')->name('user/del');//添加用户
    Route::get('/user/reset', 'UserController@reset')->name('user/reset');//密码重置

    Route::get('/center/index', 'CenterController@index')->name('center/index');//中心列表
    Route::post('/center/add', 'CenterController@add')->name('center/add');//添加中心
    Route::get('/center/del', 'CenterController@del')->name('center/del');//删除中心

    Route::get('/affiliatedCenter/index', 'AffiliatedCenterController@index')->name('affiliatedCenter/index');//副中心列表
    Route::post('/affiliatedCenter/add', 'AffiliatedCenterController@add')->name('affiliatedCenter/add');//添加副中心
    Route::get('/affiliatedCenter/del', 'AffiliatedCenterController@del')->name('affiliatedCenter/del');//删除副中心

    Route::get('/demand/index', 'DemandController@index')->name('demand/index');//招聘计划

    Route::get('/departure/index', 'DepartureController@index')->name('departure/index');//离职列表
});