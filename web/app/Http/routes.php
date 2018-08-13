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
//后台登录
Route::controller('/admin','Admin\LoginController');
































//===================================荀正飞========================================







































//====================================马飞彪=======================================
Route::get('/admin/link/{id}/eav','Admin\LinkController@eav');	//审核添加的友情链接状态
Route::resource('/admin/link','Admin\LinkController');			//友情链接


















































//======================================王伟=======================================

