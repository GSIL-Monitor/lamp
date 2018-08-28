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

	<script type="text/javascript">
		(function() {
			function setCookie(name, value) {
				var exp = new Date();
				exp.setTime(exp.getTime() + 86400000);
				document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/;domain=qyer.com";
			};
			function getCookie(objName){
				var arrStr = document.cookie.split("; ");
				for(var i = 0;i < arrStr.length;i ++){
					var temp = arrStr[i].split("=");
					if(temp[0] == objName) return unescape(temp[1]);
			   }
			}
			document.getElementById("zpui-head-ad-close").onclick = function(){
				if($){$("#zpui-head-ad").slideUp(200); }
				else{document.getElementById("zpui-head-ad").style.display="none";}
				setCookie("qy_topad", 1);
			}
		})();
	</script>

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

	<script>
	    window.__userStatusCallBack = function (data) {
	        if(data.uid && data.userinfo.bind_phone === 0){
	            var $layer = $('#tip_passport_bindmobile_layer')
	            $layer.show()
	            $('#tip_passport_bindmobile_dialog_close').on('click', function() {
	                $layer.hide()
	            })
	        }
	    }
	</script>

	<script>
	    window.QYER={uid:[0][0]||0};

	    window._RATrack = window._RATrack||{
	        'platform':'web',
	        'channel':'user',
	        'page_type':'other',
	        'ugc_type':'user_other',
	        'ugc_content':'',
	        'abt':''
	    };
	</script>
	<link rel="stylesheet" href="/home/gerenxiugai/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c_1.css">
	<script src="/home/gerenxiugai/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c_1.js"></script>
	<!--头部 -->
	<div class="u_headbar"  style="position:abselute;z-index:-1">
	    <div class="infos">

	        <!--用户图像 -->
	        <div class="face">
            <a href=" ">
              <img src="@if(!empty($user -> Usersdetail -> profile)) {{ $user -> Usersdetail -> profile }}@else /home/moremimg/1.gif @endif" />
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
	        </h3>
	       </div>
	    <!--个人中心导航 -->
	    <div class="menu clearfix">
            <ul class="fontSong"></ul>
      </div>
	</div>
	<!--头部 -->

	<script>
		/**
		 * 认证头像图标tip
		 */
		$(function (){
		if (typeof requirejs !== 'undefined'){
		    requirejs(['web_old_tooltips'], function (){
		        $('[data-toggle="tooltip"]').tooltip({
		            container: 'body'
		        });
		    });
		}
		});
	</script>
	<!--头部 -->
	<div class="u_set_cnt clearfix">
		<!--设置模块导航 -->
	    <div class="u_set_menu">
	    <ul class="fontSong">
	        <li data-bn-ipg="usercenter-setting-profile" class="current">
	          <a href="/home/geren" class="data">个人资料</a>
	        </li>
          <li data-bn-ipg="usercenter-setting-profile" >
            <a href=" " class="data">关注（0）</a>
          </li>
	        <li data-bn-ipg="usercenter-setting-fan" >
	          <a href=" " class="attent">粉丝（0）</a>
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
        	<strong class="text fontYaHei">修改个人资料</strong>
        </div>
        
        <!--设置模块栏目内容 -->
      <div class="u_set_data_edit">
        <form id="editform" class="mws-form" action="/home/geren/{{ $user -> id }}" method="post" >
          {{ csrf_field() }}
          {{ method_field('PUT') }}
        	<ul class="clearfix fontArial">
			        <li class="list">
                	 <div class="left">用户名称：</div>
                    <div class="right">
                    	<input type="text" class="ui2_input" id="usercity" name="username" value="{{ $user -> username }}" readonly />
                    </div>
              </li>
              <li class="list">
                   <div class="left">昵　　称：</div>
                    <div class="right">
                      <input type="text" class="ui2_input" id="usercity" name="nickname" value="{{ $user -> Usersdetail -> nickname }}" />
                    </div>
              </li>
              <li class="list no_p">
                <div class="left">性　　别：</div>
                  <div class="right">
                    <label class="gender">
                      <input type="radio" name="sex" class="edit_radio"  value="1" @if( $user -> Usersdetail -> sex == 1) checked @endif />男</label>
                    <label class="gender">
                      <input type="radio" name="sex"  value="2" class="edit_radio" @if( $user -> Usersdetail -> sex == 2) checked @endif />女</label>
                   <!--  <label class="gender">
                      <input type="radio" name="sex" checked="checked" value="0" class="edit_radio" @if( $user -> Usersdetail -> sex == 0) checked @endif/>未知</label> -->
                  </div>
          
              </li>
            	<li class="list no_ph">
                	<div class="left">年　　龄：</div>
                  <div class="right">
                      <input type="text" class="ui2_input" name="age" id="usercity" value="{{ $user -> Usersdetail -> age }}" />
                  </div>
              </li>
              
            	<li class="list">
                	<div class="left">邮　　箱：</div>
                    <div class="right">
                    	<input type="email" class="ui2_input" id="usercity" name="email" value="{{ $user -> email }}" autocomplete="off" />
                    </div>
              </li>
              <li class="list">
                  <div class="left">现　　居：</div>
                    <div class="right">
                      <input type="text" class="ui2_input" id="usercity" name="addres" value="{{ $user -> Usersdetail -> addres }}" autocomplete="off" />
                    </div>
              </li>
            	<li class="list">
                	<div class="left">电　　话：</div>
                    <div class="right">
                    	<div class="u_tag_list clearfix" id="_jscity_container">
                    	     <div class="u_tag_input">
                                <input type="text" id="addcity" name="phone" class="ui2_input" value="{{ $user -> phone }}" />
                            </div>
                        </div>
                    </div>
                </li>
            	<li class="list">
                	<div class="left">个性签名：</div>
                    <div class="right">
                      <input type="text" class="ui2_textarea" name="users_des" id="input_bio" value="{{ $user -> Usersdetail -> users_des }}" />
                        <div class="btm clearfix">
                          <div class="ui2_error_layer" id="_jsbio_error" style="display:none;">
                              <p class="ui2_error_layer_text">最多不超过70字</p>
                          </div>
                      </div>
                    </div>
              </li>
              <li class="list no_ph">
                  <div class="left">旅行偏好：</div>
                  <div class="right">
                      <input type="text" class="ui2_input" name="hobby" id="usercity" value="{{ $user -> Usersdetail -> hobby }}" />
                  </div>
              </li>
            </ul>
            <div class="button clearfix">
                <input type="submit" id="btnsub" class="ui_buttonB fl mr10" value="保存" />
                <input type="reset" id="editCancel" class="ui_button_cancel fl" value="取消" />
            </div>
          </form>
        </div>

      </div>

  </div>
  
  <script language="javascript" type="text/javascript">

      function channelfriend(uid){
          $.ajax({
              type: "POST",
              url: "ajax.php",
              data: "action=channelfriend&uid="+uid,
              dataType:"text",
              beforeSend: function(XMLHttpRequest){
              },
              success: function(msg){
                  if(msg==1){
                      tips.show("成功取消关注");
                      location.reload();
                  }
              }
          });
      }
  </script>

  <div style="display: none;"></div>

  <script>
          var script   = document.createElement("script");
          script.type  = "text/javascript";
          script.async = true;
          script.src   = "https:///home/gerenxiugai.qyer.com/qyer_ui_frame/m/js/dist/base_beacon_ga.js";
          document.getElementsByTagName("head")[0].appendChild(script);
  </script>

  <style>
    .web_components_sidebar{display:none; width:55px;box-sizing:border-box;position:fixed;bottom:120px;right:40px;font-family:"Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Microsoft YaHei",宋体,sans-serif;background-color:white; z-index:1000;box-shadow: rgba(0,0,0,0.1) 0px 0px 4px;}
    .web_components_sidebar-item{display:block;width:55px;height:55px;box-sizing:border-box;border:solid 1px #e2e2e2 !important;color:#b2b2b2 !important;text-align:center;margin-top:-1px;position:relative;}
    .web_components_sidebar-item:hover{border:solid 1px rgba(0,0,0,0) !important;color:white !important;z-index:1;background-color:#07AE72;}
    .web_components_sidebar-item .title{font-size:12px;-webkit-transform:scale(0.8);-moz-transform:scale(0.8);-o-transform:scale(0.8);transform:scale(0.8);display:block;position:absolute;bottom:1px;width:100%;}

    .web_components_sidebar-item:hover   .web_components_sidebar-layer{display:block;}
    .web_components_sidebar-layer{display:none;padding:14px;text-align:center;position:absolute;left:-172px;top:-126px;border:1px solid rgb(221,221,221);background-color:rgb(255,255,255);box-shadow:rgba(0,0,0,0.1) 0px 0px 4px;}
    .web_components_sidebar-layer-img {display:block;width:120px;height:120px;margin-top:9px;}
    .web_components_sidebar-layer-title {font-size:14px;color:#323232 !important;}
    .web_components_sidebar-layer::after,.web_components_sidebar-layer::before {content:"";width:0;height:0;position:absolute;font-size:0;line-height:0;overflow:hidden;}
    .web_components_sidebar-layer::before{right:-12px;top:146px;border-left:6px solid rgb(221,221,221);border-right:6px solid rgba(0,0,0,0);border-top:6px solid rgba(0,0,0,0);border-bottom:6px solid rgba(0,0,0,0);}
    .web_components_sidebar-layer::after {right:-10px;top:147px;border-left:5px solid rgb(255,255,255);border-right:5px solid rgba(0,0,0,0);border-top:5px solid rgba(0,0,0,0);border-bottom:5px solid rgba(0,0,0,0);}
    .web_components_sidebar-layer-hr{margin:20px 0 18px 0;border:none;height:1px;background-color:#e2e2e2;}

    .web_components_sidebar-layer.shoujikantie{top:-207px;}
    .web_components_sidebar-layer.shoujikantie::before{top:228px;}
    .web_components_sidebar-layer.shoujikantie::after {top:229px;}

    .web_components_sidebar-icon{background-image:url(/home/gerenxiugai/images/icons_1.png);background-repeat:no-repeat;width:18px;height:18px;display:block;margin:12px auto 0 auto;background-position:0px 0;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.fanhuidingbu{background-position:-28px 0;}
    .web_components_sidebar-icon.saomaxiazai{background-position:0px -24px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.saomaxiazai{background-position:-28px -24px;}
    .web_components_sidebar-icon.shoujikantie{background-position:0px -24px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.shoujikantie{background-position:-28px -24px;}
    .web_components_sidebar-icon.wodedingdan{background-position:0px -116px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.wodedingdan{background-position:-28px -116px;}
    .web_components_sidebar-icon.wodeshoucang{background-position:0px -157px;width:20px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.wodeshoucang{background-position:-27px -157px;}
    .web_components_sidebar-icon.shoujilijian{background-position:0px -184px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.shoujilijian{background-position:-28px -184px;}
    .web_components_sidebar-icon.yijianfankui{background-position:0px -62px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.yijianfankui{background-position:-29px -62px;}
    .web_components_sidebar-icon.zhidadibu{background-position:0px -88px;}
    .web_components_sidebar-item:hover .web_components_sidebar-icon.zhidadibu{background-position:-30px -88px;}

    .web_components_sidebar-item:hover .web_components_sidebar-icon{-webkit-animation:shake .4s;-moz-animation:shake .4s;-o-animation:shake .4s;animation:shake .4s;}
    @keyframes -webkit-shake {
        0%,100% {-webkit-transform:rotate(0);}
        10%,50%,90% {-webkit-transform:rotate(13deg);}
        20%,60%,80% {-webkit-transform:rotate(-13deg);}
    }
    @keyframes -moz-shake {
        0%,100% {-webkit-transform:rotate(0);}
        10%,50%,90% {-webkit-transform:rotate(13deg);}
        20%,60%,80% {-webkit-transform:rotate(-13deg);}
    }
    @keyframes -o-shake {
        0%,100% {-webkit-transform:rotate(0);}
        10%,50%,90% {-webkit-transform:rotate(13deg);}
        20%,60%,80% {-webkit-transform:rotate(-13deg);}
    }
    @keyframes shake {
        0%,100% {-webkit-transform:rotate(0);}
        10%,50%,90% {-webkit-transform:rotate(13deg);}
        20%,60%,80% {-webkit-transform:rotate(-13deg);}
    }

  </style>

<div id="js_feedback_tip" class="feedback-tip" >
  <div class="feedback-tip-box">
    <span class="feedback-tip-text" ></span>
  </div>
</div>

<style>
  .web_components_sidebar_feedbackdialog_warp{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:2200;background-color:rgba(0,0,0,0.3);}
  .web_components_sidebar_feedbackdialog{display:block;padding:20px;width:400px;box-sizing:border-box;background-color:#fff;border:solid 1px #e2e2e2;position:fixed;left:50%;top:50%;margin:-240px  auto auto -200px;-webkit-box-shadow:0 2px 4px rgba(0,0,0,.1);-o-box-shadow:0 2px 4px rgba(0,0,0,.1);-moz-box-shadow:0 2px 4px rgba(0,0,0,.1);box-shadow:0 2px 4px rgba(0,0,0,.1);}
  .web_components_sidebar_feedbackdialog .closeImg{position:absolute;top:19px;right:19px;cursor:pointer;}
  .web_components_sidebar_feedbackdialog .huiji{opacity:0;background-image:url(/home/gerenxiugai/images/huiji_1.png);width:132px;height:120px;display:block;position:absolute;top:-36px;left:40px;}
  .web_components_sidebar_feedbackdialog .title{font-size:20px;color:#222;height:78px;line-height:78px;text-align:center;margin-top:-20px;}
  .web_components_sidebar_feedbackdialog .content{font-size:14px;height:190px;padding:20px 15px;width:100%;box-sizing:border-box;border:solid 1px #e2e2e2;overflow:hidden;}
  .web_components_sidebar_feedbackdialog .address_title{color:rgba(34,34,34,0.65);font-size:14px;margin:16px 0 8px 0;}
  .web_components_sidebar_feedbackdialog .address{font-size:14px;height:40px;padding:10px 20px;width:100%;box-sizing:border-box;border:solid 1px #e2e2e2;}
  .web_components_sidebar_feedbackdialog .button{display:block;width:120px;height:40px;margin:30px auto 20px auto;border:none;line-height:40px;font-size:14px;color:#fff;cursor:pointer;background-color:#31b57f;box-shadow:0 3px 6px rgba(11,191,121,0.3);-webkit-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);-moz-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);-o-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);}
  .web_components_sidebar_feedbackdialog .texttip{position:absolute;right:30px;top:240px;font-size:12px;color:rgba(34,34,34,.35);}
  .web_components_sidebar_feedbackdialog .texttip.error{color:red;}
  .web_components_sidebar_feedbackdialog .errortip{color:red;margin:2px 0 -20px 0;font-size:12px;}


  .web_components_sidebar_feedbackdialog.zoom{
    -webkit-animation:zoom .3s linear;
    -moz-animation:zoom .3s linear;
    -o-animation:zoom .3s linear;
    animation:zoom .3s linear;
  }

  @keyframes -webkit-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes -moz-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes -o-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }

  .web_components_sidebar_feedbackdialog .huiji.show{
    -webkit-animation:spin .7s linear;
    -moz-animation:spin .7s linear;
    -o-animation:spin .7s linear;
    animation:spin .7s linear;
    -webkit-transform-origin: 87px 193px;
    -moz-transform-origin: 87px 193px;
    -o-transform-origin: 87px 193px;
    transform-origin: 87px 193px;
    opacity:1;
  }
  @keyframes -webkit-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes -moz-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes -o-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }

  .feedback-tip{display:none;position:fixed;top:200px;left:0;width:100%;text-align:center;z-index:1200;}
  .feedback-tip-box{display:inline-block;max-width:390px;padding:15px 20px;background-color:#fff;box-shadow:0 2px 7px rgba(0,0,0,0.25);border:solid 1px #c0c0c0;text-align:left;font-size:18px;line-height:32px;border-radius:5px;}
  .feedback-tip-text {display:block;position:relative;color:#323232;}
</style>

<script>
  $(function(){
    var $feedbackDialog = $(".web_components_sidebar_feedbackdialog_warp");
    var $feedbackHuiji = $("#js_feedbackDialog .huiji");
    var $feedbackContent = $("#js_feedbackdialog_content");
    var $feedbackAddress = $("#js_feedbackdialog_address");
    var $feedbackTexttip = $("#js_feedbackdialog_texttip");
    var $feedbackErrortip = $("#js_feedbackdialog_errorip");
    var $tip = $('#js_feedback_tip');

    var utils = {
      isMail    :function(str){return /^\w+([-_.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/gi.test(str);},
      isPhone   :function(str){return /^1[3|4|5|7|8]\d{9}$/gi.test(str);},
      getStrLen :function(str){return str.length;},
    };

    function showFeedbackDialog(){
      //判断登录
      if (window.QYER && window.QYER.uid === 0) {
        qyerUtil.doLogin();
      } else {
        //调登录弹层
        $feedbackDialog.fadeIn(300,function(){
           $feedbackHuiji.addClass('show');
          setTimeout(function(){
            $('#js_feedbackDialog').addClass('zoom')
          },800)
        });
      }
    }

    function closeFeedbackDialog(){
      $feedbackDialog.fadeOut(300,function(){
        $feedbackContent.val('');
        $feedbackAddress.val('');
        $feedbackTexttip.html('0/140');
        $feedbackErrortip.text(' ').hide()
        $feedbackTexttip.removeClass('error')
        $feedbackHuiji.removeClass('show')
        $('#js_feedbackDialog').removeClass('zoom')
      })
    }

    $feedbackContent.on('keyup',function(){
      var len = utils.getStrLen($feedbackContent.val())
      $feedbackTexttip.html(len + '/140')
      $feedbackTexttip[len>140?'addClass':'removeClass']('error')
    })


    function submitFeedback(){
      $feedbackErrortip.text(' ').show()
      if(!$feedbackContent.val()){
        return $feedbackErrortip.text('请输入反馈内容')
      }
      if(utils.getStrLen($feedbackContent.val())>140){
        return $feedbackErrortip.text('反馈内容应小于 140 字')
      }
      // if(!$feedbackAddress.val()){
      //   return $feedbackErrortip.text('请输入联系方式')
      // }
      if($feedbackAddress.val() && !utils.isMail($feedbackAddress.val()) && !utils.isPhone($feedbackAddress.val()) ){
        return $feedbackErrortip.text('联系方式错误，请输入邮箱或者手机号码')
      }
      $feedbackErrortip.text(' ').hide()
      $feedbackTexttip.removeClass('error')
      //发送字段
      $.ajax({
        type: 'POST',
        url: '/qcross/place/public.php?action=feedback',
        data: {
          url: location.href,
          email: '',
          cnt: $feedbackContent.val() + '|' + $feedbackAddress.val(),
          title: ''
        },
        success: function (result) {
          result = JSON.parse(result);
          if (result.error_code === 0) {
            tip('发送成功');
            closeFeedbackDialog();
          } else {
            tip(result.msg);
          }
        },
        error: function () {
          tip('网络异常，请稍候再试');
        }
      })
    }

    
    function tip(message){
      $tip.show().find('.feedback-tip-text').text(message)
      setTimeout(function(){
        $tip.hide()
      },2000)
    }      
  
    $(document)
      .on('click','.web_components_sidebar-item.js_gototop',function(){$("html,body").animate({scrollTop:"0"},500)})
      .on('click','.web_components_sidebar-item.js_gotobottom',function(){$("html,body").animate({scrollTop:document.body.scrollHeight},500)})
      .on('click','.web_components_sidebar-item.js_feedback',showFeedbackDialog)
      .on('click','.js_closefeedbackdialog',closeFeedbackDialog)
      .on('click','.js_submitfeedbackdialog',submitFeedback)
    ;

    var __sidebar = $('.web_components_sidebar');
    var __timer;
    $(window).on('scroll',function(evt) {
      if(__timer){
        window.clearTimeout(__timer)
      }
      __timer = window.setTimeout(function(){
         var st = $('body').scrollTop() || $(document).scrollTop() || $('html').scrollTop();
         if(st>320){ 
          if (__sidebar.is(":hidden")){
            __sidebar.fadeIn(300);
          }
         }else{
          __sidebar.fadeOut(300);
         }
      },200)
    });
  });
</script>


@endsection