@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')





<link rel="stylesheet" href="/home/homeinfo/css/base_css_d4811e5c69b8e51f74324c600db93b1c.css">
<link rel="stylesheet" href="/home/homeinfo/css/11.css">

<script src="/home/listshouye/js/index_js_f8ba00c79ac9dad62e5635a945850a27.js"></script>


<style type="text/css">
    #iiii  img{
        cursor: pointer;
        transition: all 0.6s;
    }
    #iiii img:hover{
        width: 40px;
        height: 40px;
        transform: scale(1.4);
        /*position:abselute;
        z-index:10;*/
    }
</style>

    <div id="idxRootWrap">
<!-- 头部调用文件 -->


<!-- <link rel="stylesheet" href="/home/listshouye/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css"> -->
<!--test-->
<script src="/home/listshouye/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>

<div id="crumnav" style="position:abselute;z-index:0">
        <div class="cn-wrap">
            <div class="cn-ct">
                <div class="cn-fr">
                    <div class="cfsub cn-banlist">
                        <p>&nbsp;&nbsp;&nbsp;版面列表<i class="inbg blsj"></i></p>

                    </div>
                    <a href="/home/bbs/create">
                    <div class="cfsub cn-pub"><i class="inbg xpub" data-bn-ipg="bbs-index-newThread-tab"></i>发新帖</a></div>
                </div>
                <div class="cn-desc">
                    <h1 class="desctitle">七城论坛</h1>
                    <div class="descjj">
                        <strong class="descfs">分享</strong><i>.</i><strong>结伴</strong><i>.</i><strong>找攻略</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="cns-wrap">
            <div class="cnsw-sdi">
                @foreach($article as $k => $v)
                <div class="cn-slide">
                    <div class="cns-inner">
                        <!-- 模糊背景 -->
                        <img class="cnsi-authen index-tooltip" data-tooltiptype="1" data-url=""  
                        src="{{ $v -> pro }}"/>
                        <a href=" " target="_blank" class="cs-cover" target="_blank" data-bn-ipg="bbs-index-top-pic-1">
                            <!-- 背景图 -->
                        <img src="{{ $v -> pro }}" alt=""/></a>
                        <div class="cs-co">
                            <a href=" " target="_blank" class="cs-userpic" data-bn-ipg="bbs-index-top-writerPic-1">
                                <!-- 头像 -->
                                <img src="{{ $v -> profile }}" alt=" "/>
                            </a>
                            <p class="cs-unw">
                                <a href=" " target="_blank" data-bn-ipg="bbs-index-top-writerName-1">
                                @if($v -> nickname)
                                    {{ $v -> nickname }}
                                @else
                                    {{ $v -> username }}
                                @endif
                                </a>
                            </p>
                            <a href="  " target="_blank" class="cs-title" data-countlen="0" data-bn-ipg="bbs-index-top-title-1">
                            【
                                @if($v -> nickname)
                                    {{ $v -> nickname }}
                                @else
                                    {{ $v -> username }}
                                @endif

                            】{{ $v -> summary }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <ul class="cn-sy">
                    @foreach( $article as $k => $v )
                    <li>
                        <a href=" "  target="_blank" class="csl-i" data-bn-ipg="bbs-index-top-icon-1">
                            <span class="csli-span">
                                <img src="{{ $v -> profile }}"/>
                            </span>
                        </a>
                        <a href="https://bbs.qyer.com/thread-2686008-七城" class="csl-b" target="_blank"></a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <div class="cnbgwrap">
            <div class="cnb-wp">
              <img src="/home/listshouye/picture/b7559fb7a373412fb00d28bb9a5484be.gif" class="cn-bg cnb-show"/>
            </div>
            <div class="cnb-wp">
              <img src="/home/listshouye/picture/cf3ae3ca01b6426c8ca05d4394aca6cc.gif" class="cn-bg "/>
            </div>
            <div class="cnb-wp">
              <img src="/home/listshouye/picture/20823cd6c47249bba1eb0a4538164828.gif" class="cn-bg "/>
            </div>
            <div class="cnb-wp">
              <img src="/home/listshouye/picture/02df8dabcecc4d28a3e257fbb5dd00ea.gif" class="cn-bg "/>
            </div>
            <div class="cnb-wp">
              <img src="/home/listshouye/picture/d18ba166acba4d9f9a6d77c725ac549e.gif" class="cn-bg "/>
            </div>
          </div>
    </div>

    <!--内容列表部分-->
    <div id="conContainer">

    <div id="listContent" class="clearfix">
        <div class="adarea">
          <div class="mkt_zone" id="zoneid-21"></div>
          <div class="mkt_zone" id="zoneid-22"></div>
        </div>
        <div class="lc-fl">
            <div class="fl-tabs">
                <h3 class="fltcell" data-bn-ipg="bbs-index-tab-topic">游记攻略</h3>
                <h3 class="fltcell" data-bn-ipg="bbs-index-tab-play">结伴同游</h3>
                <h3 class="fltcell" data-bn-ipg="bbs-index-tab-board">版面列表</h3>

            </div>
            <div class="tab-content">
                <div class="yjgl tabcell">
                    <p class="yl-tips" style="display:none;"><i class="inbg yltip"></i>根据你的旅行偏好,每日为你推荐更新</p>
                    <div class="ylcon-wrap">
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        @foreach( $user as $k => $v)
           <div class="yl-con">
            <i class="ylc-line ylcl"></i>
                <div class="con-inner xfix">
                    <span class="inbg yl-close index-tooltip" data-bn-ipg="bbs-index-topiclist-close" ra-arg="false|3017737"></span>

                    <a href="/home/bbs/{{ $v -> uid }}/qitashow" target="_blank" data-bn-ipg="bbs-index-topiclist-writerpic-3434447" class="anchtoup" data-atrcln="dl-name">
                        <div id="iiii">
                            <img class="con-pic" src="{{ $v -> profile }} ">
                        </div>
                    </a>
                    <dl class="con-detail"><dt class="dl-title">

                        <a href="" class="dl-name xc32 aptle" target="_blank" data-bn-ipg="bbs-index-topiclist-writername-3434447" style="width: 30px;height: 30px;font-size:15px;">
                        @if(!empty( $v -> nickname ))
                           {{ $v -> nickname }}
                        @else
                           {{ $v -> username }}
                        @endif
                         
                        </a>
                        @if( $v -> sex == 1 )
                            <span class="icon_gender_he" title="男"></span>
                        @else( $v -> sex == 2 )
                            <span class="icon_gender_she" title="女"></span>
                        @endif
                        

                    </dt>
                    <dd class="dl-des">
                        <span class="dd-inw">在
                            <strong>
                                <a href="" target="_blank" data-bn-ipg="bbs-index-topiclist-board">
                                    {{ $v -> site }}地区
                                </a>
                            </strong>发布的游记

                            <i class="inbg zhhf"></i> 
                             <em class="xnum xc32"> {{ $v -> updated_at }} </em>发表

                            <i class="bicf praise"></i>
                            <em class="xnum xc32"> {{ $v -> likes }} </em>  人赞  
                        
                            <i class="bicf xcol"></i>
                            <em class="xnum xc32"> {{ $v -> reads }} </em>  人收藏  
                            </span>
                        </span>
                    </dd>
                    <dd class="xcfb">
                    <div class="tle-con">
                    <p>
                        <a class="tc-title aptle" href="" target="_blank" data-bn-ipg="bbs-index-topiclist-title-3017737" ra_arg="false|3017737">
                             {{ $v -> summary }}
                        </a>
                    </p>
                    <p class="tc-desc" data-iscount="1">
                        <div style="height:40px;width:430px;text-overflow: ellipsis;overflow:hidden;white-space:nowrap;">
                        {!! $v -> content !!}
                        </div>
                    </p>
                </div>
                <a href="/home/bbs/{{ $v -> id }}" class="tc-awrap anchtoup" data-atrcln="tc-title" target="_blank" data-bn-ipg="bbs-index-topiclist-pic-3017737" ra_arg="false|3017737">
                    <img class="tc-rimg" src="{{ $v->pro }}">
                </a>
                </dd>
            </dl>
        </div>
    </div>
     @endforeach
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++== -->
    </div>
                </div>
                <div class="jbty tabcell">
                    <p class="jy-tips"><i class="inbg jyts"></i>我想约上你，一起看世界<span class="ytsplit">|</span><a href=" " class="yt-a" target="_blank" data-bn-ipg="bbs-index-playlist-all">更多待约<i class="inbg lfci"></i></a></p>
                    <div class="ylcon-wrap"></div>
                </div>
                <div class="bmlb tabcell">

                    <div class="menus" id="zoneMenus">
                        <i class="zoneline"></i>
                        <ul class="clearfix" id="zoneElevator">
                            <li><a href="javascript:;" data-bn-ipg="bbs-index-boardList-life-2">欧洲</a><i class="inbg lb-yuan"></i></li>
                            <li><a href="javascript:;" data-bn-ipg="bbs-index-boardList-life-3">亚洲</a><i class="inbg lb-yuan"></i></li>
                            <li><a href="javascript:;" data-bn-ipg="bbs-index-boardList-life-4">美洲</a><i class="inbg lb-yuan"></i></li>
                            <li><a href="javascript:;" data-bn-ipg="bbs-index-boardList-life-5">大洋洲</a><i class="inbg lb-yuan"></i></li>
                            <li><a href="javascript:;" data-bn-ipg="bbs-index-boardList-life-6">非洲</a><i class="inbg lb-yuan"></i></li>
                        </ul>
                    </div>

                    <!-- 列表 -->
                    <div id="zoneList">
                      <div class="zl-cell">
                            <h3 class="zlc-tle">兴趣小组</h3>
                            <ul class="clearfix">
                                  <li>
                                    <a href="https://bbs.qyer.com/forum-2-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/d500051c25514cebaa94f1329ebac797.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-2-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">结伴同游</a>
                                        <p>一起七城到老!</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-3-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/55b6a1a08a234d3782291e525ee85786.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-3-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">签证</a>
                                        <p>出境旅行的第一步</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-148-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/8446b505f81a4ae2adfbe4cc314b319a.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-148-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">保险</a>
                                        <p>旅行保险交流</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-100-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/a36831edee5b4b6886076939183515d1.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-100-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">旅行购物</a>
                                        <p>喜刷刷喜刷刷</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-121-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-5" class="zlc-pic"><img src="/home/listshouye/picture/fc3d6ba3bde54a3b962daeed3085e0c1.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-121-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-5" class="zlc-name">七城折扣</a>
                                        <p>旅行特价集散地</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-154-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-6" class="zlc-pic"><img src="/home/listshouye/picture/bc41b5239a7e4074b0666a1daf204af1.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-154-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-6" class="zlc-name">睡遍全球</a>
                                        <p>带你免费体验全球酒店</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-94-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-7" class="zlc-pic"><img src="/home/listshouye/picture/cac5866596674d4b8e054e21e733b388.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-94-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-7" class="zlc-name">邮轮</a>
                                        <p>慢游的享受</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-62-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-8" class="zlc-pic"><img src="/home/listshouye/picture/0a769957e65843578ab009e29523ca87.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-62-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-8" class="zlc-name">航空</a>
                                        <p>追求高性价比的机票和航程</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-33-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-9" class="zlc-pic"><img src="/home/listshouye/picture/f1ef4f677ea746ed91075fd533d6c0c9.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-33-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-9" class="zlc-name">自驾</a>
                                        <p>心有多宽路就有多远</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-183-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-10" class="zlc-pic"><img src="/home/listshouye/picture/3372016b0e53440db2fe2b96437475bf.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-183-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-10" class="zlc-name">旅行视频</a>
                                        <p>用影像去记录旅行</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-22-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-11" class="zlc-pic"><img src="/home/listshouye/picture/4c749ca630dd4b22b1c36bad55eee05b.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-22-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-11" class="zlc-name">旅行摄影</a>
                                        <p>行色</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-40-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-12" class="zlc-pic"><img src="/home/listshouye/picture/3f42c6d688214047b8385d57a8a94601.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-40-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-12" class="zlc-name">户外运动</a>
                                        <p>体验即生活</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-88-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-13" class="zlc-pic"><img src="/home/listshouye/picture/8a34386e42784f349c606118c9b1ad12.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-88-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-13" class="zlc-name">潜水俱乐部</a>
                                        <p>我们属于那一片深蓝</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-122-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-14" class="zlc-pic"><img src="/home/listshouye/picture/d0248d9046924ca5a25ea239dc812ddc.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-122-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-14" class="zlc-name">带孩子旅行</a>
                                        <p>培养七城er第二代</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-123-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-15" class="zlc-pic"><img src="/home/listshouye/picture/1a339dbb22b54d1bb574f92ad04a8853.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-123-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-15" class="zlc-name">带父母旅行</a>
                                        <p>关注带父母出游的方方面面</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-49-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-16" class="zlc-pic"><img src="/home/listshouye/picture/429d74a406974ad8adbe8d40939fe5ee.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-49-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-16" class="zlc-name">明信片</a>
                                        <p>全球最大的华人明信片交换平台</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-184-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-17" class="zlc-pic"><img src="/home/listshouye/picture/427bda8560e7464faeb635d62cfd392f.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-184-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-17" class="zlc-name">路刻社</a>
                                        <p>复刻旅行时光</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-188-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-18" class="zlc-pic"><img src="/home/listshouye/picture/15b9bd14fd8d4bacb2a075c613722df3.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-188-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-18" class="zlc-name">Discovery探索频道</a>
                                        <p>探索世界的已知和未知</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">七城欧洲</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-112-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/e6856120b03f4c8694ca01fa117e2491.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-112-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">环游欧洲</a>
                                        <p>欧洲跨国长途旅行</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-14-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/8b84c96944be410293150715141f28f0.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-14-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">法国/摩纳哥</a>
                                        <p>浪漫就在身边</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-12-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/c50684766d964b7da8c86aa35414a957.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-12-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">德国</a>
                                        <p>七城诞生地！</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-15-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/034b3183674a4624adde4556743ba6c4.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-15-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">瑞士/列支敦士登</a>
                                        <p>上帝的后花园</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-19-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-5" class="zlc-pic"><img src="/home/listshouye/picture/64645d03ec1f4b29b2bf944b6faf9404.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-19-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-5" class="zlc-name">奥地利</a>
                                        <p>喜欢莫扎特还是更爱维也纳猪排？</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-24-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-6" class="zlc-pic"><img src="/home/listshouye/picture/9309cb3b11994e68a0b24939b1301655.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-24-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-6" class="zlc-name">捷克/斯洛伐克/匈牙利</a>
                                        <p>波西米亚与多瑙河</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-18-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-7" class="zlc-pic"><img src="/home/listshouye/picture/88910aad01204574adf364a5a837c16a.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-18-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-7" class="zlc-name">西班牙/葡萄牙/安道尔</a>
                                        <p>大航海、弗拉门戈和白色小镇</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-26-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-8" class="zlc-pic"><img src="/home/listshouye/picture/56491f5e67c54390a41efb0e4476fe1d.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-26-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-8" class="zlc-name">希腊/塞浦路斯</a>
                                        <p>西方文明的起源</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-13-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-9" class="zlc-pic"><img src="/home/listshouye/picture/5ca20c3813ea4ec19cf21993db56ed97.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-13-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-9" class="zlc-name">意大利/梵蒂冈/圣马力诺/马耳他</a>
                                        <p>爱速度还是爱披萨？</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-16-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-10" class="zlc-pic"><img src="/home/listshouye/picture/c2dc081334cb4afe9210184ef705e194.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-16-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-10" class="zlc-name">英国/爱尔兰</a>
                                        <p>Fish&amp;Chips or U2</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-17-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-11" class="zlc-pic"><img src="/home/listshouye/picture/c502ede2998f42ad8f8daf797ba42654.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-17-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-11" class="zlc-name">荷兰/比利时/卢森堡</a>
                                        <p>郁金香、奶酪还有丁丁历险记</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-161-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-12" class="zlc-pic"><img src="/home/listshouye/picture/54632ef667684154aa34ccd8bda0dc21.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-161-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-12" class="zlc-name">波兰/立陶宛/拉脱维亚/爱沙尼亚</a>
                                        <p>波罗的海</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-25-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-13" class="zlc-pic"><img src="/home/listshouye/picture/9cb58cf72a3a4139828a84ca67b93e3a.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-25-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-13" class="zlc-name">挪威/瑞典/芬兰/丹麦/冰岛</a>
                                        <p>圣诞老人、海盗传说、童话故事当然还有极光</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-158-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-14" class="zlc-pic"><img src="/home/listshouye/picture/33c0fba9d99941ecadf6a33b56f54a1f.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-158-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-14" class="zlc-name">俄罗斯/乌克兰/白俄罗斯</a>
                                        <p>战斗民族</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-160-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-15" class="zlc-pic"><img src="/home/listshouye/picture/045617e7193d4ecca77e3c594effc428.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-160-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-15" class="zlc-name">外高加索三国</a>
                                        <p>高加索山脉南麓</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-162-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-16" class="zlc-pic"><img src="/home/listshouye/picture/73f64f2639b94faba9fce696ac2dab83.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-162-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-16" class="zlc-name">土耳其</a>
                                        <p>链接欧亚大陆</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-159-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-17" class="zlc-pic"><img src="/home/listshouye/picture/96cd64667ccf46d89e13c7976fe79b6a.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-159-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-17" class="zlc-name">东南欧地区</a>
                                        <p>黑海与亚得里亚海间的明珠们</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-109-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-18" class="zlc-pic"><img src="/home/listshouye/picture/1aa065044a584cc5914c42e9c7076ceb.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-109-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-18" class="zlc-name">欧洲交通</a>
                                        <p>在欧洲，便利的出行方式选择多多</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">七城亚洲</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-58-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/7e92477a321f43babc745b88c9e98e3e.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-58-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">环游亚洲</a>
                                        <p>亚洲跨国长途旅行</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-57-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/2abe8befd2b8401486aeceac6499e06c.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-57-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">日本</a>
                                        <p>樱花与刺身</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-156-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/cff86d2798684a3f8e17fe71febda138.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-156-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">韩国/朝鲜</a>
                                        <p>韩剧、泡菜、领袖</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-52-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/2a4f83f3306b4e33b37cc8dc30a9e25c.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-52-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">台湾</a>
                                        <p>很多美食的宝岛</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-163-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-5" class="zlc-pic"><img src="/home/listshouye/picture/49e7be66066445a8930d9555ced9ed4e.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-163-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-5" class="zlc-name">香港/澳门</a>
                                        <p>东方之珠</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-106-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-6" class="zlc-pic"><img src="/home/listshouye/picture/c6fe0af0b2de437ca31b19572022239c.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-106-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-6" class="zlc-name">泰国</a>
                                        <p>冬荫功汤、四面佛和国王</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-108-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-7" class="zlc-pic"><img src="/home/listshouye/picture/6c0f11ca8f0946c6abdf85363ca5fb84.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-108-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-7" class="zlc-name">马来西亚/文莱</a>
                                        <p>狮身鱼尾、肉骨茶和双子塔</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-164-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-8" class="zlc-pic"><img src="/home/listshouye/picture/52667139889a4b128b099a1bcaa0015b.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-164-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-8" class="zlc-name">新加坡</a>
                                        <p>海南鸡饭与鱼尾狮</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-110-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-9" class="zlc-pic"><img src="/home/listshouye/picture/796d8b21ce90446c87f9b25c7b08e4ee.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-110-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-9" class="zlc-name">菲律宾</a>
                                        <p>离中国最近的热带海岛</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-175-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-10" class="zlc-pic"><img src="/home/listshouye/picture/22244f3ff7604cb9a867de4d76b37432.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-175-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-10" class="zlc-name">柬埔寨</a>
                                        <p>吴哥的微笑</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-107-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-11" class="zlc-pic"><img src="/home/listshouye/picture/f23ee844e64046278f14bafaac08011c.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-107-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-11" class="zlc-name">越南</a>
                                        <p>湄公河、奥黛和米粉</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-176-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-12" class="zlc-pic"><img src="/home/listshouye/picture/ace6ae5dce32458bad504ff28150f230.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-176-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-12" class="zlc-name">老挝</a>
                                        <p>寺庙、僧侣和慢节奏</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-177-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-13" class="zlc-pic"><img src="/home/listshouye/picture/5e6d813feade48e39be814e9df709183.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-177-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-13" class="zlc-name">缅甸</a>
                                        <p>多少云烟佛塔</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-102-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-14" class="zlc-pic"><img src="/home/listshouye/picture/da809604f6f146ebbbfe0b13c47893c5.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-102-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-14" class="zlc-name">尼泊尔</a>
                                        <p>让喜马拉雅山去改变你</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-166-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-15" class="zlc-pic"><img src="/home/listshouye/picture/019fdea7061642a8b805bb98d5a95bb7.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-166-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-15" class="zlc-name">不丹</a>
                                        <p>雷龙之国</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-111-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-16" class="zlc-pic"><img src="/home/listshouye/picture/7c052da55fde438daf0e095227819c42.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-111-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-16" class="zlc-name">印度尼西亚/东帝汶</a>
                                        <p>此巴厘不是彼巴黎</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-104-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-17" class="zlc-pic"><img src="/home/listshouye/picture/febb6bb015c64c6ca1581ad33fe4d075.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-104-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-17" class="zlc-name">马尔代夫</a>
                                        <p>椰林树影水清沙幼</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-165-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-18" class="zlc-pic"><img src="/home/listshouye/picture/a87ac29ad746427da8f4c3a242b58924.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-165-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-18" class="zlc-name">斯里兰卡</a>
                                        <p>印度洋上的眼泪</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-103-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-19" class="zlc-pic"><img src="/home/listshouye/picture/c0818839fc48455eae0113a81869f8f5.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-103-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-19" class="zlc-name">印度/孟加拉</a>
                                        <p>神牛、神油、神庙</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-59-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-20" class="zlc-pic"><img src="/home/listshouye/picture/947c4db38fbe4296bc4a2bd1fa73a1e0.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-59-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-20" class="zlc-name">伊朗</a>
                                        <p>左手伊朗 右手波斯</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-169-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-21" class="zlc-pic"><img src="/home/listshouye/picture/f761e764abd44edaa9f396a2bb055831.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-169-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-21" class="zlc-name">巴基斯坦/阿富汗</a>
                                        <p>战后的家园</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-171-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-22" class="zlc-pic"><img src="/home/listshouye/picture/52426e7a5264424aa6e3843120b47b69.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-171-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-22" class="zlc-name">阿联酋/卡塔尔</a>
                                        <p>土豪国的传说</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-170-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-23" class="zlc-pic"><img src="/home/listshouye/picture/c647cc51f80a42c38b68d339ecb72362.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-170-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-23" class="zlc-name">以色列</a>
                                        <p>圣城与纷争</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-172-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-24" class="zlc-pic"><img src="/home/listshouye/picture/5a65a2751bd644278558a4a71d14ae35.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-172-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-24" class="zlc-name">西亚其他国家</a>
                                        <p>说不清</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-105-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-25" class="zlc-pic"><img src="/home/listshouye/picture/ecba4bac143c49c8a75809140a3f2d10.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-105-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-25" class="zlc-name">中亚各国</a>
                                        <p>各种斯坦和草原</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-167-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-26" class="zlc-pic"><img src="/home/listshouye/picture/f655f8d953b1403abb0d4e4b6bb01600.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-167-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-26" class="zlc-name">蒙古</a>
                                        <p>套马的汉子</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-51-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-27" class="zlc-pic"><img src="/home/listshouye/picture/92853dcc2d1d41678b8c027aab9873b4.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-51-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-27" class="zlc-name">中国内地</a>
                                        <p>你懂的！</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">七城美洲</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-53-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/2577a444a3e1493680fb88d3cb74ef64.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-53-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">美国</a>
                                        <p>多元、都市和自然</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-54-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/108ed03982bb493e94317e74c2feb851.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-54-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">加拿大</a>
                                        <p>枫叶、落基山与冰地</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-168-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/0b37bc4aa5b242b58918f7258fc685e9.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-168-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">中美</a>
                                        <p>玛雅文明、朗姆酒与加勒比海</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-55-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/0ecfd62033754b1fa707095218fb18eb.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-55-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">南美/南极</a>
                                        <p>足球、桑巴、狂欢节和世界尽头</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">七城大洋洲</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-56-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/0c4f7202e8f74ef6aa9330a0601f8da9.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-56-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">澳大利亚</a>
                                        <p>袋鼠、考拉和大石头</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-83-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/96ba9153224042ef98eff980d269d61c.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-83-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">新西兰</a>
                                        <p>魔戒在净土</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-178-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/cead61b3f503413c87eb686acffcf865.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-178-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">太平洋海岛</a>
                                        <p>大洋中的世外桃源</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">七城非洲</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-86-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/8516ce4249f54221aab530952fef1c9e.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-86-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">北非地区</a>
                                        <p>沙漠、神秘和古文明</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-173-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/8a0eaff7408d4f00a55ec0548164748b.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-173-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">东非地区</a>
                                        <p>动物世界</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-174-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/91e2942d3aec4bbeae261c839966beb6.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-174-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">非洲海岛</a>
                                        <p>不一样的浪漫非洲</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-60-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/185abb22be9d401daa9475f5a1a2ba25.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-60-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">非洲其他国家</a>
                                        <p>大裂谷和部族</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">线上线下</h3>
                            <ul class="clearfix">
                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-99-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/bbe8c8a102e748798bfba0c68d382714.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-99-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">七城活动</a>
                                        <p>线上及线下活动</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-87-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/ac726ff089624cd384c5339f62dcba80.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-87-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">七城er访谈</a>
                                        <p>七城er专栏, 原长老访谈录</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-157-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-3" class="zlc-pic"><img src="/home/listshouye/picture/bef1ff81ebca4dff98cd1fa2abeeeca3.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-157-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-3" class="zlc-name">七城沙龙</a>
                                        <p>七城沙龙专版</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-117-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-4" class="zlc-pic"><img src="/home/listshouye/picture/96029c9cdb86402d8590dc63f24362e2.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-117-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-4" class="zlc-name">轻年计划</a>
                                        <p>大学生海外旅行奖学金计划</p></div>

                                                                                                <li>
                                    <a href="https://bbs.qyer.com/forum-185-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-5" class="zlc-pic"><img src="/home/listshouye/picture/ef19aea407fc40578bbddabd2ba493f5.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-185-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-5" class="zlc-name">城市漫步</a>
                                        <p>认识一座城市最好的方式</p></div>

                                                            </ul>
                        </div>
                                                <div class="zl-cell">
                            <h3 class="zlc-tle">后院</h3>
                            <ul class="clearfix">
                                <li>
                                    <a href="https://bbs.qyer.com/forum-20-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-1" class="zlc-pic"><img src="/home/listshouye/picture/dbce959f0b1c4d64a631dabe5d378628.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest">
                                        <a href="https://bbs.qyer.com/forum-20-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-1" class="zlc-name">海阔天空</a>
                                        <p>没有严格的话题归类, 请尽量围绕自助旅行讨论</p>
                                    </div>

                                <li>
                                    <a href="https://bbs.qyer.com/forum-180-七城" target="_blank" data-bn-ipg="bbs-index-boardList-pic-2" class="zlc-pic"><img src="/home/listshouye/picture/352d9bea04a7416788c68d0fc2421763.gif" width="48" height="48" alt="" /></a>
                                    <div class="zlc-dest"><a href="https://bbs.qyer.com/forum-180-七城" target="_blank" data-bn-ipg="bbs-index-boardList-boardName-2" class="zlc-name">转让专区</a>
                                        <p>转让旅行相关商品</p>
                                </div>

                            </ul>
                        </div>
                        
                    </div>
                </div>
                <a class="tab-load" href="javascript:void(0)">
                    <span class="loadingtxt">加载中</span><span class="loadtxt">加载更多</span><i></i>
                </a>
            </div>
        </div>
        <div class="lc-fr">

            <div id="regInfo">
                 <div class="reg-fir">
                      <p class="rf-des">加入七城社区<br/>和80,000,000在一起<br/>发现最世界</p>
                      <a class="rf-reg do-reglog" href="javascript:;" data-reglog="doSignin" data-bn-ipg="bbs-index-userBoard1-register">注册七城</a>
                      <p class="rf-login">已有账号？立即<a class="rfl-lg do-reglog" href="javascript:;" data-reglog="doLogin" data-bn-ipg="bbs-index-userBoard1-login">登录</a></p>
                      <p class="rf-oth"><span>或通过第三方登录</span>
                          <a class="rf-sina otherlogin inbg" data-logintype="weibo" href="javascript:;" data-bn-ipg="wbbs-index-userBoard1-registerT-1"></a><a class="rf-qq otherlogin inbg" data-logintype="qq" href="javascript:;" data-bn-ipg="bbs-index-userBoard1-registerT-2"></a><a href="javascript:;" class="rf-wechat otherlogin inbg" data-logintype="weixin" data-bn-ipg="bbs-index-userBoard1-registerT-3"></a>
                      </p>
                 </div>
                 <div class="reg-sec xfix">
                    <a class="rs-lo inbg" href="//app.qyer.com/guide/" target="_blank" data-bn-ipg="bbs-index-userBoard1-guide">

                    </a>
                    <div class="rs-co">
                        <p>在手机上看帖结伴</p>
                        <p class="rc-an">
                        <a href="" target="_blank" data-bn-ipg="bbs-index-userBoard1-openURL-1">iPhone</a><span class="rca-line">|</span><a href="" target="_blank" data-bn-ipg="bbs-index-userBoard1-openURL-2">Android</a>
                        </p>
                    </div>
                 </div>
             </div>
              <div class="lf-community">
                <p class="lfc-con"><a class="lfc-more" href="" target="_blank" data-bn-ipg="bbs-index-activity-more">更多<i class="inbg lfci"></i></a>社区活动</p>
                <div class="lfc-content">
                    <a href="" target="_blank" data-bn-ipg="bbs-index-activity-pic-1"><img src="/home/listshouye/picture/783dfb561f234738abc9e28de2120dae.gif" alt="2018相遇节 |这个七夕和有趣的TA在七城相遇！" /></a>
                                         <a href="" target="_blank" data-bn-ipg="bbs-index-activity-pic-2"><img src="/home/listshouye/picture/8a0fe92f365d492cb991d1450cfcace5.gif" alt="城市漫步博物馆-City Walk in Beijing" class="lfcc-last"/></a>
                                     </div>
             </div>
                        <div id="adCommunity" class="lf-community" style="display: none;">
                <p class="lfc-con">七城活动</p>
                <div class="lfc-content">
                    <div class="mkt_zone" id="zoneid-80"></div>
                    <div class="mkt_zone" id="zoneid-81"></div>
                    <div class="mkt_zone" id="zoneid-82"></div>
                    <div class="mkt_zone" id="zoneid-83"></div>
                    <div class="mkt_zone" id="zoneid-84"></div>
                    <div class="mkt_zone" id="zoneid-85"></div>
                </div>
            </div>
             <div id="maybeIntQyer">

             </div>

             <p class="mi-cha">
                <a href="javascript:;" class="mic-change" data-bn-ipg="bbs-index-guess-change">换一换
                    <i class="inbg mic-c"></i>
                </a>可能感兴趣的人</p>
             @foreach($userreads as $k => $v)
            <div class="mitem-con" style="display: block;"> 
                <div class="mi-item"> 
                    <a href=" " target="_blank" data-bn-ipg="bbs-index-guess-userpic-3146452"> 
                        <img class="mii-i" src="{{ $v -> profile }}" alt="" /> 
                    </a> 
                    <div class="mii-co">
                    <p class="miic-nm">
                        <a href="javascript:;" class="miicn-gz" data-userid="3146452" data-isatten="0" data-bn-ipg="bbs-index-guess-follow-1">
                            <span class="mi-ated">+关注</span>
                            <span class="mi-noat">取消关注</span>
                        </a>
                        <a href=" " target="_blank" class="miic-nma">
                        @if(!empty( $v -> nickname ))
                           {{ $v -> nickname }}
                        @else
                           {{ $v -> username }}
                        @endif
                        </a>
                       <!--  @if( $v -> sex == 1 )
                            <span class="icon_gender_he" title="男"></span>
                        @else( $v -> sex == 2 )
                            <span class="icon_gender_she" title="女"></span>
                        @endif -->
                        <img class="mii-authen index-tooltip" src="//common1.qyerstatic.com/bbs/old/images/index/at_member.png" data-url="//www.qyer.com/u/member/xuan" />
                    </p>
                    <p class="ielli">精华作者</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    </div>

  <!-- 微信 返回顶部 -->
  <p id="pageUrlQRCode" style="display:none;">
    <img src="/home/listshouye/picture/h5.png"></p>

    <div class="inbg cnb-sj">
</div>
<div class="cnb-container xvh">
        <div class="cnbc-inner clearfix">            
            <div class="cnbci-item cnbci-fir">     
              <h4>线上线下</h4>
                <ul>
                  <li><a href="https://bbs.qyer.com/forum-99-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">七城活动</a></li>
                  <li><a href="https://bbs.qyer.com/forum-87-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">七城er访谈</a></li>
                  <li><a href="https://bbs.qyer.com/forum-157-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">七城沙龙</a></li>
                  <li><a href="https://bbs.qyer.com/forum-117-七城" data-bn-ipg="bbs-index-headBoardlist-4" target="_blank">轻年计划</a></li>
                  <li><a href="https://bbs.qyer.com/forum-185-七城" data-bn-ipg="bbs-index-headBoardlist-5" target="_blank">城市漫步</a></li>
              </ul>
                                                    
            </div>             
             <div class="cnbci-item cnbci-sec">
                    
                                   
                                                   
                <h4>欧洲</h4>
                <ul>
                                        <li><a href="https://bbs.qyer.com/forum-112-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">环游欧洲</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-14-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">法国/摩纳哥</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-12-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">德国</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-15-七城" data-bn-ipg="bbs-index-headBoardlist-4" target="_blank">瑞士/列支敦士登</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-19-七城" data-bn-ipg="bbs-index-headBoardlist-5" target="_blank">奥地利</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-24-七城" data-bn-ipg="bbs-index-headBoardlist-6" target="_blank">捷克/斯洛伐克/匈牙利</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-18-七城" data-bn-ipg="bbs-index-headBoardlist-7" target="_blank">西班牙/葡萄牙/安道尔</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-26-七城" data-bn-ipg="bbs-index-headBoardlist-8" target="_blank">希腊/塞浦路斯</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-13-七城" data-bn-ipg="bbs-index-headBoardlist-9" target="_blank">意大利/梵蒂冈/圣马力诺/马耳他</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-16-七城" data-bn-ipg="bbs-index-headBoardlist-10" target="_blank">英国/爱尔兰</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-17-七城" data-bn-ipg="bbs-index-headBoardlist-11" target="_blank">荷兰/比利时/卢森堡</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-161-七城" data-bn-ipg="bbs-index-headBoardlist-12" target="_blank">波兰/立陶宛/拉脱维亚/爱沙尼亚</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-25-七城" data-bn-ipg="bbs-index-headBoardlist-13" target="_blank">挪威/瑞典/芬兰/丹麦/冰岛</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-158-七城" data-bn-ipg="bbs-index-headBoardlist-14" target="_blank">俄罗斯/乌克兰/白俄罗斯</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-160-七城" data-bn-ipg="bbs-index-headBoardlist-15" target="_blank">外高加索三国</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-162-七城" data-bn-ipg="bbs-index-headBoardlist-16" target="_blank">土耳其</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-159-七城" data-bn-ipg="bbs-index-headBoardlist-17" target="_blank">东南欧地区</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-109-七城" data-bn-ipg="bbs-index-headBoardlist-18" target="_blank">欧洲交通</a></li>
                                    </ul>
                                   
                                   
                                   
                                   
                                   
                                   
                                                
             </div>
             <div class="cnbci-item cnbci-th">
                    
                                   
                                   
                                                   
                <h4>亚洲</h4>
                <ul>
                                        <li><a href="https://bbs.qyer.com/forum-58-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">环游亚洲</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-57-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">日本</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-156-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">韩国/朝鲜</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-52-七城" data-bn-ipg="bbs-index-headBoardlist-4" target="_blank">台湾</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-163-七城" data-bn-ipg="bbs-index-headBoardlist-5" target="_blank">香港/澳门</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-106-七城" data-bn-ipg="bbs-index-headBoardlist-6" target="_blank">泰国</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-108-七城" data-bn-ipg="bbs-index-headBoardlist-7" target="_blank">马来西亚/文莱</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-164-七城" data-bn-ipg="bbs-index-headBoardlist-8" target="_blank">新加坡</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-110-七城" data-bn-ipg="bbs-index-headBoardlist-9" target="_blank">菲律宾</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-175-七城" data-bn-ipg="bbs-index-headBoardlist-10" target="_blank">柬埔寨</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-107-七城" data-bn-ipg="bbs-index-headBoardlist-11" target="_blank">越南</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-176-七城" data-bn-ipg="bbs-index-headBoardlist-12" target="_blank">老挝</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-177-七城" data-bn-ipg="bbs-index-headBoardlist-13" target="_blank">缅甸</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-102-七城" data-bn-ipg="bbs-index-headBoardlist-14" target="_blank">尼泊尔</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-166-七城" data-bn-ipg="bbs-index-headBoardlist-15" target="_blank">不丹</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-111-七城" data-bn-ipg="bbs-index-headBoardlist-16" target="_blank">印度尼西亚/东帝汶</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-104-七城" data-bn-ipg="bbs-index-headBoardlist-17" target="_blank">马尔代夫</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-165-七城" data-bn-ipg="bbs-index-headBoardlist-18" target="_blank">斯里兰卡</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-103-七城" data-bn-ipg="bbs-index-headBoardlist-19" target="_blank">印度/孟加拉</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-59-七城" data-bn-ipg="bbs-index-headBoardlist-20" target="_blank">伊朗</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-169-七城" data-bn-ipg="bbs-index-headBoardlist-21" target="_blank">巴基斯坦/阿富汗</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-171-七城" data-bn-ipg="bbs-index-headBoardlist-22" target="_blank">阿联酋/卡塔尔</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-170-七城" data-bn-ipg="bbs-index-headBoardlist-23" target="_blank">以色列</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-172-七城" data-bn-ipg="bbs-index-headBoardlist-24" target="_blank">西亚其他国家</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-105-七城" data-bn-ipg="bbs-index-headBoardlist-25" target="_blank">中亚各国</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-167-七城" data-bn-ipg="bbs-index-headBoardlist-26" target="_blank">蒙古</a></li>
                                        <li><a href="https://bbs.qyer.com/forum-51-七城" data-bn-ipg="bbs-index-headBoardlist-27" target="_blank">中国内地</a></li>
                                    </ul>
                                   
                                   
                                   
                                   
                                   
                                                  
             </div>
             <div class="cnbci-item cnbci-fo">
                 <div class="cnbcii-cell">
                       
                                           
                                           
                                           
                                                       
                    <h4>美洲</h4>
                    <ul>
                                                <li><a href="https://bbs.qyer.com/forum-53-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">美国</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-54-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">加拿大</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-168-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">中美</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-55-七城" data-bn-ipg="bbs-index-headBoardlist-4" target="_blank">南美/南极</a></li>
                                            </ul>
                                           
                                           
                                           
                                           
                                           
                 </div>
                 <div class="cnbcii-cell cnbcii-odd">
                       
                                           
                                           
                                           
                                           
                                           
                                                       
                    <h4>非洲</h4>
                    <ul>
                                                <li><a href="https://bbs.qyer.com/forum-86-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">北非地区</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-173-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">东非地区</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-174-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">非洲海岛</a></li>
                                                <li><a href="https://bbs.qyer.com/forum-60-七城" data-bn-ipg="bbs-index-headBoardlist-4" target="_blank">非洲其他国家</a></li>
                                            </ul>
                                           
                                           
                                           
                 </div>
                 <div class="cnbcii-cell">
                      
                                           
                                           
                                           
                                           
                                                       
                    <h4>大洋洲</h4>
                    <ul>
                        <li><a href="https://bbs.qyer.com/forum-56-七城" data-bn-ipg="bbs-index-headBoardlist-1" target="_blank">澳大利亚</a></li>
                        <li><a href="https://bbs.qyer.com/forum-83-七城" data-bn-ipg="bbs-index-headBoardlist-2" target="_blank">新西兰</a></li>
                        <li><a href="https://bbs.qyer.com/forum-178-七城" data-bn-ipg="bbs-index-headBoardlist-3" target="_blank">太平洋海岛</a></li>
                    </ul>
                                               
                 </div>
                 <div class="cnbcii-cell cnbcii-odd">
                      
                                  
                 </div>


             </div>
         </div>
     </div>
     
    <dl style="display:none">
  </dl>



<!-- js文件 -->

<script src="/home/listshouye/js/index_js_btm_65f3a6e60c137fe9d632cf5d9f88100f.js"></script>




<style>
  .web_components_sidebar{display:none; width:55px;box-sizing:border-box;position:fixed;bottom:120px;right:40px;font-family:"Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Microsoft YaHei",宋体,sans-serif;background-color:white; z-index:1000;box-shadow: rgba(0,0,0,0.1) 0px 0px 4px;}
  .web_components_sidebar-item{display:block;width:55px;height:55px;box-sizing:border-box;border:solid 1px #e2e2e2 !important;color:#b2b2b2 !important;text-align:center;margin-top:-1px;position:relative;}
  .web_components_sidebar-item:hover{border:solid 1px rgba(0,0,0,0) !important;color:white !important;z-index:1;background-color:#07AE72;}
  .web_components_sidebar-item .title{font-size:12px;-webkit-transform:scale(0.8);-moz-transform:scale(0.8);-o-transform:scale(0.8);transform:scale(0.8);display:block;position:absolute;bottom:1px;width:100%;}

  .web_components_sidebar-item:hover   .web_components_sidebar-layer{display:block;}
  .web_components_sidebar-layer{display:none;padding:14px;text-align:center;position:absolute;left:-172px;top:-126px;border:1px solid rgb(221,221,221);background-color:rgb(255,255,255);box-shadow:rgba(0,0,0,0.1) 0px 0px 4px;}
  .web_components_sidebar-layer-img {display:block;width:120px;height:120px;margin-top:9px;}
  .web_components_sidebar-layer-title {font-size:14px;color:#323232 !important;}
  .web_components_sidebar-layer::after,.web_components_sidebar-layer::before {content:"";width:0;height:0;position:absolute;font-size:0;line-height:0;overflow:hidden;}
  .web_components_sidebar-layer::before{right:-12px;top:146px;border-left:6px solid rgb(221,221,221);border-right:6px solid rgba(0,0,0,0);border-top:6px solid rgba(0,0,0,0);border-bottom:6px solid rgba(0,0,0,0);}
  .web_components_sidebar-layer::after {right:-10px;top:147px;border-left:5px solid rgb(255,255,255);border-right:5px solid rgba(0,0,0,0);border-top:5px solid rgba(0,0,0,0);border-bottom:5px solid rgba(0,0,0,0);}
  .web_components_sidebar-layer-hr{margin:20px 0 18px 0;border:none;height:1px;background-color:#e2e2e2;}

  .web_components_sidebar-layer.shoujikantie{top:-207px;}
  .web_components_sidebar-layer.shoujikantie::before{top:228px;}
  .web_components_sidebar-layer.shoujikantie::after {top:229px;}

  .web_components_sidebar-icon{background-image:url(home/listshouye/images/icons.png);background-repeat:no-repeat;width:18px;height:18px;display:block;margin:12px auto 0 auto;background-position:0px 0;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.fanhuidingbu{background-position:-28px 0;}
  .web_components_sidebar-icon.saomaxiazai{background-position:0px -24px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.saomaxiazai{background-position:-28px -24px;}
  .web_components_sidebar-icon.shoujikantie{background-position:0px -24px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.shoujikantie{background-position:-28px -24px;}
  .web_components_sidebar-icon.wodedingdan{background-position:0px -116px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.wodedingdan{background-position:-28px -116px;}
  .web_components_sidebar-icon.wodeshoucang{background-position:0px -157px;width:20px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.wodeshoucang{background-position:-27px -157px;}
  .web_components_sidebar-icon.shoujilijian{background-position:0px -184px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.shoujilijian{background-position:-28px -184px;}
  .web_components_sidebar-icon.yijianfankui{background-position:0px -62px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.yijianfankui{background-position:-29px -62px;}
  .web_components_sidebar-icon.zhidadibu{background-position:0px -88px;}
  .web_components_sidebar-item:hover .web_components_sidebar-icon.zhidadibu{background-position:-30px -88px;}

  .web_components_sidebar-item:hover .web_components_sidebar-icon{-webkit-animation:shake .4s;-moz-animation:shake .4s;-o-animation:shake .4s;animation:shake .4s;}
  @keyframes -webkit-shake {
      0%,100% {-webkit-transform:rotate(0);}
      10%,50%,90% {-webkit-transform:rotate(13deg);}
      20%,60%,80% {-webkit-transform:rotate(-13deg);}
  }
  @keyframes -moz-shake {
      0%,100% {-webkit-transform:rotate(0);}
      10%,50%,90% {-webkit-transform:rotate(13deg);}
      20%,60%,80% {-webkit-transform:rotate(-13deg);}
  }
  @keyframes -o-shake {
      0%,100% {-webkit-transform:rotate(0);}
      10%,50%,90% {-webkit-transform:rotate(13deg);}
      20%,60%,80% {-webkit-transform:rotate(-13deg);}
  }
  @keyframes shake {
      0%,100% {-webkit-transform:rotate(0);}
      10%,50%,90% {-webkit-transform:rotate(13deg);}
      20%,60%,80% {-webkit-transform:rotate(-13deg);}
  }







<

<style>
  .web_components_sidebar_feedbackdialog_warp{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:2200;background-color:rgba(0,0,0,0.3);}
  .web_components_sidebar_feedbackdialog{display:block;padding:20px;width:400px;box-sizing:border-box;background-color:#fff;border:solid 1px #e2e2e2;position:fixed;left:50%;top:50%;margin:-240px  auto auto -200px;-webkit-box-shadow:0 2px 4px rgba(0,0,0,.1);-o-box-shadow:0 2px 4px rgba(0,0,0,.1);-moz-box-shadow:0 2px 4px rgba(0,0,0,.1);box-shadow:0 2px 4px rgba(0,0,0,.1);}
  .web_components_sidebar_feedbackdialog .closeImg{position:absolute;top:19px;right:19px;cursor:pointer;}
  .web_components_sidebar_feedbackdialog .huiji{opacity:0;background-image:url(home/listshouye/images/huiji.png);width:132px;height:120px;display:block;position:absolute;top:-36px;left:40px;}
  .web_components_sidebar_feedbackdialog .title{font-size:20px;color:#222;height:78px;line-height:78px;text-align:center;margin-top:-20px;}
  .web_components_sidebar_feedbackdialog .content{font-size:14px;height:190px;padding:20px 15px;width:100%;box-sizing:border-box;border:solid 1px #e2e2e2;overflow:hidden;}
  .web_components_sidebar_feedbackdialog .address_title{color:rgba(34,34,34,0.65);font-size:14px;margin:16px 0 8px 0;}
  .web_components_sidebar_feedbackdialog .address{font-size:14px;height:40px;padding:10px 20px;width:100%;box-sizing:border-box;border:solid 1px #e2e2e2;}
  .web_components_sidebar_feedbackdialog .button{display:block;width:120px;height:40px;margin:30px auto 20px auto;border:none;line-height:40px;font-size:14px;color:#fff;cursor:pointer;background-color:#31b57f;box-shadow:0 3px 6px rgba(11,191,121,0.3);-webkit-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);-moz-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);-o-background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);background:linear-gradient(to right,rgb(77,192,117) 0%,rgb(31,175,133) 100%);}
  .web_components_sidebar_feedbackdialog .texttip{position:absolute;right:30px;top:240px;font-size:12px;color:rgba(34,34,34,.35);}
  .web_components_sidebar_feedbackdialog .texttip.error{color:red;}
  .web_components_sidebar_feedbackdialog .errortip{color:red;margin:2px 0 -20px 0;font-size:12px;}


  .web_components_sidebar_feedbackdialog.zoom{
    -webkit-animation:zoom .3s linear;
    -moz-animation:zoom .3s linear;
    -o-animation:zoom .3s linear;
    animation:zoom .3s linear;
  }

  @keyframes -webkit-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes -moz-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes -o-zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }
  @keyframes zoom{
    from{transform:scale(1)}
    50%{transform:scale(0.98)}
    to{transform:scale(1)}
  }

  .web_components_sidebar_feedbackdialog .huiji.show{
    -webkit-animation:spin .7s linear;
    -moz-animation:spin .7s linear;
    -o-animation:spin .7s linear;
    animation:spin .7s linear;
    -webkit-transform-origin: 87px 193px;
    -moz-transform-origin: 87px 193px;
    -o-transform-origin: 87px 193px;
    transform-origin: 87px 193px;
    opacity:1;
  }
  @keyframes -webkit-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes -moz-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes -o-spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }
  @keyframes spin{
    from{transform:rotate(-200deg);opacity:0;}
    40%{transform:rotate(-120deg);opacity:0;}
    to{transform:rotate(0);opacity:1;}
  }

  .feedback-tip{display:none;position:fixed;top:200px;left:0;width:100%;text-align:center;z-index:1200;}
  .feedback-tip-box{display:inline-block;max-width:390px;padding:15px 20px;background-color:#fff;box-shadow:0 2px 7px rgba(0,0,0,0.25);border:solid 1px #c0c0c0;text-align:left;font-size:18px;line-height:32px;border-radius:5px;}
  .feedback-tip-text {display:block;position:relative;color:#323232;}
</style>

<script>
  $(function(){
    var $feedbackDialog = $(".web_components_sidebar_feedbackdialog_warp");
    var $feedbackHuiji = $("#js_feedbackDialog .huiji");
    var $feedbackContent = $("#js_feedbackdialog_content");
    var $feedbackAddress = $("#js_feedbackdialog_address");
    var $feedbackTexttip = $("#js_feedbackdialog_texttip");
    var $feedbackErrortip = $("#js_feedbackdialog_errorip");
    var $tip = $('#js_feedback_tip');

    var utils = {
      isMail    :function(str){return /^\w+([-_.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/gi.test(str);},
      isPhone   :function(str){return /^1[3|4|5|7|8]\d{9}$/gi.test(str);},
      getStrLen :function(str){return str.length;},
    };

    function showFeedbackDialog(){
      //判断登录
      if (window.QYER && window.QYER.uid === 0) {
        qyerUtil.doLogin();
      } else {
        //调登录弹层
        $feedbackDialog.fadeIn(300,function(){
           $feedbackHuiji.addClass('show');
          setTimeout(function(){
            $('#js_feedbackDialog').addClass('zoom')
          },800)
        });
      }
    }

    function closeFeedbackDialog(){
      $feedbackDialog.fadeOut(300,function(){
        $feedbackContent.val('');
        $feedbackAddress.val('');
        $feedbackTexttip.html('0/140');
        $feedbackErrortip.text(' ').hide()
        $feedbackTexttip.removeClass('error')
        $feedbackHuiji.removeClass('show')
        $('#js_feedbackDialog').removeClass('zoom')
      })
    }

    $feedbackContent.on('keyup',function(){
      var len = utils.getStrLen($feedbackContent.val())
      $feedbackTexttip.html(len + '/140')
      $feedbackTexttip[len>140?'addClass':'removeClass']('error')
    })


    function submitFeedback(){
      $feedbackErrortip.text(' ').show()
      if(!$feedbackContent.val()){
        return $feedbackErrortip.text('请输入反馈内容')
      }
      if(utils.getStrLen($feedbackContent.val())>140){
        return $feedbackErrortip.text('反馈内容应小于 140 字')
      }
      // if(!$feedbackAddress.val()){
      //   return $feedbackErrortip.text('请输入联系方式')
      // }
      if($feedbackAddress.val() && !utils.isMail($feedbackAddress.val()) && !utils.isPhone($feedbackAddress.val()) ){
        return $feedbackErrortip.text('联系方式错误，请输入邮箱或者手机号码')
      }
      $feedbackErrortip.text(' ').hide()
      $feedbackTexttip.removeClass('error')
      //发送字段
      $.ajax({
        type: 'POST',
        url: '/qcross/place/public.php?action=feedback',
        data: {
          url: location.href,
          email: '',
          cnt: $feedbackContent.val() + '|' + $feedbackAddress.val(),
          title: ''
        },
        success: function (result) {
          result = JSON.parse(result);
          if (result.error_code === 0) {
            tip('发送成功');
            closeFeedbackDialog();
          } else {
            tip(result.msg);
          }
        },
        error: function () {
          tip('网络异常，请稍候再试');
        }
      })
    }

    
    function tip(message){
      $tip.show().find('.feedback-tip-text').text(message)
      setTimeout(function(){
        $tip.hide()
      },2000)
    }      
  
    $(document)
      .on('click','.web_components_sidebar-item.js_gototop',function(){$("html,body").animate({scrollTop:"0"},500)})
      .on('click','.web_components_sidebar-item.js_gotobottom',function(){$("html,body").animate({scrollTop:document.body.scrollHeight},500)})
      .on('click','.web_components_sidebar-item.js_feedback',showFeedbackDialog)
      .on('click','.js_closefeedbackdialog',closeFeedbackDialog)
      .on('click','.js_submitfeedbackdialog',submitFeedback)
    ;

    var __sidebar = $('.web_components_sidebar');
    var __timer;
    $(window).on('scroll',function(evt) {
      if(__timer){
        window.clearTimeout(__timer)
      }
      __timer = window.setTimeout(function(){
         var st = $('body').scrollTop() || $(document).scrollTop() || $('html').scrollTop();
         if(st>320){ 
          if (__sidebar.is(":hidden")){
            __sidebar.fadeIn(300);
          }
         }else{
          __sidebar.fadeOut(300);
         }
      },200)
    });
  });
</script>

@endsection