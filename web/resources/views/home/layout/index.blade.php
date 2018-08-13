<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; chaRset=utf-8" />
    <title>辣郊游旅游网-首页</title>
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
          欢迎进入辣郊游旅游网&nbsp;&nbsp;&nbsp;&nbsp; 目的地城市：
          <a href="#">云南</a>
        </div>
        <div class="topcen">
          <form>
            <p><input type="text" value="查询订单" /><button>查询</button></p>
            <p><input type="text" value="线路查询" /><button>查询</button></p>
          </form>
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
          <a href="index.html"><img src="img/logo.png" /></a>
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
        <div class="tel">
          <img src="img/tel.png" />
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
   <div id="mws-footer">
       欢 迎 来 到  第 七 城 市
    </div>
<!-- 热门城市推荐 -->
 <!--footer-->
    <div class="footer">
      <div class="container">
        <div class="footlvpai">
          <h1>辣郊游·旅游网</h1>
          <p>Life is not a solo act. It’s a huge collaboration, and we all need to assemble around us the people<br/> who care about us and support us in times of strife</p>
        </div>
        <div class="footer_left">
          <ul>
            <li>
              <h1>关于我们</h1>
              <a href="# ">品牌介绍</a>
              <a href="# ">公司简介</a>
              <a href="# ">服务项目</a>
              <a href="# ">公司简介</a>
              <a href="# ">公司简介</a>
            </li>
            <li>
              <h1>旅游城市  </h1>
              <a href="# ">海南三亚</a>
              <a href="# ">云南大理</a>
              <a href="# ">上海</a>

            </li>
            <li>
              <h1>品牌旅游</h1>
              <a href="# ">专业团队</a>
              <a href="# ">线路安排</a>
              <a href="# ">行程明确细致</a>
              <a href="# ">酒店</a>
              <a href="# ">公司简介</a>
            </li>
            <li>
              <h1>其他事项</h1>
              <a href="# ">公司简介</a>
              <a href="# ">公司简介</a>
              <a href="# ">公司简介</a>
              <a href="# ">公司简介</a>
              <a href="# ">公司简介</a>
            </li>
          </ul>
        </div>
        <div class="footer_right">
          
        </div>
      </div>
    </div>
    <div class="footer2">
      <div class="container">
        <p>Copyright © 2008-2017 辣郊游·旅游网All Rights Reserved 蒙ICP备000000号</p>
        <p>旅游者消费提示——旅游是一个需要特别审批的行业，无旅游经营许可证者均无资格接待安排旅游者；兴业旅行社年度旅行社责任险保额为1000万元，行业最高，敬请知晓!</p>
      </div>
    </div>
    <!--footer end-->
  </body>

</html>


  