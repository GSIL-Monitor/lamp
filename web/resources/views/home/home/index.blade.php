@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<div class="wrap">
    <div class="main">
        <div class="left1">
            <div class="boxa1">
                <h1>SevenCity简介</h1>
                <ul>
                    <style type="text/css">.r1 p{text-indent: 24px;}</style>
                    <div class="l1">
                        <ul>
                            <li>
                                <img style="width: 145px;height: 97px;" src="/home/picture/u=2151113357,3094180912&fm=26&gp=0.jpg">
                            </li>
                            <li style="height:101px ">
                                <img style="width: 145px;height: 97px;" src="/home/picture/u=2493289572,311187554&fm=27&gp=0.jpg">
                            </li>
                        </ul>
                    </div>
                    <div class="r1">
                        <p>旅游攻略——中国各大旅游城市、各景区详细介绍，让你明确知道怎么玩、玩什么。</p>
                        <p>热点专题——第一旅游网围绕“吃住行游购娱”策划具有参考价值的实用性专题，做你的旅游生活顾问。</p>
                        <p>旅游视觉——每一次的点击，都是一种视觉的震撼与冲击，在这里你能看到全球各地有趣的人、好玩的事、绝美的景。</p>
                        <p>旅游论坛——中国最好用的旅游论坛，数百万的旅游消费者和旅游爱好者将可在此发布评论，分享自己的旅游经历。查看最新的旅游攻略、旅游建议，欣赏网友上传的旅游美图。</p>
                    </div>
                </ul>
            </div>
            <div class="boxa1" style="height:188px;_height:190px">
                <h1>SevenCity精神</h1>
                <ul>
                    <img style="height:130px;width: 656px; " src="/home/picture/u=3096818844,2900578572&fm=27&gp=0.jpg">
                </ul>
            </div>
        </div>
        <div class="right1">
            <!-- common right -->
            <div class="boxb1">
                <h1>
                    公司动态
                </h1>
                <ul>
                    <li>
                        <span>
                            <img src="/home/picture/xun1.jpg" width="35" height="44">
                        </span>2018“寻迹百年中东铁路”自驾活动今日正式发车
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun2.jpg" width="35" height="44">
                        </span>在黑龙江林间邂逅梅花鹿，醉美湿地观鹤舞
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun3.jpg" width="35" height="44">
                        </span>燃情七夕 美景相伴-2018十大最美旅游情侣活动 
                    </li>
                    <li>
                        <span>
                            <img src="/home/picture/xun4.jpg" width="35" height="44">
                        </span>探寻丝绸之路上壮丽的色彩——平山湖大峡谷
                    </li>
                </ul>
            </div>
            <div class="boxb2">
                <h1>旗下网站</h1>
                <Table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
                    <tr>
                        <td>各地美食</td>
                        <td>
                            <a href="/home/food" target="_blank">http://www.web.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>热门景点</td>
                        <td>
                            <a href="/home/scenery" target="_blank">http://www.web.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>娱乐推荐</td>
                        <td>
                            <a href="/home/play" target="_blank">http://www.web.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>城市攻略</td>
                        <td>
                            <a href="/home/strategy" target="_blank">http://www.web.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>精品酒店</td>
                        <td>
                            <a href="/home/hotel" target="_blank">http://www.web.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td>旅行论坛</td>
                        <td>
                            <a href="#" target="_blank">http://www.web.com</a>
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
            <br>
            <br>
            <br>
            <h1>让旅行变得如此简单！</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>人生就是一次充满未知的旅行!</h1>
            <br>
        </div>
        <div class="mzcxbtn">
          
        </div>
    </div>
</div>

@endsection