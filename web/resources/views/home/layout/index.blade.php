<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; chaRset=utf-8" />
    <title>第七城市</title>
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
    
    <!-- 轮播图 -->
    <link rel="stylesheet" type="text/css" href="/home/css/style1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/home/css/nivo-slider.css" media="screen">
    <script type="text/javascript" src="/home/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/home/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/home/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    //Slider
    jQuery(window).load(function() {
      jQuery('#slider').nivoSlider({
      effect: 'fold',
      slices:15,
      animSpeed:500, //Slide transition speed
      pauseTime:5000,
      controlNav: false,
      directionNavHide: false,
      prevText: 'prev',
      nextText: 'next',
      startSlide:0, //Set starting Slide (0 index)
      directionNav:true, //Next &amp; Prev
      afterLoad: function(){
        jQuery(".nivo-caption").animate({top:"60"}, {easing:"easeOutBack", duration: 500})
        },
        beforeChange: function(){
        jQuery(".nivo-caption").animate({top:"-300"}, {easing:"easeInBack", duration: 500})
        },
        afterChange: function(){
        jQuery(".nivo-caption").animate({top:"60"}, {easing:"easeOutBack", duration: 500})
        }
      });
      
    });

    </script>
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
          <a href="index.html"><img style="height: 50px;width: 220px" src="img/logo1.png" /></a>
        </div>
        <div class="nav">
          <ul>
            <li>
              <a href="index.html">首页</a>
            </li>
            <li>
              <a href="line.html">各地美食</a>
            </li>
            <li>
              <a href="piece.html">热门景点</a>
            </li>
            <li class="navsub">
              <a class="navsub_bg" href="made.html">出行锦囊</a>
              <div class="navsub_box">
                <a href="made.html">娱乐推荐</a>
                <a href="made.html">精品路线</a>
                <a href="made.html">精品酒店</a>
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
              <a href="about.html">关于我们</a>
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
                       
<!-- Footer -->
   <div id="mws-footer">
       
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


  