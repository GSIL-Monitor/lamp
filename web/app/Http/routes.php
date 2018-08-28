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
DB::listen(function($sql, $bindings, $time) {
		   // dump($sql);
		});

Route::get('/', function () {
    return view('welcome');
});
//=====================================姜隆==========================================

//后台首页
Route::get('/admin/index','Admin\IndexController@index');


Route::get('/home/login','home\LoginController@index');
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

//轮播图状态管理路由
Route::get('admin/slid/{id}/up','Admin\SlidController@up');
Route::get('admin/slid/{id}/down','Admin\SlidController@down');
//轮播图路由
Route::resource('/admin/slid','Admin\SlidController');
//后台评论
Route::resource('/admin/message','Admin\MessageController');
//前台论坛路由
	//前台其他用户帖子路由
Route::get('/home/bbs/{uid}/qitashow','Home\BbsController@qitashow');
	//前台其他用户帖子详情路由
Route::get('/home/bbs/{id}/qitazhongxin','Home\BbsController@qitazhongxin');

Route::post('/home/bbs/message/{id}','Home\BbsController@message');
//前台论坛路由
Route::resource('/home/bbs','Home\BbsController');

//前台用户文章路由
	//永久删除
Route::get('/home/info/rollback/{id}','Home\InfoController@rollback');
	//恢复删除
Route::get('/home/info/deltime/{id}','Home\InfoController@deltime');
	//软删除
Route::get('/home/info/del/{id}','Home\InfoController@del');
	//回收站
Route::get('/home/info/trash','Home\InfoController@trash');
	//回收站
Route::get('/home/info/shoucang','Home\InfoController@shoucang');

Route::resource('/home/info','Home\InfoController');

//前台个人用户信息路由
	//修改用户头像
Route::get('/home/geren/{id}/editprofile','Home\GerenController@editprofile');
	//提交修改用户头像
Route::post('/home/geren/{id}/updateprofile','Home\GerenController@updateprofile');

	//修改用户主题图片
Route::get('/home/geren/{id}/editbeijingpic','Home\GerenController@editbeijingpic');
	//提交修改用户主题图片
Route::post('/home/geren/{id}/updatebeijingpic','Home\GerenController@updatebeijingpic');

	//修改用户密码
Route::get('/home/geren/{id}/editpassword','Home\GerenController@editpassword');
	//提交修改用户密码
Route::post('/home/geren/{id}/updatepassword','Home\GerenController@updatepassword');

	//修改用户管理
Route::get('/home/geren/{id}/editusername','Home\GerenController@editusername');

Route::resource('/home/geren','Home\GerenController');

//前台相册路由
Route::get('/home/big/{id}','Home\AlbumController@big');
Route::resource('/home/album','Home\AlbumController');

//后台用户列表路由
	//正常
Route::get('admin/user/{id}/up','Admin\HuserController@up');
	//禁用
Route::get('admin/user/{id}/down','Admin\HuserController@down');
//后台 用户列表路由
Route::resource('/admin/huser','Admin\HuserController');
//后台 用户详情列表路由
Route::resource('/admin/users_detail','Admin\Users_detailController');
//后台文章列表路由
Route::resource('/admin/article','Admin\ArticleController');

//前台点赞+1路由	
Route::get('/home/bbs/zan/{id}','Home\BbsController@zan');
//前台点赞收藏+1路由	
Route::get('/home/bbs/reads/{id}','Home\BbsController@reads');
//前台点赞收藏-1路由	
Route::get('/home/ajax/readss/{id}','Home\AjaxController@readss');
































//====================================马飞彪=======================================
Route::get('/admin/link/{id}/eav','Admin\LinkController@eav');	//审核添加的友情链接状态
Route::resource('/admin/link','Admin\LinkController');			//友情链接
Route::resource('/home/index','Home\IndexController');

















































//======================================王伟=======================================

// 创建后台分类控制器
Route::resource('admin/cates','Admin\CatesController');





































































//后台登录
Route::controller('/admin','Admin\LoginController');


