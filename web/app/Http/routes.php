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
//美食模块
Route::resource('/admin/food','Admin\FoodController');
//娱乐模块
Route::resource('/admin/play','Admin\PlayController');
//娱乐模块
Route::resource('/admin/scenery','Admin\SceneryController');
//城市攻略模块
Route::resource('/admin/strategy','Admin\StrategyController');
//主题游模块
Route::resource('/admin/travel','Admin\TravelController');
//前台美食模块
Route::resource('/home/food','Home\FoodController');
//前台娱乐模块
Route::resource('/home/play','Home\PlayController');
//前台热门景点模块
Route::resource('/home/scenery','Home\SceneryController');
//前台城市攻略模块
Route::resource('/home/strategy','Home\StrategyController');
//前台主题游模块
Route::resource('/home/travel','Home\TravelController');

































//===================================荀正飞========================================
//轮播图状态管理路由
Route::get('admin/slid/{id}/up','Admin\SlidController@up');
Route::get('admin/slid/{id}/down','Admin\SlidController@down');
//轮播图路由
Route::resource('/admin/slid','Admin\SlidController');



//===================================荀正飞========================================


//轮播图状态管理路由
Route::get('admin/slid/{id}/up','Admin\SlidController@up');
Route::get('admin/slid/{id}/down','Admin\SlidController@down');
//轮播图路由
Route::resource('/admin/slid','Admin\SlidController');




































//====================================马飞彪=======================================
Route::get('/admin/link/{id}/eav','Admin\LinkController@eav');	//审核添加的友情链接状态
Route::resource('/admin/link','Admin\LinkController');			//友情链接
Route::resource('/home/index','Home\IndexController');

















































//======================================王伟=======================================

// 创建后台分类控制器
Route::resource('admin/cates','Admin\CatesController');





































































//后台登录
Route::controller('/admin','Admin\LoginController');
//前台登录注册
Route::controller('/home','Home\RegisterController');

