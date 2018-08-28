@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

    <link rel="stylesheet" href="/static/css/travelmate_css_11fec1c767a35d697857a93cb29779b5.css">
        <script type="text/javascript">var BBS = BBS || {};
            BBS.FID = '2';
            window.__qRequire__ = {
              version: '1529486646',
              combineCSS: []
            };
        </script>
    <script src="/static/js/travelmate_js_f570012c38b78849e12f64362432fea1.js"></script>
    <link rel="stylesheet" type="text/css" href="/home/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/home/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/home/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 
  

    <style type="text/css">.zpui-head-ad { position: relative; z-index:-1; } .zpui-head-ad .bg { display: block; height: 60px; width: 100%; background: url(/static/images/cfa798af67b6444792780cf707ad9386.gif) center top no-repeat; } .zpui-head-ad .close { position: absolute; display: block; cursor: pointer; background: url(/static/images/web-ad-close.png) center center no-repeat; left: 50%; top: 50%; width: 30px; height: 30px; margin-left: 440px; margin-top: -15px; }
    </style>
 
    <script src="/static/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>
    <div id="crumnav" style="position:abselute;z-index:2">
      <div class="cns-wrap">
        <div class="cnsw-sdi">
          <div class="cn-info">
            <h3 class="cni-tle">结伴同游</h3>
            <p class="cni-con">
              <b class="cni-num">5</b>千万靠谱穷游er</p>
            <p class="cni-con">
              <b class="cni-num">110394</b>个正在结伴</p>
            <p class="cni-con">
              <b class="cni-num">5776</b>个近一个月内出发</p>
            <a class="cni-btn" href="/home/forums/create" target="_blank">发布结伴</a>
          </div>
          <div class="cn-slide">
            <div class="cns-inner">
              <a href="https://bbs.qyer.com/thread-2931543-1.html" target="_blank" class="cs-cover" data-bn-ipg="bbs-board-top-pic-1">
                <img src="/static/picture/1.gif" alt="【注意】请穷游er警惕非穷游官方账号私下主动加微信行为！"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="cnbgwrap">
        <div class="cnb-wp">
          <img src="/static/picture/11.gif" class="cn-bg"></div>
        <div class="cnb-wp bgzdx">
          <img src="/static/picture/11.gif" class="cn-bg"></div>
      </div>
    </div>
<div style="height:1200px;">
    <div class="m-sel f-bw f-ma">
        <div class="date">
            <span class="ymwrap">  
                <form action="/home/forums" method="get">
                    <div class="input-group col-lg-6 text-center" style="float: right;">
                          <input type="text" class="form-control" name="search" placeholder="输入相关的地区城市......" >
                          <span class="input-group-btn">
                            <button class="btn btn-success " type="submit">搜索</button>
                          </span>
                     </div>
                </form>
            </span> 
        </div>
    </div>
    <div class="m-con">
        <div class="cardwrap f-bw f-ma">
            <div class="container active clearfix" style="width: 1200px;">
              @foreach ( $mate as $k => $v )
              <a class="card" href="/home/forums/{{ $v->id }}/edit" target="_blank">
                <div class="imgwp">
                  <img class="ci" src="{{ $v->bpice }}" alt="">
                  <div class="shade" style="color: #fff;">
                    @if ( $v->status == 2 )
                      <p class="title" style="color: #fff;text-align: center;">已成功结伴</p>
                  </div>
                  @else
                    <p class="title" style="color: #fff;">还没有小伙伴组合<br>找找您想去的地方</p>
                  </div>
                  @endif
                </div>
                <div class="con">
                  <p class="name">
                    <img class="user" src="/home/images/stock-photo-254983354.jpg" alt="">
                    <span class="txt">{{ $v->btitle }}</span>
                    <span class="tag">__tag__</span></p>
                  <p class="des dinfo">
                    <i class="icf dest"></i>{{ $v->badd }}</p>
                  <p class="date dinfo">
                    <i class="icf idate"></i>{{ $v->bsettime }}
                    <span class="join">-</span>{{ $v->bouttime }}</p>
                </div>
              </a>
              @endforeach
            </div>
        </div>
        <div class="cardloading f-bw f-ma"></div>
        <div class="nocardList">约伴君没有找到符合条件的小伙伴，不如发布一个自己的结伴帖吧~</div><br><br><br>
        <div class="cardpage-wrap clearfix">
            <div class="cardpage active">
               {!! $mate->render() !!}
            </div>
        </div>
        <div class="m-matedock">
          <div class="wrap clearfix">
            <div class="inner">
              <div class="area">
                <span class="txt" style="color: green;">约伴君没有找到符合条件的小伙伴，不如发布一个自己的结伴帖吧~</span>
              </div>
            </div>
            <a class="pub" href="/home/forums/create" target="_blank">
            <i class="icf"></i>发布结伴</a>
          </div>
        </div>
    </div>

    <script src="/static/js/travelmate_js_btm_c7fcc138da60c76e6d772c173c71edf0.js"></script>    
    <style>
        .web_components_sidebar{display:none; width:55px;box-sizing:border-box;position:fixed;bottom:120px;right:40px;font-family:"Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Microsoft YaHei",宋体,sans-serif;background-color:white; z-index:1000;box-shadow: rgba(0,0,0,0.1) 0px 0px 4px;}
        .web_components_sidebar-item{display:block;width:55px;height:55px;box-sizing:border-box;border:solid 1px #e2e2e2 !important;color:#b2b2b2 !important;text-align:center;margin-top:-1px;position:relative;}
        .web_components_sidebar-item:hover{border:solid 1px rgba(0,0,0,0) !important;color:white !important;z-index:1;background-color:#07AE72;}
        .web_components_sidebar-item .title{font-size:12px;-webkit-transform:scale(0.8);-moz-transform:scale(0.8);-o-transform:scale(0.8);transform:scale(0.8);display:block;position:absolute;bottom:1px;width:100%;}
    </style>
    <div class="web_components_sidebar">
        <a class="web_components_sidebar-item js_gototop" href="javascript:;">
        <i class="web_components_sidebar-icon fanhuidingbu"></i>
        <span class="title">返回顶部</span>
        </a>
    </div>
</div>

    <div id="js_feedback_tip" class="feedback-tip" >
        <div class="feedback-tip-box">
          <span class="feedback-tip-text" ></span>
        </div>
    </div>
<style>


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
     function submitFeedback(){
          $feedbackErrortip.text(' ').show()
          if(!$feedbackContent.val()){
            return $feedbackErrortip.text('请输入反馈内容')
          }
          if(utils.getStrLen($feedbackContent.val())>140){
            return $feedbackErrortip.text('反馈内容应小于 140 字')
          }
     
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

