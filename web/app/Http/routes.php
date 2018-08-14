<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//=====================================姜隆==========================================
//后台首页
Route::get('/admin/index','Admin\IndexController@index');
//后台用户路由
Route::resource('/admin/user','Admin\UserController');
Route::resource('/admin/set','Admin\SetController');































//===================================荀正飞========================================







































//====================================马飞彪=======================================



















































//======================================王伟=======================================

// Route::get('/',function(){
// 	echo 'text';
// 	return view('welcome');
// });

// 创建后台分类控制器
Route::resource('admin/cates','Admin\CatesController');