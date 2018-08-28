@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<link rel="stylesheet" href="/home/gerenxiugai/css/base_css_d4811e5c69b8e51f74324c600db93b1c_1.css">
<link rel="stylesheet" href="/home/gerenxiugai/css/profile_css_b5809e5b095ee8c6734bccd3747b59c6_1.css">
<script src="/home/gerenxiugai/js/base_js_9070e364187a3b3fe5cf8806a9777b20_1.js"></script>

<script src="/home/gerenxiugai/js/profile_js_be72a32eb8daa4ce8cd7ef34b920b054_1.js"></script>
</head>
<body>
 
	<style type="text/css">
		.zpui-head-ad { position: relative; z-index: 2; }
		.zpui-head-ad .bg { display: block; height: 60px; width: 100%; background: url(/home/gerenxiugai/images/ecc175a2f3af42a9a73c11a997316c0b.gif) center top no-repeat; }
		.zpui-head-ad .close { position: absolute; display: block; cursor: pointer; background: url(/home/gerenxiugai/images/web-ad-close_1.png) center center no-repeat; left: 50%; top: 50%; width: 30px; height: 30px; margin-left: 440px; margin-top: -15px; }
	</style>

	<style>
	    .tip-passport-bindmobile-layer {display: none;position: fixed;z-index: 2000;top: 0;left: 0;width: 100%;height: 100%;background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlOzEo46UAAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');}
	    .tip-passport-bindmobile-dialog{box-sizing: border-box; width: 500px; height: 190px; border: solid 1px #c0c0c0; background-color: #fff; box-shadow: 0 0 10px #ccc; position: absolute; top: 50%; left: 50%; margin: -95px 0 0 -250px; padding: 20px;color: #323232;}
	    .tip-passport-bindmobile-dialog-close {position:absolute;top:24px;right:24px; width: 18px; height: 18px; cursor:pointer; background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkBAMAAAATLoWrAAAAFVBMVEUAAAC/v7++vr6/v7+/v7+/v7+/v7+/wuQ3AAAABnRSTlMAENDPMPDQGjwYAAAAdElEQVQoz63SsQ2AIBBAUUwc4KIT2NjTWNuwARPo/jtoIPm/oeSaI+Q1n5Dmzhqel7utkr3aa1vbG6Dr6PvMoCcSTAQTwUAykQwkE8lAMpAMJANZR6l1llJHKSgoBVEq8kFEMBEMJBPJRDKRrPwIVkcfYOp8Ck0Wc2Mad8EAAAAASUVORK5CYII=') center center / cover no-repeat;}
	    .tip-passport-bindmobile-dialog-title {font-size: 18px;}
	    .tip-passport-bindmobile-dialog-text { margin-top: 10px; font-size: 14px;}
	    .tip-passport-bindmobile-dialog-btn { padding-top:20px; text-align: center;}
	    .tip-passport-bindmobile-dialog-btn a {box-sizing: border-box;width:160px;height:40px;line-height:40px;display:inline-block;font-size:14px;color:#fff;text-decoration:none;background-color:#3ba05c;cursor:pointer;border-radius:3px;}
	    .tip-passport-bindmobile-dialog-btn a:hover{background-color:#47c571;}
	</style>

	<link rel="stylesheet" href="/home/gerenxiugai/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c_1.css">
	<script src="/home/gerenxiugai/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c_1.js"></script>
	<!--头部 -->
	<div class="u_headbar" style="position:abselute;z-index:-1">
	    <div class="infos" >
	        <!--用户图像 -->
	        <div class="face" style="float: left;">
	        	<a href="/home/info">
	        		<img src="@if(!empty($user -> Usersdetail -> profile))  {{ $user -> Usersdetail -> profile }}@else /home/moremimg/1.gif @endif"  />
	        	</a>
	        </div>
	        <!--用户名字 -->
	        <h3 class="name">
	            <strong data-bn-ipg="usercenter-username" class="fontYaHei">
		        @if(!empty( $user -> Usersdetail -> nickname ))
		        	{{ $user -> Usersdetail -> nickname }}
		        @else
		        	{{ $user -> username }}
		        @endif 
	            </strong>
	             @if( $user -> Usersdetail -> sex == 1 )
                    <span class="icon_gender_he" title="男"></span>
                @else( $user -> Usersdetail -> sex == 2 )
                    <span class="icon_gender_she" title="女"></span>
                @endif
	        </h3>
	     </div>


	    <!--个人中心导航 -->
	    <div class="menu clearfix" style="width: 980px;margin-left:auto;margin-right:auto;">
            <ul class="fontSong">
               
            </ul>
       
        </div>
</div>
	<!--头部 -->
	<div class="u_set_cnt clearfix">
		<!--设置模块导航 -->
	    <div class="u_set_menu">
	    <ul class="fontSong">
	        <li data-bn-ipg="usercenter-setting-profile" class="current">
	          <a href="/home/geren" class="data">个人资料</a>
	        </li>
	        <li data-bn-ipg="usercenter-setting-fan" >
	          <a href="/home/info"  class="data">个人首页</a>
	        </li>
	        <li data-bn-ipg="usercenter-setting-profile">
	          <a href=" " class="attent">关注（0）</a>
	        </li>
	        
	    </ul>
	        <ul>
	        <li data-bn-ipg="usercenter-setting-bind" >
	          <a href="/home/geren/{{ $user -> id }}/editusername" class="account">账号管理</a>
	        </li>
	        <li data-bn-ipg="usercenter-setting-inuserite" >
	          <a href=" " class="friend">邀请好友</a>
	        </li>
	        <li data-bn-ipg="usercenter-setting-subscribe" >
            	<a href="/home/geren/{{ $user -> id }}/editbeijingpic" class="email">背景图片</a>
          	</li>
	    </ul>
	    <ul>
	        <li data-bn-ipg="usercenter-setting-password" >
	          <a href="/home/geren/{{ $user -> id }}/editpassword" class="pass">修改密码</a>
	        </li>
	        <li data-bn-ipg="usercenter-setting-auseratar" >
	          <a href="/home/geren/{{ $user -> id }}/editprofile" class="face">修改头像</a>
	        </li>
	    </ul>
	    </div>    <!--设置模块内容 -->
	    <div class="u_set_main">
	    	<!--设置模块栏目标题 -->
	    	<div class="u_set_title">
	        	<strong class="text fontYaHei">个人资料</strong>
	        	<a data-bn-ipg="usercenter-setprofile-edit" href="/home/geren/{{ $user -> id}}/edit" class="ui_buttonB edit_link">编辑资料</a>
	      </div>
	        <!--设置模块栏目内容 -->
	        <div class="u_set_data">
	        	<ul class="clearfix fontArial">
	            	<li>
	                	<div class="left">用户名称：</div>
	                    <div class="right">
	                    	{{ $user -> username }}
	                  </div>
	             	</li>
	             	<li>
	                	<div class="left">昵　　称：</div>
	                    <div class="right">
	                    	{{ $user -> Usersdetail -> nickname }}
	                  </div>
	             	</li>
	            	<li>
	                	<div class="left">性　　别：</div>
	                	<div class="right">
                		  @if($user -> Usersdetail -> sex == 1) 
                		  	男
		                  @elseif($user -> Usersdetail -> sex == 2) 
		                  	女
		                  @else 
		                  	未知
		                  @endif
	                	</div>
	             	</li>
	              	<li>
		                <div class="left">年　　龄：</div>
		                <div class="right"> 
		                	{{ $user -> Usersdetail -> age }}岁
		                </div>
		            </li>
		            <li>
		                <div class="left">现　　居：</div>
		                <div class="right"> 
		                	{{ $user -> Usersdetail -> addres }}
		                </div>
		            </li>
		            <li>
		                <div class="left">邮　　箱：</div>
		                <div class="right">
		                	{{ $user -> email }}
		                </div>
		            </li>
		            <li>
		                <div class="left">电　　话：</div>
		                <div class="right">{{ $user -> phone }}</div>
		            </li>

	            	<li>
	                	<div class="left">个性签名：</div>
	                    <div class="right">
	                    	 {{ $user -> Usersdetail -> users_des }}
	                    </div>
	                </li>
	            	<li>
	                	<div class="left">旅行偏好：</div>
	                    <div class="right">
	                    	{{ $user -> Usersdetail -> hobby }}
	                    </div>
	                </li>
	            </ul>
	        </div>
	        <!-- 相关问答seo -->
	        <!--相关问答-->
	    </div>
	</div>




<div id="js_feedback_tip" class="feedback-tip" >
  <div class="feedback-tip-box">
    <span class="feedback-tip-text" ></span>
  </div>
</div>


@endsection