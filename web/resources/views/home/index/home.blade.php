@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<div class="wrap">
    <div class="main">
        <div class="left1">
            <div class="boxa1">
                <h1>4399简介</h1>
                <ul>
                    <style type="text/css">.r1 p{text-indent: 24px;}</style>
                    <div class="l1">
                        <ul>
                            <li>
                                <img src="/home/picture/people1.jpg">
                            </li>
                            <li style="height:101px ">
                                <img src="/home/picture/people2.jpg">
                            </li>
                        </ul>
                    </div>
                    <div class="r1">
                        <p>4399是中国领先的互联网休闲娱乐平台及游戏的发行商、研发商、运营商。</p>
                        <p>公司主营业务集中在在线平台、游戏发行和游戏开发三大板块。目前包括互联网页面游戏、移动终端游戏、在线网站平台和移动终端平台的研发及运营等内容。</p>
                        <p>基于公司技术、品牌及用户优势，公司致力于将旗下各游戏、平台打造成为统一的以休闲娱乐互动内容为核心的多终端垂直型交互社区。</p>
                    </div>
                </ul>
            </div>
            <div class="boxa1" style="height:188px;_height:190px">
                <h1>4399企业文化</h1>
                <ul>
                    <img src="/home/picture/wenhua.jpg">
                </ul>
            </div>
        </div>
        <div class="right1">
            <!-- common right -->
            <div class="boxb1">
                <h1>
                    <span>
                        <a href="more.html">更多>></a>
                    </span>公司动态
                </h1>
                <ul>
                    <li>
                        <span>
                            <img src="/home/picture/xun1.jpg" width="35" height="44">
                        </span>2014年度国家火炬计划软件产业基地骨干企业
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun2.jpg" width="35" height="44">
                        </span>2014年中国互联网企业100强(第43名)
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun3.jpg" width="35" height="44">
                        </span>2013-2014年度国家规划布局内重点软件企业 
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun4.jpg" width="35" height="44">
                        </span>2013-2014年度国家文化出口重点企业
                    </li>
                </ul>
            </div>
            <div class="boxb2">
                <h1>旗下网站</h1>
                <Table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
                    <tr>
                        <td>4399游戏</td>
                        <td>
                            <a href="http://www.4399.com/" target="_blank">http://www.4399.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4399游戏吧</td>
                        <td>
                            <a href="http://my.4399.com/" target="_blank">http://my.4399.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4399网页游戏</td>
                        <td>
                            <a href="http://web.4399.com/" target="_blank">http://web.4399.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4399资讯</td>
                        <td>
                            <a href="http://news.4399.com/" target="_blank">http://news.4399.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4399手机游戏</td>
                        <td>
                            <a href="http://www.4399.cn/" target="_blank">http://www.4399.cn</a>
                        </td>
                    </tr>
                </Table>
            </div>
            <!-- /common right -->
        </div><!--right1 end-->
    </div><!--main end-->
</div><!--wrap end-->
<script type="text/javascript" src="/home/js/footer.js"></script><!--footer end-->
<link href="/home/css/company.css" type="text/css" rel="stylesheet">
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

@endsection