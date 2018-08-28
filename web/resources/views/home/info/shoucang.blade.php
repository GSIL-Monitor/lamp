@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')



<link rel="stylesheet" href="/home/homeinfo/css/base_css_d4811e5c69b8e51f74324c600db93b1c.css">

<link rel="stylesheet" href="/home/homeinfo/css/user_css_8004e6243955e88dc8f285e20be5314b.css">
<script src="/home/homeinfo/js/user_js_f76373f2af777ea5b35024df2415d3bf.js"></script>

<script src="/home/homeinfo/js/27acf946235b4559a402a76ce57f808c.js"></script>
<script src="/home/homeinfo/js/e8cd0136484147418cf0ed3fa47f5a62.js"></script>


<div id="zpui-head-ad" class="zpui-head-ad" >
    <a href=" " target="_blank" class="bg"></a>
    <span id="zpui-head-ad-close" class="close"></span>
</div>

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

<script>
    window.__user/home/homeinfoCallBack = function (data) {
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
        'page_type':'detail',
        'ugc_type':'user_index',
        'ugc_content':'',
        'abt':''
    };
</script>
<link rel="stylesheet" href="/home/homeinfo/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
<!--test-->
<script src="/home/homeinfo/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>



<!--首页头部 -->
<div class="u_ind_topbar" >
    <!--用户封面 -->
    <div class="u_ind_banner_fix" style="position:abselute;z-index:-3;">
        <!--用户封面图 -->
        <div class="u_ind_banner" id="u_ind_banner" >
            <div class="img" >
                  <img src="@if(!empty($user ->Usersdetail -> beijingpic)) {{ $user ->Usersdetail -> beijingpic }}@else /home/beijingpic/morenbeijing.png @endif" />
            </div>

            <script type="text/javascript">
                function c () {
                var r= new FileReader();
                f=document.getElementById('file').files[0];
                r.readAsDataURL(f);
                r.onload=function  (e) {
                document.getElementById('show').src=this.result;
                };}
            </script>


            <!--背景渐变 -->
            <div class="ind_banner_bg">背景渐变</div>
            <div class="write">
                <span class="back_gray"></span>
            </div>
                <div class="infos">
                    <div class="back_gray clearfix">
                </div>
            </div>
            <div class="loading_layer_bg"></div>
        </div>
    </div>
    <!--用户信息 -->
    <div class="u_ind_head">
        <!--用户图像 -->
        <div class="face">
            <div class="img">
                <img src="@if(!empty($user -> Usersdetail -> profile)) {{ $user -> Usersdetail -> profile }}@else /home/moremimg/1.gif @endif" onerror="avatarErr(this,10587925)" width="120" height="120" alt="" />
                </div>
                <span class="auth_avatar_q posa l">
                    <i class="icon member" data-toggle="tooltip" data-placement="bottom"></i>
                </span>
            <!--没有图像 -->
            <div class="img_edit" style="display:none;">
               
            </div>
        </div>
        <div class="clear"></div>
        <!--用户资料 -->
        <div class="infos">
            <h3 class="name">
                <strong data-bn-ipg="usercenter-username" class="fontYaHei fb">
                @if(!empty( $user -> Usersdetail -> nickname ))
                  {{ $user -> Usersdetail -> nickname }}
                @else
                  {{ $user -> username }}
                @endif 
                </strong>
                @if( $user -> Usersdetail -> sex == 1 )
                    <span class="icon_gender_he" title="男"></span>
                @elseif( $user -> Usersdetail -> sex == 2 )
                    <span class="icon_gender_she" title="女"></span>
                @endif
                    <a href=" "  class="ui_attent_btn _js_follow_func" >关注按钮</a>
                
                    <a href=" "  class="ui_private_btn _jsaddmsg" ">留言</a>
            </h3>
            <div class="text fontSong">
                个性签名：<a data-bn-ipg="usercenter-grade" href="" class="fb cBlue pr20"> 
                    {{ $user -> Usersdetail -> users_des }}
                </a>
                现居：<a data-bn-ipg="usercenter-grade" href=" " class="fb cBlue pr20">{{ $user -> Usersdetail -> addres }}</a>
            </div>
        </div>
        <div class="clear"></div>

        <!--个人中心导航 -->
        <div class="menu clearfix" style="height:40px">
            <ul class="fontSong">
                <li data-bn-ipg="usercenter-tab-home" style="width: 120px">
                    <a href="/home/info" class="a_list" style="text-align: center">游记</a>
                </li>
                <li data-bn-ipg="usercenter-tab-footprint"  style="width: 120px">
                    <a href=" " class="a_list" style="text-align: center">帖子</a>
                </li>
                <li data-bn-ipg="usercenter-tab-thread"  style="width: 120px">
                    <a href=" " class="a_list" style="text-align: center" >
                    <strong> 0 </strong> 收藏 </a>
                </li>
                <li data-bn-ipg="usercenter-tab-home" class="current" style=" float:left;width: 120px">
              <a href="home/info/trash" class="a_list"> 
               回收站</a>
          </li>
            </ul>
                <a data-bn-ipg="usercenter-profile" href="/home/geren" class="data">设置</a>
        </div>

            <!-- 帖子开始 -->
    @foreach($deldata as $k => $v)
    <div class="container mt20" style="width: 1260px" >
      <div class="boxleft">
        <div class="linelist" style="background: #F3F6F7">
          <ul>
            <li>
              <div class="hotglleft">
                <a href="line_detail.html">
                  <img src="{{ $v -> pro }}" style="width: 282px;height: 188px;" />
                </a>
              </div>
              <div class="hotglright">
                <h1>
                  <a href=" ">{{ $v -> title }}
                  </a>
                  <a href="line_detail.html">
                    {{ $v -> summary }}
                  </a>
                </h1>
                <h3>
                    <span><i class="iconfont icon-dizhi"></i>{{ $v  -> site }}</span>
                    <span><i class="iconfont icon-kanguos"></i>{{ $v -> reads }}</span>
                    <span><i class="iconfont icon-shoucang"></i>{{ $v -> likes }}</span>
                </h3>
                <h4>
                    <i class="iconfont icon-ziyouanpai"></i>发表时间：<span>{{ $v -> updetad_at }}</span>
                </h4>
                    <p>
                        <div style="height:20px;width:480px;text-overflow: ellipsis;overflow:hidden;white-space:nowrap;">{!! $v -> content !!}
                        </div>
                    </p>
                <h5>
                    <a href="/home/info/deltime/{{ $v -> id }}">永久删除</a>

                    <a href="/home/info/rollback/{{ $v -> id }}">恢复</a>
                </h5>
            
  
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    @endforeach
    <!--帖子结束-->
    </div>
</div>
<div class="u_ind_main clearfix">
<div class="u_ind_sidebar"></div>
<script type="text/javascript">
    var _js_visit_key_now =0;//当前页面key 最多三页
    var _js_visit_key_count =1;//有几组
    var _js_visit_con_content = "";//内容
    $(function(){
        $("#_js_visit_down").click(function(){
            $(this).removeClass("null");
            $("#_js_visit_up").removeClass("null");
            _js_visit_key_now ++;
            if(_js_visit_key_now>=_js_visit_key_count-1){
                _js_visit_key_now = _js_visit_key_count-1;
                $(this).addClass("null");
                $("#_js_visit_container").html(_js_visit_con_content[_js_visit_key_now]);
                return;
            }
            $("#_js_visit_container").html(_js_visit_con_content[_js_visit_key_now]);
        });
        $("#_js_visit_up").click(function(){
            $(this).removeClass("null");
            $("#_js_visit_down").removeClass("null");

            _js_visit_key_now --;
            if(_js_visit_key_now<=0){
                _js_visit_key_now =0;
                $(this).addClass("null");
                $("#_js_visit_container").html(_js_visit_con_content[_js_visit_key_now]);
                return;
            }
            $("#_js_visit_container").html(_js_visit_con_content[_js_visit_key_now]);
        });
    });
</script>
    <div class="u_ind_content"> 
        <script type="text/javascript">
            var map_svg_init_config = {width:678,height:352,initialZoom: -4, minZoom:-4,maxZoom:5,initialPosition: { x:15, y: -36},iscity:true};
            var map_beentocountry = [];
            var map_beentocity = null;
            var map_plantocity = null;
            var map_livedcity = [];
            var map_uid = 10587925;
            var last_map_zoom_size = map_svg_init_config.initialZoom;
        </script>
        <div class="u_ind_map" >
           
            <div class="map_all" style="width: 980px;">
                <div data-bn-ipg="usercenter-place-map" class="map" id="map" ></div>
            </div>
        </div> 
    </div>        
    <div class="u_ind_item">
        <div id="userhometravel"></div>
    </div>

  </div>


<script type="text/javascript">
$(function(){
    //头部大图
    (function(){
        var img = $('#u_ind_banner .img img');
        var nav = $('.q-layer-header');
        var valve = 340;

        $(window).scroll(function(){
            var scrTop = $(window).scrollTop();
            if (scrTop<=valve) {
                nav.css('top', 0);
                img.css('top', scrTop/2 );
            }
            else {
                nav.css('top', -100);
            }
        });
        if ( /msg/.test(window.location) ) {
            return false;
        }
        if (window.location.hash == "") {
            setTimeout(function(){
                var top = 300;
                $("html,body").animate({scrollTop:top});
            }, 1500);
        }
    })();


});
</script>
<script type="text/javascript" src="/home/homeinfo/js/250722439c594dae86d321f6e9e13773.js"></script>
<div style="display: none;"></div>
<script>
        var script   = document.createElement("script");
        script.type  = "text/javascript";
        script.async = true;
        script.src   = "https:///home/homeinfo.qyer.com/qyer_ui_frame/m/js/dist/base_beacon_ga.js";
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

  .web_components_sidebar-icon{background-image:url(/home/homeinfo/images/icons.png);background-repeat:no-repeat;width:18px;height:18px;display:block;margin:12px auto 0 auto;background-position:0px 0;}
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
     <div class="web_components_sidebar">

        <a class="web_components_sidebar-item js_gototop" href="javascript:;">
        <i class="web_components_sidebar-icon fanhuidingbu"></i>
        <span class="title">返回顶部</span>
      </a>
    </div>
    <div id="js_feedback_tip" class="feedback-tip" >
      <div class="feedback-tip-box">
        <span class="feedback-tip-text" ></span>
      </div>
    </div>
<style>
  .web_components_sidebar_feedbackdialog_warp{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:2200;background-color:rgba(0,0,0,0.3);}
  .web_components_sidebar_feedbackdialog{display:block;padding:20px;width:400px;box-sizing:border-box;background-color:#fff;border:solid 1px #e2e2e2;position:fixed;left:50%;top:50%;margin:-240px  auto auto -200px;-webkit-box-shadow:0 2px 4px rgba(0,0,0,.1);-o-box-shadow:0 2px 4px rgba(0,0,0,.1);-moz-box-shadow:0 2px 4px rgba(0,0,0,.1);box-shadow:0 2px 4px rgba(0,0,0,.1);}
  .web_components_sidebar_feedbackdialog .closeImg{position:absolute;top:19px;right:19px;cursor:pointer;}
  .web_components_sidebar_feedbackdialog .huiji{opacity:0;background-image:url(/home/homeinfo/images/huiji.png);width:132px;height:120px;display:block;position:absolute;top:-36px;left:40px;}
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