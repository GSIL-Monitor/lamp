<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; chaRset=utf-8" />
    <title>第七城市-首页</title>
    <!--jquery-->
    <script src="/home/js/jquery-1.10.1.min.js"></script>
    <!--swiper-->
    <link rel="stylesheet" href="/home/css/idangerous.swiper.css">
    <script src="/home/js/idangerous.swiper.min.js"></script>
    <!--iconfont-->
    <link rel="stylesheet" type="text/css" href="/home/css/iconfont.css">
    <!--felizon-->
    <link rel="stylesheet" href="/home/css/felizon_pc.css" />
    <link rel="stylesheet" href="/home/css/style.css" />
    <link rel="stylesheet" href="/home/css/member.css" />
    <link rel="stylesheet" type="text/css" href="/home/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
    <!--youji-->
    <script type="text/javascript" src="/home/js/youji.js"></script>
    <!--pahang-->
    <script type="text/javascript" src="/home/js/function.js"></script>

  </head>

  <body style="background: #fff;">

   <!--top-->
    <div class="top">
      <div class="container">
        <div class="topleft">
          欢迎进入第七城市网&nbsp;&nbsp;&nbsp;&nbsp; 目的地城市：
          <a href="#">云南</a>
        </div>
        <div class="topright">
          <a href="login.html">登陆</a>|
          <a href="register.html">立即注册</a>I
          <a href="member.html">会员中心</a>
        </div>
      </div>
    </div>
    <!--top end-->

    <!--header-->
    <div class="header">
      <div class="container2">
        <div class="logo">
          <!-- <a href="index.html"><img src="img/logo.png" /></a> -->
        </div>
        <div class="nav">
          <ul>
            <li>
              <a href="index.html">首页</a>
            </li>
            <li>
              <a href="line.html">辣郊专线</a>
            </li>
            <li>
              <a href="piece.html">VIP拼团</a>
            </li>
            <li class="navsub">
              <a class="navsub_bg" href="made.html">包团定制</a>
              <div class="navsub_box">
                <a href="made.html">企业定制</a>
                <a href="made.html">家庭定制</a>
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
              <a class="navsub_bg2" href="raiders.html">云南攻略</a>
              <div class="navsub_box2">
                <a href="scenic.html">景区景点</a>
                <a href="hotel.html">精品住宿</a>
                <a href="foods.html">特色美食</a>
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
              <a href="about.html">关于我们</a>
            </li>
          </ul>
        </div>
       
      </div>
    </div>
    <!--header end-->

    <!--banner-->
    <div id="banner">
      <div class="swiper-container" id="banner_sw">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bannerbg"></div>
          </div>
          <div class="swiper-slide">
            <div class="bannerbg"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="bannavbg"></div>
        <div class="bannav">
          <ul>
            <li>
              <span><i class="iconfont icon-calendar"></i>行程天数</span>
              <p>
                <a href="#">1~3天</a>
                <a href="#">1~3天</a>
                <a href="#">1~3天</a>
              </p>
            </li>
            <li>
              <span><i class="iconfont icon-zhifeiji"></i>辣郊主题</span>
              <p>
                <a href="#">亲子游</a>
                <a href="#">越野游</a>
                <a href="#">亲子游</a>
                <a href="#">越野游</a>
                <a href="#">阳光之旅</a>
              </p>

            </li>
            <li style="border-bottom: 0px #999 dashed;">
              <span><i class="iconfont icon-dangdi"></i>线路区域</span>
              <p>
                <a href="#">昆大丽 </a>
                <a href="#">昆大丽中</a>
                <a href="#">昆大丽中泸</a>
                <a href="#">昆大丽版 </a>
                <a href="#">昆大丽中泸版</a>
                <a href="#">大丽中</a>
                <a href="#">大丽泸 </a>
                <a href="#">大丽版</a>
                <a href="#">瑞丽腾冲 </a>
              </p>
            </li>
          </ul>
          <div class="banmade">
            <a href="#">立即去定制<i class="iconfont icon-more"></i></a>
          </div>
        </div>
      </div>

      <script>
        var mySwiper = new Swiper('#banner_sw', {
          autoplay: 3000, //可选选项，自动滑动
          loop: true, //可选选项，开启循环
          effect: 'fade',
        })
      </script>
    </div>
    <!--banner end-->

         <!-- 内容区 -->
 @section('container')



 @show
<!-- 内容结束 -->

                       
<!-- Footer -->
<!-- 热门城市推荐 -->
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
        <p class="info">2004-2018 © 第七城市® qyer.com All rights reserved. Version v5.57 京ICP备12003524号 京公网安备11010102001935号 京ICP证140673号
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


  