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
//轮播图状态管理路由
Route::get('admin/slid/{id}/up','Admin\SlidController@up');
Route::get('admin/slid/{id}/down','Admin\SlidController@down');
//轮播图路由
Route::resource('/admin/slid','Admin\SlidController');



//===================================荀正飞========================================




































//====================================马飞彪=======================================
/*======后台路由======*/
//审核添加的友情链接状态路由
Route::get('/admin/link/{id}/eav','Admin\LinkController@eav');
//友情链接路由	
Route::resource('/admin/link','Admin\LinkController');	
//广告管理路由
Route::resource('/admin/job','Admin\JobController');	
//广告显示状态路由
Route::get('/admin/job/{id}/up','Admin\JobController@up');
//广告隐藏状态路由	
Route::get('/admin/job/{id}/down','Admin\JobController@down');	
//年度旅行口碑管理路由
Route::resource('/admin/strategy','Admin\StrategyController');




/*======前台路由======*/

//结伴同游列表页路由
Route::resource('/home/forums','Home\ForumsController');
//审核结伴同游状态状态路由		
Route::get('/home/forums/{id}/jieban','Home\ForumsController@jieban');
//结伴同游发布路由	
Route::post('/home/forums/jiebanfabu/{id}','Home\ForumsController@jiebanfabu');		
//回答问题详情页路由			
Route::get('/home/mach/{id}/detail','Home\MachController@detail');
//提交问题点赞路由	
Route::get('/home/praise/zan/{id}','Home\PraiseController@zan');
//提交问题浏览路由		
Route::get('/home/praise/liulan/{id}','Home\PraiseController@liulan');
//回答问题点赞路由	
Route::get('/home/praise/rzan/{id}','Home\PraiseController@rzan');
//回答问题浏览路由		
Route::get('/home/praise/rliulan/{id}','Home\PraiseController@rliulan');	
//问答路由
Route::resource('/home/mach','Home\MachController');
//首页路由
Route::resource('/home/index','Home\IndexController');
//目的地攻略路由			
Route::resource('/home/strategys','Home\StrategyController');			























































//======================================王伟=======================================

// 创建后台分类控制器
Route::resource('admin/cates','Admin\CatesController');





































































//后台登录
Route::controller('/admin','Admin\LoginController');


