@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')    
    <link charset="utf-8" type="text/css" rel="stylesheet" href="/home/strategy/css/common.v2.0.css" />
    <link charset="utf-8" type="text/css" rel="stylesheet" href="/home/strategy/css/fed.v2.0.css" />
    <link charset="utf-8" type="text/css" rel="stylesheet" href="/home/strategy/css/old_index.v2.0.css" />
    <link href="/home/strategy/css/pageheader_v2.css" rel="stylesheet" />
    <!--演示内容开始-->
    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
        /* marqueeleft */
        .marqueeleft{height:275px;width:100%;overflow:hidden;margin:40px auto;}
        .marqueeleft ul{float:left;}
        .marqueeleft li{float:left;margin:0 5px;display:inline;width:235px;height:245px;overflow:hidden;}
        .marqueeleft li .pic{display:block;border:#ccc 1px solid;width:275px;height:245px;padding:2px;overflow:hidden;}
        .marqueeleft li .txt{text-align:center;height:23px;line-height:23px;}
    </style>

<div class="desmap mod">
    <div class="content">
        <div class="side">
            <h1 class="nostyle hd">旅行目的地</h1>
                <div class="bd">
                    <div class="goto mgb20">
                        <div class="goto-items" id="journals-panel-items">
                            <dl class="item itempl-60">
                                  <dt class="panel-tab brt"><i class="des-djtj"></i>当季推荐<s></s></dt>
                                  <dd class="panel-con">
                                      <ul>
                                          <li>
                                              <strong>童话世界</strong>
                                                  <a href="javascript:;">喀纳斯</a>
                                                  <a href="javascript:;">丹麦</a>
                                                  <a href="javascript:;">瑞士</a>
                                                  <a href="javascript:;">希腊</a>
                                                  <a href="javascript:;">哥本哈根</a>
                                                  <a href="javascript:;">慕尼黑</a>
                                                  <a href="javascript:;">九份</a>
                                                  <a href="javascript:;">奥地利</a>
                                                  <a href="javascript:;">德国</a>
                                                  <a href="javascript:;">布达佩斯</a>
                                                  <a href="javascript:;">西班牙</a>
                                          </li>
                                          <li>
                                              <strong>水乡古镇</strong>
                                                  <a href="javascript:;">周庄</a>
                                                  <a href="javascript:;">西塘</a>
                                                  <a href="javascript:;">乌镇</a>
                                                  <a href="javascript:;">同里</a>
                                                  <a href="javascript:;">甪直</a>
                                                  <a href="javascript:;">南浔</a>
                                                  <a href="javascript:;">朱家角</a>
                                                  <a href="javascript:;">苏州</a>
                                                  <a href="javascript:;">绍兴</a>
                                          </li>
                                          <li>
                                              <strong>登山望远</strong>
                                                  <a href="javascript:;">庐山</a>
                                                  <a href="javascript:;">新疆</a>
                                                  <a href="javascript:;">泰山</a>
                                                  <a href="javascript:;">因特拉肯</a>
                                                  <a href="javascript:;">华山</a>
                                                  <a href="javascript:;">稻城</a>
                                                  <a href="javascript:;">长白山</a>
                                                  <a href="javascript:;">云台山</a>
                                                  <a href="javascript:;">黄山</a>
                                                  <a href="javascript:;">峨眉山</a>
                                                  <a href="javascript:;">珠穆朗玛</a>
                                                  <a href="javascript:;">武夷山</a>
                                          </li>
                                          <li>
                                              <strong>热带雨林</strong>
                                                  <a href="javascript:;">山打根</a>
                                                  <a href="javascript:;">凯恩斯</a>
                                                  <a href="javascript:;">波多黎各</a>
                                                  <a href="javascript:;">古晋</a>
                                                  <a href="javascript:;">西双版纳</a>
                                                  <a href="javascript:;">斗湖</a>
                                                  <a href="javascript:;">暹粒</a>
                                                  <a href="javascript:;">智利</a>
                                                  <a href="javascript:;">三亚</a>
                                                  <a href="javascript:;">秘鲁</a>
                                          </li>
                                      </ul>
                                  </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-gn"></i>国内<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                          <li>
                                              <strong>西南</strong>
                                                  <a href="javascript:;">丽江</a>
                                                  <a href="javascript:;">成都</a>
                                                  <a href="javascript:;">拉萨</a>
                                                  <a href="javascript:;">九寨沟</a>
                                                  <a href="javascript:;">重庆</a>
                                                  <a href="javascript:;">黔东南</a>
                                                  <a href="javascript:;">香格里拉</a>
                                                  <a href="javascript:;">稻城</a>
                                                  <a href="javascript:;">林芝</a>
                                                  <a href="javascript:;">日喀则</a>
                                                  <a href="javascript:;">大理</a>
                                                  <a href="javascript:;">西双版纳</a>
                                          </li>
                                          <li>
                                              <strong>西北</strong>
                                                  <a href="javascript:;">西安</a>
                                                  <a href="javascript:;">青海湖</a>
                                                  <a href="javascript:;">敦煌</a>
                                                  <a href="javascript:;">甘南</a>
                                                  <a href="javascript:;">喀纳斯</a>
                                                  <a href="javascript:;">伊犁</a>
                                                  <a href="javascript:;">银川</a>
                                                  <a href="javascript:;">乌鲁木齐</a>
                                                  <a href="javascript:;">兰州</a>
                                                  <a href="javascript:;">延安</a>
                                                  <a href="javascript:;">华山</a>
                                                  <a href="javascript:;">西宁</a>
                                                  <a href="javascript:;">喀什</a>
                                          </li>
                                          <li>
                                              <strong>华北</strong>
                                                  <a href="javascript:;">北京</a>
                                                  <a href="javascript:;">平遥</a>
                                                  <a href="javascript:;">天津</a>
                                                  <a href="javascript:;">秦皇岛</a>
                                                  <a href="javascript:;">承德</a>
                                                  <a href="javascript:;">坝上</a>
                                                  <a href="javascript:;">五台山</a>
                                                  <a href="javascript:;">大同</a>
                                                  <a href="javascript:;">太原</a>
                                                  <a href="javascript:;">保定</a>
                                                  <a href="javascript:;">张家口</a>
                                                  <a href="javascript:;">晋中</a>
                                                  <a href="javascript:;">石家庄</a>
                                          </li>
                                          <li>
                                              <strong>华东</strong>
                                                  <a href="javascript:;">厦门</a>
                                                  <a href="javascript:;">杭州</a>
                                                  <a href="javascript:;">上海</a>
                                                  <a href="javascript:;">西塘</a>
                                                  <a href="javascript:;">苏州</a>
                                                  <a href="javascript:;">青岛</a>
                                                  <a href="javascript:;">南京</a>
                                                  <a href="javascript:;">无锡</a>
                                                  <a href="javascript:;">宁波</a>
                                                  <a href="javascript:;">绍兴</a>
                                                  <a href="javascript:;">黄山</a>
                                                  <a href="javascript:;">威海</a>
                                                  <a href="javascript:;">泰山</a>
                                                  <a href="javascript:;">长兴</a>
                                          </li>
                                          <li>
                                              <strong>华南</strong>
                                                  <a href="javascript:;">三亚</a>
                                                  <a href="javascript:;">桂林</a>
                                                  <a href="javascript:;">广州</a>
                                                  <a href="javascript:;">深圳</a>
                                                  <a href="javascript:;">珠海</a>
                                                  <a href="javascript:;">北海</a>
                                                  <a href="javascript:;">阳朔</a>
                                                  <a href="javascript:;">南宁</a>
                                                  <a href="javascript:;">海口</a>
                                                  <a href="javascript:;">肇庆</a>
                                                  <a href="javascript:;">中山</a>
                                                  <a href="javascript:;">佛山</a>
                                                  <a href="javascript:;">惠州</a>
                                          </li>
                                          <li>
                                              <strong>华中</strong>
                                                  <a href="javascript:;">张家界</a>
                                                  <a href="javascript:;">凤凰</a>
                                                  <a href="javascript:;">武汉</a>
                                                  <a href="javascript:;">长江三峡</a>
                                                  <a href="javascript:;">洛阳</a>
                                                  <a href="javascript:;">长沙</a>
                                                  <a href="javascript:;">武当山</a>
                                                  <a href="javascript:;">宜昌</a>
                                                  <a href="javascript:;">神农架</a>
                                                  <a href="javascript:;">嵩山</a>
                                                  <a href="javascript:;">衡山</a>
                                                  <a href="javascript:;">郑州</a>
                                                  <a href="javascript:;">云台山</a>
                                          </li>
                                          <li>
                                              <strong>东北</strong>
                                                  <a href="javascript:;">哈尔滨</a>
                                                  <a href="javascript:;">长白山</a>
                                                  <a href="javascript:;">大连</a>
                                                  <a href="javascript:;">沈阳</a>
                                                  <a href="javascript:;">牡丹江</a>
                                                  <a href="javascript:;">漠河</a>
                                                  <a href="javascript:;">呼伦贝尔</a>
                                                  <a href="javascript:;">长春</a>
                                                  <a href="javascript:;">丹东</a>
                                                  <a href="javascript:;">盘锦</a>
                                                  <a href="javascript:;">赤峰</a>
                                                  <a href="javascript:;">延边</a>
                                                  <a href="javascript:;">黑河</a>
                                          </li>
                                          <li>
                                              <strong>港澳台</strong>
                                                  <a href="javascript:;">香港</a>
                                                  <a href="javascript:;">澳门</a>
                                                  <a href="javascript:;">台湾</a>
                                          </li>
                                    </ul>
                                </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-yz"></i>亚洲<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                          <li>
                                              <strong>东南亚</strong>
                                                  <a href="javascript:;">泰国</a>
                                                  <a href="javascript:;">马来西亚</a>
                                                  <a href="javascript:;">新加坡</a>
                                                  <a href="javascript:;">越南</a>
                                                  <a href="javascript:;">柬埔寨</a>
                                                  <a href="javascript:;">菲律宾</a>
                                                  <a href="javascript:;">印度尼西亚</a>
                                          </li>
                                          <li>
                                              <strong>南亚</strong>
                                                  <a href="javascript:;">马尔代夫</a>
                                                  <a href="javascript:;">尼泊尔</a>
                                                  <a href="javascript:;">印度</a>
                                                  <a href="javascript:;">斯里兰卡</a>
                                                  <a href="javascript:;">不丹</a>
                                          </li>
                                          <li>
                                              <strong>东北亚</strong>
                                                  <a href="javascript:;">日本</a>
                                                  <a href="javascript:;">韩国</a>
                                                  <a href="javascript:;">蒙古</a>
                                                  <a href="javascript:;">朝鲜</a>
                                          </li>
                                          <li>
                                              <strong>中西亚</strong>
                                                  <a href="javascript:;">阿联酋</a>
                                                  <a href="javascript:;">以色列</a>
                                                  <a href="javascript:;">伊朗</a>
                                                  <a href="javascript:;">约旦</a>
                                                  <a href="javascript:;">沙特阿拉伯</a>
                                          </li>
                                     </ul>
                                </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-oz"></i>欧洲<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                          <li>
                                              <strong>西欧</strong>
                                                  <a href="javascript:;">法国</a>
                                                  <a href="javascript:;">英国</a>
                                                  <a href="javascript:;">爱尔兰</a>
                                                  <a href="javascript:;">荷兰</a>
                                                  <a href="javascript:;">比利时</a>
                                                  <a href="javascript:;">卢森堡</a>
                                          </li>
                                          <li>
                                              <strong>南欧</strong>
                                                  <a href="javascript:;">意大利</a>
                                                  <a href="javascript:;">西班牙</a>
                                                  <a href="javascript:;">希腊</a>
                                                  <a href="javascript:;">葡萄牙</a>
                                                  <a href="javascript:;">梵蒂冈</a>
                                          </li>
                                          <li>
                                              <strong>中欧</strong>
                                                  <a href="javascript:;">德国</a>
                                                  <a href="javascript:;">奥地利</a>
                                                  <a href="javascript:;">捷克</a>
                                                  <a href="javascript:;">瑞士</a>
                                                  <a href="javascript:;">匈牙利</a>
                                                  <a href="javascript:;">波兰</a>
                                          </li>
                                          <li>
                                              <strong>北欧</strong>
                                                  <a href="javascript:;">丹麦</a>
                                                  <a href="javascript:;">挪威</a>
                                                  <a href="javascript:;">瑞典</a>
                                                  <a href="javascript:;">芬兰</a>
                                                  <a href="javascript:;">冰岛</a>
                                          </li>
                                          <li>
                                              <strong>东欧</strong>
                                                  <a href="javascript:;">俄罗斯</a>
                                                  <a href="javascript:;">土耳其</a>
                                                  <a href="javascript:;">乌克兰</a>
                                                  <a href="javascript:;">立陶宛</a>
                                                  <a href="javascript:;">白俄罗斯</a>
                                                  <a href="javascript:;">拉脱维亚</a>
                                          </li>
                                    </ul>
                                </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-bmz"></i>北美洲<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                          <li>
                                              <strong>美国</strong>
                                                  <a href="javascript:;">纽约</a>
                                                  <a href="javascript:;">洛杉矶</a>
                                                  <a href="javascript:;">旧金山</a>
                                                  <a href="javascript:;">夏威夷</a>
                                                  <a href="javascript:;">拉斯维加斯</a>
                                                  <a href="javascript:;">华盛顿</a>
                                          </li>
                                          <li>
                                              <strong>加拿大</strong>
                                                  <a href="javascript:;">温哥华</a>
                                                  <a href="javascript:;">多伦多</a>
                                                  <a href="javascript:;">蒙特利尔</a>
                                                  <a href="javascript:;">维多利亚</a>
                                                  <a href="javascript:;">班夫</a>
                                                  <a href="javascript:;">魁北克城</a>
                                          </li>
                                          <li>
                                              <strong>其他</strong>
                                                  <a href="javascript:;">古巴</a>
                                                  <a href="javascript:;">墨西哥</a>
                                                  <a href="javascript:;">哥斯达黎加</a>
                                                  <a href="javascript:;">巴哈马</a>
                                                  <a href="javascript:;">牙买加</a>
                                                  <a href="javascript:;">波多黎各</a>
                                          </li>
                                    </ul>
                                </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-dyz"></i>大洋洲<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                          <li>
                                              <strong>澳大利亚</strong>
                                                  <a href="javascript:;">悉尼</a>
                                                  <a href="javascript:;">墨尔本</a>
                                                  <a href="javascript:;">黄金海岸</a>
                                                  <a href="javascript:;">凯恩斯</a>
                                                  <a href="javascript:;">塔斯马尼亚</a>
                                                  <a href="javascript:;">布里斯班</a>
                                          </li>
                                          <li>
                                              <strong>新西兰</strong>
                                                  <a href="javascript:;">新西兰</a>
                                                  <a href="javascript:;">奥克兰</a>
                                                  <a href="javascript:;">皇后镇</a>
                                                  <a href="javascript:;">基督城</a>
                                                  <a href="javascript:;">惠灵顿</a>
                                                  <a href="javascript:;">但尼丁</a>
                                          </li>
                                          <li>
                                              <strong>其他</strong>
                                                  <a href="javascript:;">斐济</a>
                                                  <a href="javascript:;">帕劳</a>
                                                  <a href="javascript:;">大溪地</a>
                                                  <a href="javascript:;">塞班</a>
                                                  <a href="javascript:;">关岛</a>
                                          </li>
                                    </ul>
                                </dd>    
                            </dl>
                            <dl class="item itempl-60">
                                <dt class="panel-tab brt"><i class="des-other"></i>其他洲<s></s></dt>
                                <dd class="panel-con">
                                    <ul>
                                        <li>
                                            <strong>非洲</strong>
                                                <a href="javascript:;">埃及</a>
                                                <a href="javascript:;">肯尼亚</a>
                                                <a href="javascript:;">南非</a>
                                                <a href="javascript:;">摩洛哥</a>
                                                <a href="javascript:;">毛里求斯</a>
                                                <a href="javascript:;">塞舌尔</a>
                                                <a href="javascript:;">坦桑尼亚</a>
                                                <a href="javascript:;">马达加斯加</a>
                                        </li>
                                        <li>
                                            <strong>南美洲</strong>
                                                <a href="javascript:;">巴西</a>
                                                <a href="javascript:;">阿根廷</a>
                                                <a href="javascript:;">秘鲁</a>
                                                <a href="javascript:;">智利</a>
                                                <a href="javascript:;">玻利维亚</a>
                                                <a href="javascript:;">哥伦比亚</a>
                                                <a href="javascript:;">委内瑞拉</a>
                                                <a href="javascript:;">厄瓜多尔</a>
                                        </li>
                                        <li>
                                            <strong>南极洲</strong>
                                                <a href="javascript:;">南极</a>
                                        </li>
                                    </ul>
                                </dd>    
                            </dl>
                        </div>
                    </div>
                </div>
        </div>
        <div id="chinamap" class="svn-map-china">
        </div>
        <div class="des-nav ">
            <a href="javascript:;" id="btn-nav-world" class="btn-nav-world">国内游</a>
        </div>
    </div>
</div>



<div class="content cf xclist">
    <div class="normaltitle" style="width:100%;">
        <h1>七城口碑榜</h1><h1>十佳海岛游目的地</h1><h1>最佳人文景区</h1><h1>十大海外城市</h1><h1>十大度假游目的地</h1>
    </div>
      <div class="xclist_outer">
          <div class="xclist_inner">
              <div class="singlelist" style="width:100%;">
                  <div class="spiclist" style="width:100%">
                      <div id="marquee1" class="marqueeleft">
                          <div style="width:80000px;">
                            <ul id="marquee1_1">
                              @foreach ( $strategy as $k => $v )
                              <li>
                                <div class="spiclist">
                                    <a target="_blank" href="{{ $v->shttps }}" class="spic_1">
                                         <img width="275" height="245"src="{{ $v->spice }}">
                                         <span class="unmissable-desc">
                                            <span class="ititle">
                                               <b style="color: red">TOP{{ ++$k }}</b>&emsp;{{ $v->smdd }}&emsp;{{ $v->stitle }}<br>{!! $v->sbodys !!}
                                             </span>
                                         </span>
                                    </a>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                            <ul id="marquee1_2"></ul>
                          </div>
                      </div> 
                    </div>
              </div>
          </div>
      </div>
  </div>    
  
   <script charset="utf-8" type="text/javascript" src="/home/strategy/js/old_index.v2.0.js"></script>
    <link href="/home/strategy/tu/css/style.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript">
        //js无缝滚动代码
        function marquee(i, direction){
          var obj = document.getElementById("marquee" + i);
          var obj1 = document.getElementById("marquee" + i + "_1");
          var obj2 = document.getElementById("marquee" + i + "_2");
          if (direction == "up"){
            if (obj2.offsetTop - obj.scrollTop <= 0){
              obj.scrollTop -= (obj1.offsetHeight + 20);
            }else{
              var tmp = obj.scrollTop;
              obj.scrollTop++;
              if (obj.scrollTop == tmp){
                obj.scrollTop = 1;
              }
            }
          }else{
            if (obj2.offsetWidth - obj.scrollLeft <= 0){
              obj.scrollLeft -= obj1.offsetWidth;
            }else{
              obj.scrollLeft++;
            }
          }
        }

        function marqueeStart(i, direction){
          var obj = document.getElementById("marquee" + i);
          var obj1 = document.getElementById("marquee" + i + "_1");
          var obj2 = document.getElementById("marquee" + i + "_2");

          obj2.innerHTML = obj1.innerHTML;
          var marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);
          obj.onmouseover = function(){
            window.clearInterval(marqueeVar);
          }
          obj.onmouseout = function(){
            marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);
          }
        }
    </script>

    <script type="text/javascript">marqueeStart(1, "left");</script>

</div>   
@endsection