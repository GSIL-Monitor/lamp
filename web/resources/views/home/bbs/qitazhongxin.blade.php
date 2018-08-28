@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

    <style>
        html,body,#app{height:100%;-webkit-overflow-scrolling:touch;}
        body{padding:0;margin:0;}
    </style>
        
    <link rel="preload" href="/home/homess/js/app.746b84a10a3c3eb5691b.js" as="script">

     <style data-vue-ssr-id="c697cb36:0 bc6ba52c:0 bc6ba52c:1 37f0d718:0 43522c1e:0 c3c03004:0 582ed3b3:0 3e50af30:0 644cb8b8:0 7ea8ed8a:0 dff8ba6c:0 71aa27ac:0 5e80898e:0 3f617711:0 8fa0e1ec:0 4b511c92:0 6999d91c:0 096867fc:0 3349c8ca:0 49b3414a:0 3266f7ca:0 2d935fca:0 32e47c40:0 de98be5c:0 7fc57846:0 2cb3e7f8:0 be326e5e:0 3ccbf67a:0 0b70666e:0 3135702f:0 b19db698:0 a1e930e8:0">

    body,button,input,select,textarea{-webkit-font-smoothing:antialiased}#app .el-pager li.active{background:#5ea67c}#app button .el-icon:hover{color:#5ea67c}#app a{text-decoration:none}#app .rea_input{width:75%;height:35px;outline:none;font-size:14px;line-height:30px;padding-left:10px;margin-right:10px;border-radius:3px;border:1px solid #dcdfe6}#app .rea_input:focus{border:1px solid #3f9f5f}

    body{color:#323232;background:#fff;text-align:left;-webkit-font-smoothing:antialiased;font-smoothing:antialiased}article,aside,blockquote,body,button,code,dd,details,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,hr,input,legend,li,menu,nav,ol,p,pre,section,td,textarea,th,ul{margin:0;padding:0;outline:none}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}audio,canvas,video{display:inline-block}body,button,input,select,textarea{font:12px/1.5 Helvetica Neue,Helvetica,Arial,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Heiti SC,WenQuanYi Micro Hei,sans-serif}button,input,select,textarea{font-size:100%;color:#636363;outline:none}textarea{resize:none}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}iframe{display:block}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:500}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:500}q:after,q:before{content:""}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}a{text-decoration:none;color:#0073b6}a:hover{text-decoration:underline}a:focus,input:focus{outline:none}button::-moz-focus-inner,input::-moz-focus-inner{outline:none;border:0;padding:0}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#959595}input:-moz-placeholder,input::-moz-placeholder,textarea:-moz-placeholder,textarea::-moz-placeholder{color:#959595}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#959595}.clear{clear:both}.clearfix{zoom:1}.clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}.fl{float:left}.fr{float:right}.hide{display:none!important}body{min-width:1160px}.q-sticky-footer .q-container{min-height:100vh;-webkit-box-sizing:border-box;box-sizing:border-box;padding-bottom:120px}.q-sticky-footer .q-footer-wrapper{margin-top:-120px;height:120px}.fade-enter-active,.fade-leave-active{-webkit-transition:opacity .3s;transition:opacity .3s}.fade-enter,.fade-leave-to{opacity:0}.login-fade-enter-active,.login-fade-leave-active{-webkit-transition:opacity .3s;transition:opacity .3s}.login-fade-enter-active .q-login-container,.login-fade-leave-active .q-login-container{-webkit-transition:all .3s;transition:all .3s;-webkit-transform:translate(0);transform:translate(0)}.login-fade-enter,.login-fade-leave-to{opacity:0}.login-fade-enter .q-login-container,.login-fade-leave-to .q-login-container{-webkit-transform:translateY(-40px);transform:translateY(-40px)}

    .pic_style{color:#10b041;cursor:pointer}.pic_style span{margin-right:10px}
    .common_block_zan{cursor:pointer;position:absolute;right:0;top:0}.common_block_zan .block{width:90px;text-align:center;color:#636363;border-right:1px solid #e9e9e9;line-height:20px;height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;float:left;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.common_block_zan .icomoon{font-size:32px}.common_block_zan .zan .ico-16:before{content:"\EA10";color:#f5b100}.common_block_zan .zan .ico-17:before{content:"\EA11";color:#f5b100}.common_block_zan .zan:hover{background:#f5b100}.common_block_zan .collect .ico-10:before{content:"\EA0B";color:#ff7466}.common_block_zan .collect .ico-11:before{content:"\EA0C";color:#ff7466}.common_block_zan .collect:hover{background:#ff7466}.common_block_zan .reply .ico-18:before{content:"\EA12";color:#10b041}.common_block_zan .reply .ico-19:before{content:"\EA13";color:#10b041}.common_block_zan .reply .reply_wrap{width:368px;min-height:200px;position:absolute;top:70px;left:-150px;background:#fff;z-index:1;border:1px solid #3f9f5f;padding:10px;-webkit-box-sizing:border-box;box-sizing:border-box}.common_block_zan .reply .reply_wrap .sip_rep_frame{border:1px solid silver}.common_block_zan .reply .reply_wrap .content{min-height:100px;max-height:500px}.common_block_zan .reply:hover{background:#10b041}.common_block_zan .share .ico-43:before{content:"\EA2B"}.common_block_zan .share:hover{background:silver}.common_block_zan .block:hover .text,.common_block_zan .block:hover .zanico:before{color:#fff}.common_block_zan .top_reply{background:#fff;position:absolute}.q_share_icon{margin:0 5px}
    .q_share_icon img[data-v-83ffe64e]{vertical-align:top}.q_share_icon .q_icon[data-v-83ffe64e]{width:24px;height:24px}.q_share_icon .q_icon.sm[data-v-83ffe64e]{width:16px;height:16px}.q_share_icon .q_icon.lg[data-v-83ffe64e]{width:32px;height:32px}

    #pc_title_info{position:relative}#pc_title_info .common_block_zan{height:75px}#pc_title_info .blur_img{position:absolute;left:-30px;top:-30px;width:calc(100% + 60px);height:460px;-webkit-filter:blur(10px);filter:blur(10px);z-index:-1}#pc_title_info .top_info{width:1160px;margin:auto;overflow:hidden;position:relative}#pc_title_info .top_info .bg_img{position:absolute;left:-60px;height:400px}#pc_title_info .top_info .strategy{position:absolute;top:15px;left:15px;z-index:1}#pc_title_info .top_info .strategy a{color:inherit}#pc_title_info .top_info .strategy .strategy_item{color:inherit;text-decoration:underline}#pc_title_info .top_info .strategy .strategy_block{color:inherit;margin:0 5px}#pc_title_info .subject{position:absolute;left:0;bottom:75px;width:100%;height:174px;background:url("home/images/shade.png") repeat-x;background:-webkit-gradient(linear,0 0,0 bottom,from(hsla(0,0%,100%,0)),to(rgba(0,0,0,.6)))}#pc_title_info .subject_con{font-size:24px;position:absolute;left:166px;bottom:20px;width:770px;color:#fff;font-weight:700;z-index:1}#pc_title_info .no_cover_sub{left:0;bottom:20px;color:#323232}#pc_title_info .bottom_info{background:#f0f0f0;height:75px}#pc_title_info .bottom_info .bottom_con{width:1160px;margin:0 auto;height:75px;font-size:14px;position:relative}#pc_title_info .bottom_info .bottom_con .left .head_pho{width:120px;height:120px;position:absolute;top:-69px;left:20px}#pc_title_info .bottom_info .bottom_con .left .head_pho .avatar{width:120px;height:120px;position:absolute;border-radius:50%;top:0;left:0;border:4px solid #f0f0f0}#pc_title_info .bottom_info .bottom_con .left .head_pho .auth{position:absolute;right:-8px;bottom:-9px}#pc_title_info .bottom_info .bottom_con .left .head_pho .auth img{width:32px}#pc_title_info .bottom_info .bottom_con .left .detail .top span{cursor:pointer}#pc_title_info .bottom_info .bottom_con .left .detail .top .user_name{font-size:15px;margin-right:10px;font-weight:700;color:#636363}#pc_title_info .bottom_info .bottom_con .left .detail .top .user_name:hover{color:#10b041}#pc_title_info .bottom_info .bottom_con .left .detail .top .level{margin-right:10px;border-left:1px solid silver;padding-left:10px;color:#636363;cursor:default}#pc_title_info .bottom_info .bottom_con .left .detail .top .jh{background:#ff735f;font-size:12px;padding:0 5px;color:#fff;border-radius:2px;height:20px}#pc_title_info .bottom_info .bottom_con .left .detail .top .jh img{width:12px}#pc_title_info .bottom_info .bottom_con .left .detail .top .jh img:last-child{margin-right:3px}
    </style>

        <div>
            <div id="pc_title_info">
                <!-- 模糊背景 -->
                <img src="{{ $article -> pro }}" class="blur_img">
                <div class="top_info" style="height:400px;">
                    <div class="strategy" style="color:#fff;display:;"></div>

                    <!-- 背景图 -->

                    <img src="{{ $article -> pro }}" class="bg_img">
                    <div class="subject_con">{{ $article -> summary }}</div>
                </div>
                <div class="subject"></div>
                <div class="bottom_info">
                    <div class="bottom_con flex_bet">
                        <div class="left">
                            <a data-bn-ipg="bbs-thread-top-userphoto" href="/home/info " target="_blank" class="head_pho">

                            <img src="{{ $article -> articlesusersdetail -> profile }}" class="avatar">
                            <span>
                                <div role="tooltip" id="el-popover-6398" aria-hidden="true" class="el-popover el-popper" style="width:undefinedpx;display:none;">
                                    <div style="color:#959595;"></div>
                            </div>
                            </span>
                            <div class="auth">

                            </div>
                            </a>
                        <div class="detail" style="margin-left:170px;">
                            <div class="top" style=" overflow: hidden;background:#f0f0f0; height: 35px;">
                                <a href="/home/info " data-bn-ipg="bbs-thread-top-username" target="_blank" class="user_name">
                                @if(!empty( $article -> articlesusersdetail -> nickname ))
                                    {{ $article -> articlesusersdetail -> nickname }}
                                @else
                                    {{ $article -> articlesuser -> username }}
                                @endif
                                 
                                </a>
                                @if( $article -> articlesusersdetail -> sex == 1 )
                                    <span class="icon_gender_he" title="男"></span>
                                @elseif( $article -> articlesusersdetail -> sex == 2 )
                                    <span class="icon_gender_she" title="女"></span>
                                @endif
                                <span class="level">{{ $article -> title }}</span>
                            </div>
                            <div class="info_bottom only_flex">
                                <span class="only_flex">
                                    <i class="iconfont icon-shijian"></i>
                                    <span>{{ $article -> created_at }}</span>
                                </span>
                                  &nbsp; &nbsp; &nbsp;现居：<a data-bn-ipg="usercenter-grade" href=" " class="fb cBlue pr20">{{ $article -> articlesusersdetail -> addres }}</a>
                            </div>
                        </div>
                    </div>
                    <div counter="[object Object]" class="common_block_zan inl_flex">
                        <div data-bn-ipg="bbs-thread-top-like" class="zan block" style="border-left:  1px solid #e9e9e9;">
                            <div class="icomoon zanico ico-17" style="display:none;"></div>
                            <div class="text" style="text-align: center" >  1008  赞</div>
                        </div>
                        <div data-bn-ipg="bbs-thread-top-collect" class="collect block">
                            <div class="icomoon zanico ico-11" style="display:none;"></div>
                            <div class="text" style="text-align: center">  8888  收藏</div>
                        </div>
                        <div data-bn-ipg="bbs-thread-top-reply" class="reply block" style="position: relative;z-index:1001">
                            <div class="text" style="text-align: center" >  200  回复</div>
                        </div>
                    </div>
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

              <script type="text/javascript">
                $(function() {
                  $(".navsub2").mouseover(function() {
                    $(".navsub_box2").show();
                    $(".navsub_bg2").css("background", "#f1f1f1");
                    $(".navsub_bg2").css("color", "#FA3A39");
                  })
                  $(".navsub2").mouseleave(function() 
                    $(".navsub_box2").hide();
                    $(".navsub_bg2").css("background", "none");
                    $(".navsub_bg2").css("color", "#333333");
                  })
              </script>
            
    <div class="container mt20">
        <!-- 游记 -->
        <div class="boxleft">
            <div class="line_detail">
                <div class="hdbox_left">
                        <div class="detxq">
                            
                            <div class="detailbox">
                                <div class="daybox">
                                    <div class="boxleft">
                                        <h1>YQ</h1>
                                    </div>
                                    <div class="boxright">
                                        <h1><span>游记</span>{{ $article -> summary }}</h1>
                                        <div class="boxdt">
                                            <ul>
                                                <li><span><i class="iconfont icon-shijian"></i>发表时间：</span>{{ $article -> updated_at }}&nbsp;&nbsp;&nbsp;</li>
                                                <li><span><i class="iconfont icon-dizhi"></i>地　　点：</span>{{ $article -> site }}</li>
                                                <li><span><i class="iconfont icon-fuzhi"></i>行程简介：</span>
                                                </li>
                                                 <li><p>{!! $article -> content !!}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 游记结束  -->
        <div class="boxright">
            <!--所有游记-->
            <div class="title">其他游记
                <a href="/home/info">更多&nbsp;>></a>
            </div>
            <div class="bbgl">
                <h1>
                    <a href="#"><img src="{{ $article -> pro }}"/>
                    <p></p>
                    <span>&nbsp;世界很大 我想去看看</span>
                    </a>
                </h1>
               

            </div>
            <!--bbgl end-->

        </div>
    </div>





<script src="/home/huifu/static/js/fe_frame_9be867cd1733aba346e2571954f8593d.js"></script>

<script src="/home/huifu/static/js/photo_detail_c5c7fee5cdef5924c7e9fa5daad3fbb8.js"></script>


<div class="photo-auther" style="margin-left: 200px;">
    
    <a href=" ">
        <img src="/home/huifu/static/picture/646fa3468aa842bd91ce0d91d1284a98.gif"  style="border-radius: 50%;" width="60" height="60">
    </a>
    <div class="photo-comment"  >
        <div class="comment-input comment-form">
            <textarea class="txt-comment ui-input"></textarea>
            <div class="comment-oper">
                <span class="text-num">
                    <em>0</em>/140字
                </span>
                <span class="ui-error-text" >
                    <i class="icons icon-error"></i>
                 
                </span>
                <button class="ui-button btn-default-full btn-comment">评论</button>
            </div>
        </div>
    </div>
</div>

  <div class="photo-comment"  >
        <div class="comment-input comment-form">
            <textarea class="txt-comment ui-input"></textarea>
            <div class="comment-oper">
                <span class="text-num">
                    <em>0</em>/140字
                </span>
                <span class="ui-error-text" >
                    <i class="icons icon-error"></i>
                 
                </span>
                <button class="ui-button btn-default-full btn-comment">评论</button>
            </div>
        </div>
    </div>
    <div class="bank30"></div>






<script>
window.QYER = {
    uid: 0};
window.__qRequire__ = {version:};
</script>








<script>
    window.PHOTOINFO = { };
</script>

@endsection


