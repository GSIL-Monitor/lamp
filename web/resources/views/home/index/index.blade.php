@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

 <!--轮播图-->
  <div id="slider-container">
  <div id="slider" class="nivoSlider">

    @foreach ($slid as $k=>$v)
    <img title="#htmlcaption1" alt="" src="{{ $v -> profile }}">
    @endforeach
    <!-- <img title="#htmlcaption1" alt="" src="home/images/slider1.jpg">
    <img title="#htmlcaption2" alt="" src="home/images/slider2.jpg">
    <img title="#htmlcaption3" alt="" src="home/images/slider3.jpg">
    <img title="#htmlcaption4" alt="" src="home/images/slider4.jpg">
    <img title="#htmlcaption4" alt="" src="home/images/slider5.jpg"> -->
  </div><!-- #slider -->
  
  <div id="htmlcaption1" class="nivo-html-caption">
    <span class="sdate">December 01, 2011</span>
    <h1>Let´s create your company growth faster...</h1>
    <hr>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sapien lorem, placerat ac imperdiet a, volutpat et risus. </p>
  </div>
  
  <div id="htmlcaption2" class="nivo-html-caption">
    <span class="sdate">December 05, 2011</span>
    <h1>We can help to solve your company problem...</h1>
    <hr>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sapien lorem, placerat ac imperdiet a, volutpat et risus. </p>
  </div>
  
  <div id="htmlcaption3" class="nivo-html-caption">
    <span class="sdate">December 07, 2011</span>
    <h1>We always smile to help you...</h1>
    <hr>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sapien lorem, placerat ac imperdiet a, volutpat et risus. </p>
  </div>
  
  <div id="htmlcaption4" class="nivo-html-caption">
    <span class="sdate">December 07, 2011</span>
    <h1>Discover the places you´ve never been before...</h1>
    <hr>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sapien lorem, placerat ac imperdiet a, volutpat et risus. </p>
  </div>
  
</div>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
    <!--轮播图 end-->



    <!--特卖推荐-->
    >
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
                      <h1><img src="img/food01.jpg"/></h1>
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
    
    <!--主题 end-->
    <!--定制-->
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
   
    <!--预定提交 end-->
   
@endsection