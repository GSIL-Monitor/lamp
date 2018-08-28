@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

    <!--列表头部-->
    <div class="carbg">
      <div class="container">
        <div class="title2">
          <h1><i class="iconfont icon-jingdian"></i>{{ $data['address'] }}</h1>
          
        </div>
        <h3>{{ $data['title'] }}</h3>
      </div>
    </div>
    <!--列表头部 end-->
    <div class="container mt10">
      <div class="boxleft">
        <div class="scenic_banner">
          <div class="container-fluid text-center">
            <div class="headerbanner">
              <img class="headerImg" src="{{ $data['picture'] }}" title="{{ $data['title'] }}">
            </div>
          </div>
          <script src="js/plugin.js"></script>
          <script src="js/lrtk.js"></script>
          <script>
            $(".slide").click(function() {
              var index = $(this).attr('index');
              if(index === undefined) {
                window.open(links[0]);
              } else {
                window.open(links[(parseInt(index) + 1)]);
              }
            });
          </script>
        </div>
        <!--描述-->
        <div class="maioshu">
          <h1>城市详情</h1>
          <h2>{!! $data['content'] !!}</h2>
        </div>
        <!--描述 end-->
        <div class="bank20"></div>

        <!--酒店-->
        <div class="bank20"></div>
        
       
        <div class="bank20"></div>

        <script>
          var mySwiper = new Swiper('#scenic_banner', {
            autoplay: 3000, //可选选项，自动滑动
            loop: true, //可选选项，开启循环
            effect: 'fade',
          })
        </script>
      </div>

      <div class="boxright">
        
        <!--cxlist-->
        
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
                <h2><b>4</b>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
                <p><span>跟团游</span>满意度99%</p>
                </h2>
              </a>
            </li>
          </ul>
        </div>
        <!--cxlist end-->

       
        <!--innews-->
        <div class="title">最新消息
          <a href="#">更多&nbsp;></a>
        </div>
        <div class="innews">
          <h1>
            <a href="#"><img src="/home/img/sanya.png"/>
            <p></p>
            <span>01&nbsp;冬季出行必备十大条件</span>
            </a>
          </h1>
          <ul>
            <li><span>2017-07-15</span>
              <a href="#">邂逅洱海，玉龙雪山大索</a>
            </li>
            <li><span>2017-07-15</span>
              <a href="#">实景表演印象丽江</a>
            </li>
            <li><span>2017-07-15</span>
              <a href="#">崇圣寺三塔，手工扎染</a>
            </li>
            <li><span>2017-07-15</span>
              <a href="#">车1导0购物邂逅洱海</a>
            </li>
            <li><span>2017-07-15</span>
              <a href="#">邂逅洱海，玉龙雪山大索</a>
            </li>
            <li><span>2017-07-15</span>
              <a href="#">车1导0购物邂逅洱海</a>
            </li>
          </ul>
        </div>
        <!--innews end-->


      </div>
    </div>
    <div class="container">

    </div>
    <div class="bank30"></div>

    
@endsection