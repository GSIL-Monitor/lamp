@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
    <script src="/home/js/jquery-1.10.1.min.js"></script>
    <!--swiper-->
    <link rel="stylesheet" href="/home/css/idangerous.swiper.css">
    <script src="/home/js/idangerous.swiper.min.js"></script>
    <!--iconfont-->
    <!--felizon-->
    <!--youji-->
    <!--列表头部 end-->
    <!--产品列表-->
    <div class="container mt20">
      <div class="boxleft">
        <div class="line_detail">
          <div class="hdbox_left">
            <div class="overflow bg-f mt20" style="border: 1px #eee solid;">
              <div class="deleft">
                <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
                <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
                <script type="text/javascript" src="/home/js/jssor.core.js"></script>
                <script type="text/javascript" src="/home/js/jssor.utils.js"></script>
                <script type="text/javascript" src="/home/js/jssor.slider.js"></script>
                <script>
                  jQuery(document).ready(function($) {
                    var options = {
                      $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                      $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                      $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                      $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                      $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                        $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                        $Loop: 2, //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                        $SpacingX: 3, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                        $SpacingY: 3, //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                        $DisplayPieces: 6, //[Optional] Number of pieces to display, default value is 1
                        $ParkingPosition: 204, //[Optional] The offset position to park thumbnail,

                        $ArrowNavigatorOptions: {
                          $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                          $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                          $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                          $Steps: 6 //[Optional] Steps to go for each navigation request, default value is 1
                        }
                      }
                    };

                    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizes
                    function ScaleSlider() {
                      var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                      if(parentWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 560));
                      else
                        window.setTimeout(ScaleSlider, 30);
                    }

                    ScaleSlider();

                    if(!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                      $(window).bind('resize', ScaleSlider);
                    }

                    //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                    //    $(window).bind("orientationchange", ScaleSlider);
                    //}
                    //responsive code end
                  });
                </script>
                <!-- Jssor Slider Begin -->
                <!-- You can move inline styles to css file or css block. -->
                <div id="slider1_container" style="position: relative; width: 560px;height: 330px; overflow: hidden;">

                  <!-- Loading Screen -->
                  <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(/home/img/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                  </div>
                  <!-- Slides Container -->
                  <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 560px; height: 330px;overflow: hidden;">
                    @foreach($pic as $k=>$v)
                      <div>
                        <img u="image" src="{{ $v }}" />
                      </div>
                     @endforeach
                  </div>

                  <!-- Thumbnail Navigator Skin Begin -->
                  <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 565px; height: 100px; left: 0px; bottom: 0px; overflow: hidden; ">
                    <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
                    <!-- Thumbnail Item Skin Begin -->
                    <style>
                      /* jssor slider thumbnail navigator skin 07 css */
                      /*
                .jssort07 .p            (normal)
                .jssort07 .p:hover      (normal mouseover)
                .jssort07 .pav          (active)
                .jssort07 .pav:hover    (active mouseover)
                .jssort07 .pdn          (mousedown)
                */
                      
                      .jssort07 .i {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 99px;
                        height: 66px;
                        filter: alpha(opacity=80);
                        opacity: .8;
                      }
                      
                      .jssort07 .p:hover .i,
                      .jssort07 .pav .i {
                        filter: alpha(opacity=100);
                        opacity: 1;
                      }
                      
                      .jssort07 .o {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 97px;
                        height: 64px;
                        border: 1px solid #000;
                        transition: border-color .6s;
                        -moz-transition: border-color .6s;
                        -webkit-transition: border-color .6s;
                        -o-transition: border-color .6s;
                      }
                      
                      * html .jssort07 .o {
                        /* ie quirks mode adjust */
                        width/**/
                        : 99px;
                        height/**/
                        : 66px;
                      }
                      
                      .jssort07 .pav .o,
                      .jssort07 .p:hover .o {
                        border-color: #fff;
                      }
                      
                      .jssort07 .pav:hover .o {
                        border-color: #0099FF;
                      }
                      
                      .jssort07 .p:hover .o {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                      }
                    </style>
                    <div u="slides" style="cursor: move;">
                      <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                        <thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
                        <div class="o">
                        </div>
                      </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                    <!-- Arrow Navigator Skin Begin -->
                    <style>
                      /* jssor slider arrow navigator skin 11 css */
                      /*
                .jssora11l              (normal)
                .jssora11r              (normal)
                .jssora11l:hover        (normal mouseover)
                .jssora11r:hover        (normal mouseover)
                .jssora11ldn            (mousedown)
                .jssora11rdn            (mousedown)
                */
                      
                      .jssora11l,
                      .jssora11r,
                      .jssora11ldn,
                      .jssora11rdn {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(/home/img/a11.png) no-repeat;
                        overflow: hidden;
                      }
                      
                      .jssora11l {
                        background-position: -11px -41px;
                      }
                      
                      .jssora11r {
                        background-position: -71px -41px;
                      }
                      
                      .jssora11l:hover {
                        background-position: -131px -41px;
                      }
                      
                      .jssora11r:hover {
                        background-position: -191px -41px;
                      }
                      
                      .jssora11ldn {
                        background-position: -251px -41px;
                      }
                      
                      .jssora11rdn {
                        background-position: -311px -41px;
                      }
                    </style>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;"> </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px"> </span>
                    <!-- Arrow Navigator Skin End -->
                  </div>
                  <!-- ThumbnailNavigator Skin End -->
                  <a style="display: none" href="#">javascript</a>
                  <!-- Trigger -->
                </div>
              </div>
              <div class="deright">
                <div class="det1">
                  <h1>{{ $data['title'] }}</h2>
                  <ul>
                    <li><span><i class="iconfont icon-mudedi"></i>&nbsp;&nbsp;&nbsp;目的地：</span>{{ $data['address'] }}</li>
                    <li><span><i class="iconfont icon-xingcheng"></i>行程天数：</span>{{ $data['day'] }}</li>
                  </ul>
                </div>
              </div>
              <div class="dtime">
                <div class="dtime_left">
                  
                </div>
                <div class="dtime_right"></div>
              </div>
            </div>
            <div class="mt20 overflow clear bg-f" style="border: 1px #eee solid;">
              <div class="detxq">
                <div class="detltitle">
                  <h1>游玩<br/>详情</h1>
                </div>
                <div class="detailbox">
                  <div class="daybox">
                    <div class="boxleft">
                      <h1>D1</h1>
                    </div>
                    <div class="boxright">
                      <h1><span>GO</span>出发:{{ $data['address'] }}</h1>
                      <div class="boxdt">
                        {!! $data['content'] !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--gg-->
        <!--gg end-->
        <!--cxlist-->
        <!--cxlist end-->
        <!--gg-->
        
        <!--gg end-->
        <!--bbgl-->
        <!--bbgl end-->
      </div>
      <div class="boxright">
        <!--cxlist-->
        <div class="title" style="margin-top: 0;">
          相关线路推荐          
        </div>
        <div class="cxlist">
          <ul>
            <li>
              <a href="#">
                <h2><b>1</b>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
                <p><span>跟团游</span>满意度99%</p>
                </h2>
              </a>
            </li>
            <li>
              <a href="#">

                <h2><b>2</b>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
                <p><span>跟团游</span>满意度99%</p>
                </h2>
              </a>
            </li>
            <li>
              <a href="#">

                <h2><b>3</b>橘子洲-韶山-张家界-玻璃栈道-凤凰古城双飞6日游
                <p><span>跟团游</span>满意度99%</p>
                </h2>
              </a>
            </li>
            <li>
              <a href="#">
                <h2>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
                <p><span>跟团游</span>满意度99%</p>
                </h2>
              </a>
            </li>     
          </ul>
        </div>
        <!--cxlist end-->
        <!--gg-->
        
        <!--gg end-->
        <!--bbgl-->
        <div class="title">必备攻略
          <a href="#">更多&nbsp;>></a>
        </div>
        <div class="bbgl">
          <h1>
            <a href="#"><img src="/home/img/2.jpg"/>
            <p></p>
            <span>01&nbsp;冬季出行必备十大条件</span>
            </a>
          </h1>
          <ul>
            <li><span>01</span>
              <a href="#">邂逅洱海，玉龙雪山大索</a>
            </li>
            <li><span>02</span>
              <a href="#">实景表演印象丽江</a>
            </li>
            <li><span>03</span>
              <a href="#">崇圣寺三塔，手工扎染</a>
            </li>
            <li><span>04</span>
              <a href="#">车1导0购物邂逅洱海</a>
            </li>
            <li><span>05</span>
              <a href="#">邂逅洱海，玉龙雪山大索</a>
            </li>
            <li><span>06</span>
              <a href="#">车1导0购物邂逅洱海</a>
            </li>
          </ul>
        </div>
        <!--bbgl end-->
      </div>
    </div>

@endsection