<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; chaRset=utf-8" />
    <title>第七城市</title>
    <!--jquery-->
    <script src="/home/js/jquery-1.10.2.min.js"></script>
    <!-- <script src="/home/js/jquery-1.6.4.min.js"></script> -->
    <!--swiper-->
    <link rel="stylesheet" href="/home/css/idangerous.swiper.css">
    <script src="/home/js/idangerous.swiper.min.js"></script>
    <!--iconfont-->
    <link rel="stylesheet" type="text/css" href="/home/css/iconfont.css">
    <!--felizon-->
    <link rel="stylesheet" href="/home/css/felizon_pc.css" />
    <link rel="stylesheet" href="/home/css/style.css" />
    <link rel="stylesheet" href="/home/css/style3.css" />
    <link rel="stylesheet" href="/home/css/member.css" />
    <link rel="stylesheet" type="text/css" href="/home/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
    <!--youji-->
    <script type="text/javascript" src="/home/js/youji.js"></script>
    <!--pahang-->
    <script type="text/javascript" src="/home/js/function.js"></script>
    
    <!-- 轮播图 -->
    <script src="/home/js/slider.js"></script>
    <style>
      .flexslider {
        margin: 0px auto 20px;
        position: relative;
        width: 100%;
        height: 482px;
        overflow: hidden;
        zoom: 1;
      }

      .flexslider .slides li {
        width: 100%;
        height: 100%;
      }

      .flex-direction-nav a {
        width: 70px;
        height: 70px;
        line-height: 99em;
        overflow: hidden;
        margin: -35px 0 0;
        display: block;
        background: url(/home/images/ad_ctr.png) no-repeat;
        position: absolute;
        top: 50%;
        z-index: 10;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .3s ease;
        border-radius: 35px;
      }

      .flex-direction-nav .flex-next {
        background-position: 0 -70px;
        right: 0;
      }

      .flex-direction-nav .flex-prev {
        left: 0;
      }

      .flexslider:hover .flex-next {
        opacity: 0.8;
        filter: alpha(opacity=25);
      }

      .flexslider:hover .flex-prev {
        opacity: 0.8;
        filter: alpha(opacity=25);
      }

      .flexslider:hover .flex-next:hover,
      .flexslider:hover .flex-prev:hover {
        opacity: 1;
        filter: alpha(opacity=50);
      }

      .flex-control-nav {
        width: 100%;
        position: absolute;
        bottom: 10px;
        text-align: center;
      }

      .flex-control-nav li {
        margin: 0 2px;
        display: inline-block;
        zoom: 1;
        *display: inline;
      }

      .flex-control-paging li a {
        background: url(/home/images/dot.png) no-repeat 0 -16px;
        display: block;
        height: 16px;
        overflow: hidden;
        text-indent: -99em;
        width: 16px;
        cursor: pointer;
      }

      .flex-control-paging li a.flex-active,
      .flex-control-paging li.active a {
        background-position: 0 0;
      }

      .flexslider .slides a img {
        width: 100%;
        height: 482px;
        display: block;
      }
    </style>
    <!-- 轮播图结束 -->

  </head>

 <body style="background: #fff;">
   <!--top-->
    <div class="top">
      <div class="container">
        <div class="topleft">
          欢迎进入第七城市
        </div>
        <div class="topcen">
          <form>
            <p><input type="text" value="搜索游记" /><button>查询</button></p>
            <p><input type="text" value="线路查询" /><button>查询</button></p>
          </form>
        </div>
        <div class="topright">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="login.html">登陆</a>|
          <a href="register.html">立即注册</a>
        </div>
      </div>
    </div>
    <!--top end-->
    <!--header-->
    <div class="header">
      <div class="container2">
        <div class="logo">
          <a href="/home/index"><img style="height: 70.99px;width: 220px" src="/home/img/logo1.png" /></a>
        </div>
        <div class="nav">
          <ul>
            <li>
              <a href="/home/index">首页</a>
            </li>
            <li>
              <a href="/home/food">各地美食</a>
            </li>
            <li>
              <a href="/home/scenery">热门景点</a>
            </li>
            <li class="navsub">
              <a class="navsub_bg" href="#">出行锦囊</a>
              <div class="navsub_box">
                <a href="/home/play">娱乐推荐</a>
                <a href="/home/strategy">城市攻略</a>
                <a href="/home/hotel">精品酒店</a>
                <a href="/home/travel">精品主题游 </a>
              </div>
              <script type="text/javascript">
                $(function() {
                  $(".navsub").mouseover(function() {
                    $(".navsub_box").show();
                    $(".navsub_bg").css("background", "#f1f1f1");
                    $(".navsub_bg").css("color", "#FA3A39");
                  })
                  $(".navsub").mouseleave(function() {
                    $(".navsub_box").hide();
                    $(".navsub_bg").css("background", "none");
                    $(".navsub_bg").css("color", "#333333");
                  })
                })
              </script>
            </li>


            <li class="navsub2">
              <a class="navsub_bg2" href="raiders.html">第七社区</a>
              <div class="navsub_box2">
                <a href="scenic.html">旅行论坛</a>
                <a href="hotel.html">旅行问答</a>
                <a href="foods.html">结伴同行</a>
                <a href="travels.html">走心游记</a>
              </div>
              <script type="text/javascript">
                $(function() {
                  $(".navsub2").mouseover(function() {
                    $(".navsub_box2").show();
                    $(".navsub_bg2").css("background", "#f1f1f1");
                    $(".navsub_bg2").css("color", "#FA3A39");
                  })
                  $(".navsub2").mouseleave(function() {
                    $(".navsub_box2").hide();
                    $(".navsub_bg2").css("background", "none");
                    $(".navsub_bg2").css("color", "#333333");
                  })
                })
              </script>
            </li>
            <li>
              <a href="/home/home">关于我们</a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
    <!--header end-->

<!-- 内容区 -->
 @section('container')



 @show
<!-- 内容结束 -->
                       

<!--footer-->
    <div class="qyer_footer">
      <div class="topline"></div>
      <div class="content">
        <p class="nav">
          <a href="//nav.qyer.com/about" target="_blank" rel="nofollow" data-bn-ipg="foot-about-1">第七城市简介</a>
          <a href="//nav.qyer.com/partner" target="_blank" rel="nofollow" data-bn-ipg="foot-about-3">合作伙伴</a>
          <a href="//nav.qyer.com/job" target="_blank" rel="nofollow" data-bn-ipg="foot-join-1">加入我们</a>
          <a href="//nav.qyer.com/tyro" target="_blank" rel="nofollow" data-bn-ipg="foot-help-1">新手上路</a>
          <a href="//m.qyer.com/guide/page/aEKs7ooblmk/?lk=1" target="_blank" rel="nofollow" data-bn-ipg="foot-help-2">使用帮助</a>
          <a href="//www.qyer.com/sitemap.html" target="_blank" data-bn-ipg="foot-help-4">网站地图</a>
          <a href="//nav.qyer.com/member" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-1">会员条款</a>
          <a href="//nav.qyer.com/bbsguide" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-2">社区指南</a>
          <a href="//nav.qyer.com/copyright" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-3">版权声明</a>
          <a href="//nav.qyer.com/exemption" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-4">免责声明</a>
          <a href="//nav.qyer.com/contact" target="_blank" rel="nofollow" data-bn-ipg="foot-about-2">联系我们</a></p>
        <p class="info">2004-2018 ? 第七城市? qyer.com All rights reserved. Version v5.57 京ICP备12003524号 京公网安备11010102001935号 京ICP证140673号
          <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/yyzz.jpg">营业执照</a>
          <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/jyxkz.jpg">经营许可证</a></p>


        <!--友情链接模块-->
        <!-- 友情链接 -->
        <dl class="qyer_footer_links">
          <dt>友情链接：</dt>
          @foreach ($link as $k=>$v)
          <dd>
            <a target="_blank" href="{{ $v->lurl }}" data-bn-ipg="foot-hand-1">{{ $v->lname }}</a>
          </dd>
          @endforeach
        </dl>
      </div>
    </div>


  <!--footer end-->
  </body>

</html>


  