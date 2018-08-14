@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

  <!--轮播图-->
    <div id="banner_tabs" class="flexslider">
      <ul class="slides">
        @foreach($slid as $k=>$v)
        <li>
          <a title="" target="_blank" href="#">
            <img width="1920" height="482" alt="" style="background: url({{ $v -> profile }}) no-repeat center;" src="images/banner1.jpg">
          </a>
        </li>
         @endforeach
       
        
      </ul>
      <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="javascript:;">Previous</a></li>
        <li><a class="flex-next" href="javascript:;">Next</a></li>
      </ul>
      <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
        @foreach($slid as $k=>$v)
        <li><a></a></li>
        @endforeach
      </ol>
      </div>
     
      <script src="/home/js/slider.js"></script>
      <script type="text/javascript">
      $(function() {
        var bannerSlider = new Slider($('#banner_tabs'), {
          time: 5000,
          delay: 400,
          event: 'hover',
          auto: true,
          mode: 'fade',
          controller: $('#bannerCtrl'),
          activeControllerCls: 'active'
        });
        $('#banner_tabs .flex-prev').click(function() {
          bannerSlider.prev()
        });
        $('#banner_tabs .flex-next').click(function() {
          bannerSlider.next()
        });
      })
      </script>

      <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
    </div>
  <!--轮播图 end-->





    <!--特卖推荐-->
    <div class="tmbg">
      <div class="container">
        <div class="tmleft">
          <div class="title3">
            <p>Yunnan special activity</p>
            <span>云南·特卖活动</span>
          </div>
          <script>
            $(document).ready(function() {
              $(".tmleft ul li").hover(function() {
                $(this).find(".tmopenbg").slideDown();
                $(this).find(".tmopen").slideDown(300);
              }, function() {
                $(this).find(".tmopenbg").slideUp();
                $(this).find(".tmopen").slideUp();
              });
            });
          </script>
          <ul>
            <li>
              <h1><img src="img/sanya6.jpg"/></h1>
              <h2>大理古迹探寻5日游</h2>
              <h3><span>出发日期：2017-12-26</span>  <span>报名截止：2017-12-29</span></h3>
              <h4>带你走进大山深处，探索最神秘的大山遗迹，观大自然真正的鬼斧神工</h4>
              <div class="tmopenbg"></div>
              <div class="tmopen">
                <a href="#">+&nbsp;查看详情</a>
              </div>
            </li>
            <li>
              <h1><img src="img/sanya6.jpg"/></h1>
              <h2>大理古迹探寻5日游</h2>
              <h3><span>出发日期：2017-12-26</span>  <span>报名截止：2017-12-29</span></h3>
              <h4>带你走进大山深处，探索最神秘的大山遗迹，观大自然真正的鬼斧神工</h4>
              <div class="tmopenbg"></div>
              <div class="tmopen">
                <a href="#">+&nbsp;查看详情</a>
              </div>
            </li>
          </ul>
          <a style="color: #333;text-align: center;margin-top: 20px;display: block;font-size: 14px;" href="#">查看更多<span style="color: #FA3A39;">>></span></a>
        </div>
        <div class="tmright">
          <div class="tmright_top"><i class="iconfont icon-fuzhi"></i>已参与游客</div>

          <div id="gundon" class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="line">
                  <h1>姓名：张先生</h1>
                  <h2>预定线路：你走进大山深处，探索最神秘的大山遗迹</h2>
                  <h3>预定时间：2017-12-28</h3>
                </div>
              </div>

            </div>
          </div>
          <script type="text/javascript">
            window.onload = function() {
              var mySwiper = new Swiper('#gundon', {
                loop: false,
                mode: 'vertical',
                autoplay: 1500,
                slidesPerView: 4,
                //其他设置
              });
            }
          </script>
        </div>
      </div>
    </div>
    <!--特卖推荐 end-->

    <!--云南·攻略排行榜-->
    <div class="container">
      <div class="title3">
        <p>Yunnan "eat · live · line" ranking</p>
        <span>云南“吃·住·行·玩”排行榜</span>
      </div>
      <div class="paihang">
        <ul id="cardArea" class="card-area clearfix">
          <li class="card-item active">
            <div class="card">
              <div class="card-title title-even">
                <div class="content">
                  <div class="zq-product-img">
                    <i class="iconfont icon-wucan"></i>
                  </div>
                  <h1>当地美食推荐</h1>
                  <p class="short-info">寻找最具特色的美味</p>
                </div>
              </div>
              <div class="card-content content-first bg-e">
                <ul>
                  <li>
                    <h1><img src="img/food01.jpg"/></h1>
                    <h2>美食名称</h2>
                    <p>云南美食之过桥米线云南特色美食当然首推是过桥米线了，过桥米线是云南特色的风味小吃。现如今，过桥米线已经在大江南北开了连锁店。 过桥米线的主要原料就是汤、 肉片、米线以及其他作料。这汤是用肥鸡、
                    </p>
                    <h3>Top1</h3>
                    <span><i class="iconfont icon-kanguos"></i>1242&nbsp;&nbsp;&nbsp;&nbsp;<i class="iconfont icon-comments"></i>1242</span>
                  </li>
                </ul>
              </div>
              <div class="card-content content-second">
                <ul>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="card-item">
            <div class="card">
              <div class="card-title title-even">
                <div class="content">
                  <div class="zq-product-img">
                    <i class="iconfont icon-zhusu"></i>
                  </div>
                  <h1>精品酒店</h1>
                  <p class="short-info">客户满意度最好的酒店推荐</p>
                </div>
              </div>
              <div class="card-content content-first" style="background: f9f9f9;">
                <ul>
                  <li>
                    <h1><img src="img/food02. jpg"/></h1>
                    <h2>美食名称</h2>
                    <p>云南美食之过桥米线云南特色美食当然首推是过桥米线了，过桥米线是云南特色的风味小吃。现如今，过桥米线已经在大江南北开了连锁店。 过桥米线的主要原料就是汤、 肉片、米线以及其他作料。这汤是用肥鸡、
                    </p>
                    <h3>Top1</h3>
                    <span><i class="iconfont icon-kanguos"></i>1242&nbsp;&nbsp;&nbsp;&nbsp;<i class="iconfont icon-comments"></i>1242</span>
                  </li>
                </ul>
              </div>
              <div class="card-content content-second">
                <ul>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="card-item">
            <div class="card">
              <div class="card-title title-even">
                <div class="content">
                  <div class="zq-product-img">
                    <i class="iconfont icon-yule"></i>
                  </div>
                  <h1>娱乐推荐</h1>
                  <p class="short-info">这里有云南最好玩的地方</p>

                </div>
              </div>
              <div class="card-content content-first bg-e">
                <ul>
                  <li>
                    <h1><img src="img/food03.jpg"/></h1>
                    <h2>美食名称</h2>
                    <p>云南美食之过桥米线云南特色美食当然首推是过桥米线了，过桥米线是云南特色的风味小吃。现如今，过桥米线已经在大江南北开了连锁店。 过桥米线的主要原料就是汤、 肉片、米线以及其他作料。这汤是用肥鸡、
                    </p>
                    <h3>Top1</h3>
                    <span><i class="iconfont icon-kanguos"></i>1242&nbsp;&nbsp;&nbsp;&nbsp;<i class="iconfont icon-comments"></i>1242</span>
                  </li>
                </ul>
              </div>
              <div class="card-content content-second">
                <ul>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="card-item">
            <div class="card">
              <div class="card-title title-even">
                <div class="content">
                  <div class="zq-product-img">
                    <i class="iconfont icon-shizhong"></i>
                  </div>
                  <h1>精品线路</h1>
                  <p class="short-info">不绕路，最简单的行程</p>
                </div>
              </div>
              <div class="card-content content-first" style="background: f9f9f9;">
                <ul>
                  <li>
                    <h1><img src="img/food02.jpg"/></h1>
                    <h2>美食名称</h2>
                    <p>云南美食之过桥米线云南特色美食当然首推是过桥米线了，过桥米线是云南特色的风味小吃。现如今，过桥米线已经在大江南北开了连锁店。 过桥米线的主要原料就是汤、 肉片、米线以及其他作料。这汤是用肥鸡、
                    </p>
                    <h3>Top1</h3>
                    <span><i class="iconfont icon-kanguos"></i>1242&nbsp;&nbsp;&nbsp;&nbsp;<i class="iconfont icon-comments"></i>1242</span>
                  </li>
                </ul>
              </div>
              <div class="card-content content-second">
                <ul>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food03.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top1</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food02.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top2</h3>
                  </li>
                  <li>
                    <a href="#">
                      <h1><img src="img/food01.jpg"/></h1>
                      <h2>美食名称</h2>
                    </a>
                    <h3>Top3</h3>
                  </li>
                </ul>
              </div>
            </div>
          </li>

        </ul>
        <script type="text/javascript">
          $(function() {
            $("#cardArea").cardArea()
          });
        </script>
      </div>
    </div>
    <!--云南·攻略排行榜 end-->
    <!--景区-->
    <div class="container">
      <div class="boxleft">
        <!--hotcity-->
        <div class="title3">
          <p>Yunnan popular area</p>
          <span>云南·热门景区</span>
        </div>
        <div class="hotcity">
          <ul>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya.png"/></h1>
                <h2>
                <p>三亚</p>
                <span>丽江·LI JIANG</span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya2.jpg"/></h1>
                <h2>
                <p>大理</p>
                  <span>大理·DA LI</span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya3.jpg"/></h1>
                <h2>
                <p>呼和浩特</p>
                  <span>内蒙古·NEI MENG GU </span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya4.jpg"/></h1>
                <h2>
                <p>三亚</p>
                <span>海南·HAI NAN</span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya5.jpg"/></h1>
                <h2>
                <p>大理</p>
                  <span>云南·YUN NAN</span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya6.jpg"/></h1>
                <h2>
                <p>呼和浩特</p>
                  <span>内蒙古·NEI MENG GU </span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya7.jpg"/></h1>
                <h2>
                <p>大理</p>
                  <span>云南·YUN NAN</span>
              </h2>
              </a>
            </li>
            <li>
              <a href="scenic_detail.html">
                <h1><img src="img/sanya2.jpg"/></h1>
                <h2>
                <p>呼和浩特</p>
                  <span>内蒙古·NEI MENG GU </span>
              </h2>
              </a>
            </li>
          </ul>
        </div>
        <!--hotcity end-->
      </div>
      <div class="boxright">
        <div class="ggr">
          <a href="#"><img src="img/yngg.jpg" /></a>
        </div>
      </div>
    </div>
    <!--景区-->

    <!--主题-->
    <div class="zhuti">
      <div class="container">
        <div class="title3">
          <p>LaJiaoBoutique theme tour</p>
          <span>辣郊精品主题游</span>
        </div>
        <div class="ztbox">
          <div class="zhuti_a">
            <h1><a href="#"><img src="img/zt_a.jpg"/></a></h1>
            <h2>            
                <b></b>
                <p>亲子游</p>
                <sapn>Family travel</sapn>              
            </h2>
          </div>
          <div class="zhuti_b">
            <div style="overflow: hidden;float: left;width: 50%;">
              <div class="zhuztifang">
                <h1><a href="#"><img src="img/zt_f01.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3>Family travel</h3>
              </div>
              <div class="zhuztifang">
                <h1><a href="#"><img src="img/zt_f02.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3>Family travel</h3>
              </div>
            </div>
            <div style="overflow: hidden;float: left;width: 50%;">
              <div class="zhuztigao">
                <h1><a href="#"><img src="img/zt_g02.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3 style="top:50%">Family travel</h3>
              </div>
            </div>
          </div>
          <div class="zhuti_c">
            <div style="overflow: hidden;">
              <div class="zhuztikuan">
                <h1><a href="#"><img src="img/zt_k01.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3>Family travel</h3>
              </div>
            </div>
            <div style="overflow: hidden;">
              <div class="zhuztifang">
                <h1><a href="#"><img src="img/zt_f02.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3>Family travel</h3>
              </div>
              <div class="zhuztifang">
                <h1><a href="#"><img src="img/zt_f01.jpg"/></a></h1>
                <h2>七日亲子游</h2>
                <h3>Family travel</h3>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--主题 end-->
    <!--定制-->
    <div class="dingzhi">
      <div class="container">
        <div class="title3">
          <p style="color: #fff;">Yunnan popular area</p>
          <span style="color: #fff;">定制旅行</span>
        </div>
        <div style="font-size: 16px;color: #fff;text-align: center;">我是你的<span style="font-size: 20px;">“专属”</span>旅行策划师</div>
        <div class="dzbox">
          <script>
            $(document).ready(function() {
              $(".dingzhi .dzbox ul li .dzcon").hover(function() {
                $(this).find(".dzcon1").slideDown();
                $(this).find(".dzcon2").slideDown();
              }, function() {
                $(this).find(".dzcon1").slideUp();
                $(this).find(".dzcon2").slideUp();
              });
            });
          </script>
          <ul>
            <li>
              <div class="dzcon">
                <img src="img/dz_01.jpg" />
                <h1>和朋友</h1>
                <h2 class="dzcon1"></h2>
                <h3 class="dzcon2">
                  <a href="#">
                    去定制<br/>
                  <span>To customize</span>
                  </a>                  
                </h3>
              </div>
            </li>
            <li>
              <div class="dzcon">
                <a href="#"><img src="img/dz_02.jpg" /></a>
                <h1>带宝贝</h1>
                <h2 class="dzcon1"></h2>
                <h3 class="dzcon2">
                  <a href="#">
                    去定制<br/>
                  <span>To customize</span>
                  </a>                  
                </h3>
              </div>
            </li>
            <li>
              <div class="dzcon">
                <a href="#"><img src="img/dz_03.jpg" /></a>
                <h1>携爱人</h1>
                <h2 class="dzcon1"></h2>
                <h3 class="dzcon2">
                  <a href="#">
                    去定制<br/>
                  <span>To customize</span>
                  </a>                  
                </h3>
              </div>
            </li>
            <li>
              <div class="dzcon">
                <a href="#"><img src="img/dz_04.jpg" /></a>
                <h1>陪爸妈</h1>
                <h2 class="dzcon1"></h2>
                <h3 class="dzcon2">
                  <a href="#">
                    去定制<br/>
                  <span>To customize</span>
                  </a>                  
                </h3>
              </div>
            </li>
            <li>
              <div class="dzcon">
                <a href="#"><img src="img/dz_05.jpg" /></a>
                <h1>和同事</h1>
                <h2 class="dzcon1"></h2>
                <h3 class="dzcon2">
                  <a href="#">
                    去定制<br/>
                  <span>To customize</span>
                  </a>                  
                </h3>
              </div>
            </li>
          </ul>
        </div>
        <div style="font-size: 20px;color: #fff;text-align: center;margin-top: 40px;">定制案例 / CASE</div>
        <div style="text-align: center;color: #fff;">看看他们的真实评价</div>
        <div class="dzal">
          <ul>
            <li>
              <div class="dzalboxbg"></div>
              <div class="dzalbox">
                <h1><a href="#"><img src="img/dz_03.jpg"/></a></h1>
                <h2>
                    <b>「 海南·三亚 」15日风情之旅</b>
                    <span>蒋女士 | 2017年08月</span>
                    <p><i>"</i>这次旅行印象最深刻的是跳伞看风景、开漂移等等。本来酒店原计划四星级，最后酒店免费升级了五星级正宗海景房，飞机也是经济舱升级了商务舱，挺惊喜挺高兴的，下次打算去普吉岛，或者巴厘岛深潜</p>
                  </h2>
              </div>
            </li>
            <li>
              <div class="dzalboxbg"></div>
              <div class="dzalbox">
                <h1><a href="#"><img src="img/dz_03.jpg"/></a></h1>
                <h2>
                    <b>「 海南·三亚 」15日风情之旅</b>
                    <span>蒋女士 | 2017年08月</span>
                    <p><i>"</i>这次旅行印象最深刻的是跳伞看风景、开漂移等等。本来酒店原计划四星级，最后酒店免费升级了五星级正宗海景房，飞机也是经济舱升级了商务舱，挺惊喜挺高兴的，下次打算去普吉岛，或者巴厘岛深潜</p>
                  </h2>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--定制 end-->
    <!--云南游记-->
    <div style="background: #f9f9f9; overflow: hidden;">
      <div class="container">
        <div class="title3">
          <p>Yunnan popular area</p>
          <span>云南·热门游记</span>
        </div>
        <div class="youji">
          <div class="youjiimg">
            <div class="section-focus-pic" id="section-focus-pic">
              <div class="pages" data-scro="list">
                <ul>
                  <li class="item" style="left:0px;">
                    <a href="#" target="_blank"><img src="img/1.jpg"></a>
                    <h3><a href="#" target="_blank" style="color:#FFF;text-decoration:none;">一生的守候，换来的是终身的幸福</a></h3>
                    <div></div>
                  </li>
                  <li class="item">
                    <a href="#" target="_blank"><img src="img/2.jpg" width="570" height="300"></a>
                    <h3><a href="#" target="_blank" style="color: #FFF; text-decoration:none;">我在云南等你，愿意来我就嫁给你</a></h3>
                    <div></div>
                  </li>
                  <li class="item">
                    <a href="#" target="_blank"><img src="img/3.jpg" width="570" height="300"></a>
                    <h3><a href="#" target="_blank" style="color: #FFF; text-decoration:none;">一条路走出来人生百态</a></h3>
                    <div></div>
                  </li>
                </ul>
              </div>
              <div class="controler" data-scro="controler">
                <b class="down">1</b>
                <b>2</b>
                <b>3</b>
              </div>
              <div class="controler2" data-scro="controler2">
                <a href="javascript:;" class="prev"><i></i></a>
                <a href="javascript:;" class="next"><i></i></a>
              </div>
            </div>
          </div>
          <div class="youjitxt" style="float: left; margin-left: 30px;">
            <div class="yjtop">
              <h1><a href="#"><i class="iconfont icon-shizhong"></i>丽江这么美，我随便去看看</a></h1>
              <p>在上世纪八十年代,很多老柯桥人主要出行方式就是坐船。当时,柯桥进出绍兴城区有东南西北等四线,大家都是搭乘经西郭门往南的西线。在2003年之后,水上客运体系基本退出历史舞台。 不过在一年前,柯桥“水上巴士”又开通了,水上巴士不仅能观光旅游,还能在早晚高峰作为交通工具!来柯桥旅游的话,非常值得体验一下,供客人观光的水上巴士,船舱里面还备有小吃和茶水,乘船去到下一个目的地非常惬意。
              </p>
              <span>2017-12-13</span>
            </div>
            <ul>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
            </ul>

          </div>
          <div class="youjitxt">
            <div class="yjtop">
              <h1><a href="#"><i class="iconfont icon-shizhong"></i>丽江这么美，我随便去看看</a></h1>
              <p>在上世纪八十年代,很多老柯桥人主要出行方式就是坐船。当时,柯桥进出绍兴城区有东南西北等四线,大家都是搭乘经西郭门往南的西线。在2003年之后,水上客运体系基本退出历史舞台。 不过在一年前,柯桥“水上巴士”又开通了,水上巴士不仅能观光旅游,还能在早晚高峰作为交通工具!来柯桥旅游的话,非常值得体验一下,供客人观光的水上巴士,船舱里面还备有小吃和茶水,乘船去到下一个目的地非常惬意。
              </p>
              <span>2017-12-13</span>
            </div>
            <ul>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
              <li>
                <a href="#"><i class="iconfont icon-add"></i>当时,柯桥进出绍兴城区有东南西北等四线</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--云南游记-->
 <!--预定提交-->
    <div class="ydbg">
      <div class="container">
        <div class="ydtxt">
          <br><br><br>
          <h1>让旅行变得如此简单！</h1><br><br><br><br><br>
          <h1>人生就是一次充满未知的旅行!</h1>
          
        </div>
        <div class="mzcxbtn">
          
        </div>
      </div>
    </div>
    <!--预定提交 end-->
@endsection