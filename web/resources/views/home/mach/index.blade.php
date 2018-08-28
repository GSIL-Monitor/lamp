@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
  <script type="text/javascript" src="/home/js/ajax3.0-min.js"></script>
  <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
  <link rel="stylesheet" href="/home/wenda/css/style.1b2989828d13f1e19850c0b07ba6c03c.css">
  <script src="/home/wenda/js/header.623fe88c819dda14526eed416ae71791.js"></script>
  <link rel="stylesheet" href="/home/wenda/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
  <script src="/home/wenda/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>
  <style type="text/css">
    .swiper-slide h1 span {
          position: absolute;
          bottom: 1;
          left: 0;
          width: 98%;
          height: 35px;
          overflow: hidden;
          z-index: 2;
          display: block;
          padding-left: 2%;
          line-height: 35px;
          color: #fff;
          font-size: 14px;
      }
    .swiper-slide h1 p {
          position: absolute;
          bottom: 1;
          left: 0;
          width: 100%;
          height: 35px;
          overflow: hidden;
          background: #333;
          filter: alpha(opacity=0);
          -moz-opacity: 0.8;
          -khtml-opacity: 0.8;
          opacity: 0.8;
          z-index: 2;
        }
    .swiper-slide h1 img {
        width: 100%;
        cursor: pointer;
        transition: all 0.6s;
      }

  </style>

  <div class="ask_ad" style="background:#fff;">
        <div class="mkt_zone" style="width:1920px;height:50px;margin:0 0 0 -960px;position:relative;left:50%;padding:0;display:none;z-index:1;background:#fff;" id="zoneid-76" data-countries="" data-areas="" data-bn-ipg="ask-index-banner2">
            <a id="close-zoneid-76" href="#" class="iconfont" style="position:absolute;background:rgba(0, 0, 0, 0.5);color:rgba(255,255,255,0.7);top:17px;right:595px;display: block; width: 16px; height: 16px; text-align: center; line-height: 16px; font-size: 8px; border-radius: 8px;z-index:2;">&#xe605;</a>
        </div>
     
  <!--问答首页 start-->
  <div class="ask_sub_top_bar ask_answer" id="index_sub_bar">
      <div class="ask_top_placeholder">
          <div class="ask_top_wrapper">
              <div class="ask_top_detail">
                    <div class="ask_search_main">
                      <a href="/" class="index_link ">
                        <span class="iconfont">旅游问答</span> 
                        <span class="index_logo">
                          <img src="/home/wenda/picture/logo_bot.png">
                        </span>
                      </a>
                      <div class="ask_search_text">
                          <form action="" method="get" id="formsearch">
                              <input id="keyword" name="search" type="text" value="" placeholder="提问前请先搜索，看看你的问题其他游客是否已经问过" class="ui_input" autocomplete="off"/>
                              <span data-bn-ipg="ask-index-search" onclick="if($.trim($('#keyword').val())!='' && $.trim($('#keyword').val())!='提问前请先搜索，看看你的问题其他游客是否已经问过'){$('#formsearch').submit();}" class="ask_button iconfont">&#58884;</span>
                          </form>
                      </div>
                      <div ><img src="" alt="" ></div>
                    </div>
                    <div class="ask_askhelp_btn">
                        <a class="add-question" data-bn-ipg="ask-index-ask" rel="nofollow" href="/home/mach/create">
                          <img src="/home/wenda/picture/ask_addask_btn.png" />
                          <span>＋</span>我要提问</a>
                    </div>
                    <div class="ask_top_tips">
                        更多疑问请点击这里哦
                        <span class="close">x</span>
                        <span class="triangle-up"></span>
                    </div>
              </div>
          </div>
        </div>
  </div>



  <!-- 轮播图 -->
  <div class="gallery">
      <div class="scroll-btn-wrap prev iconfont" >
        <a class="scroll-btn prev" href="javascript:void(0);"></a>
      </div>
      <div class="scroll-unit">
          <div class="img-scroll clearfix">
              <div class="scroll-cell ">
                  <div class="page_waper">
                      <a href="javascript:;" target="_blank" data-bn-ipg="ask-index-banner-1">
                          <img src="/home/wenda/picture/f127d0051bd949b88576dfb45a103b2d.gif">
                          <div class="imgmask"></div>
                          <div class="banner_title">
                            <h3></h3>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="scroll-cell ">
                  <div class="page_waper">
                      <a href="javascript:;" target="_blank" data-bn-ipg="ask-index-banner-2">
                          <img src="/home/wenda/picture/f21d05d64bb94e6fb92a5fbc938a87e6.gif">
                          <div class="imgmask"></div>
                          <div class="banner_title">
                              <h3>东进阪出14天交通问题</h3>
                            本周精选
                          </div>
                      </a>
                  </div>
              </div>
              <div class="scroll-cell ">
                  <div class="page_waper">
                      <a href="javascript:;" target="_blank" data-bn-ipg="ask-index-banner-3">
                        <img src="/home/wenda/picture/4a554cc117904b32a2f07e68e826f90b.gif">
                        <div class="imgmask"></div>
                        <div class="banner_title">
                          <h3></h3>
                        </div>
                      </a>
                  </div>
              </div>
              <div class="scroll-cell ">
                <div class="page_waper">
                    <a href="javascript:;" target="_blank" data-bn-ipg="ask-index-banner-4">
                      <img src="/home/wenda/picture/cd678eafce90409b9bbf2424887a78cf.gif">
                      <div class="imgmask"></div>
                      <div class="banner_title">
                        <h3></h3>
                       </div>
                    </a>
                </div>
              </div>
              <div class="scroll-cell ">
                  <div class="page_waper">
                      <a href="javascript:;" target="_blank" data-bn-ipg="ask-index-banner-5">
                        <img src="/home/wenda/picture/d2b9c9bff81641c0b121ffcfdba1fba2.gif">
                        <div class="imgmask"></div>
                        <div class="banner_title">
                          <h3>当旅行问题遇上男女朋友</h3>
                          问答合集·2.14特辑
                        </div>
                      </a>
                  </div>
              </div>
          </div>
      </div> 
  </div>

<!-- <script type="text/javascript">
    $(function () {
          //点赞功能
          $('.zan').on('click', function () {
            var id=$(this).attr("rel");      //获取到文章id;
            $.get("/home/praise/zan/"+id,function(res){
              
                if(res != 'error'){
                 // $('.zan').($(this)).text(res+'赞');
                   alert('点赞成功！');
                   window.location.reload();  //点赞成功后刷新页面更新新的点赞次数
               }else{
                 
                   alert('点赞失败！');
                  // window.location.reload();  //点赞成功后刷新页面更新新的点赞次数
              }
             });
          });
            //浏览功能
            $('.liulan').on('click', function () {
              var id=$(this).attr("rels");      //获取到文章id;
              $.get("/home/praise/liulan/"+id);
              });
        });
    
  </script>  -->



    <div class="scroll-btn-wrap next" >
      <a class="scroll-btn next iconfont" href="javascript:void(0);"></a>
    </div>

<div class="ask_index_wp">
  <div class="ask_index_left">
       <h3 class="ask_title" data-title="elite">
          <span class="fr">
              <a href="javascript:;" target="_blank"><span class="iconfont">&#58909;</span> 探路者招募 ></a>
          </span>
          <ul>
              <li data-page="0">精选问答</li>
              <li><a href="javascript:;" data-bn-ipg="ask-index-new"></a></li>
              <li><a href="javascript:;" data-bn-ipg="ask-index-unanswered"></a> <span class="sos"></span>
              </li>     
          </ul>
        </h3>

        <div class="ask_index_list" >
            <!-- 精选问答 -->
              <ul class="index_answer" id="newElite" ">
              @foreach ( $mach as $k => $v )
                  <li data-bn-ipg="ask-index-elite-1">
                        <div class="ui_headPort">
                            <a class="avatar" href="javascript:;" rel="nofollow" target="_blank">
                              <img width="48" height="48" src="/home/wenda/picture/575eb983c3504e319dee568888f82ef8.gif" onerror="this.src='https://static.qyer.com/images/user2/avatar/small1.png'">
                            </a>
                        </div>
                        <div class="add_headPort">
                            <a class="avatar" href="javascript:;" rel="nofollow" target="_blank"></a>
                                  提问的问题?
                            <div class="certification_box">
                                <span class="certification_desc"><span class="triangle-down"></span></span>
                            </div>
                        </div>
                        <div class="ask_index_list_content">
                          <a href="/home/mach/{{ $v->id }}/detail" target="_blank" class="liulan" rels="{{ $v->id }}">
                            <h4>{{ $v->wtitle }}</h4>
                            <div class="clearfix">
                                  <p class="truncation_2">{!! $v->wcontent !!}</p>
                            </div>
                          </a>
                        </div>
                        <div class="index_list_bot">
                          <div class="index_list_bot_right">
                              <a href="javascript:;" target="_blank" class="zan" rel="{{ $v->id }}">
                                <span><span class="iconfont">&#xe697;</span>{{ $v->wzan }}个 点赞</span>
                                <span class="line">|</span>
                              </a>
                              <a href="javascript:;" target="_blank"  >
                               <span><span class="iconfont" >&#58910;</span>{{ $v->wliulan }}次 浏览</span>
                              </a>
                          </div>  
                          <strong class="ask_tag_strong">发布问题时间：</strong>
                          <strong class="ask_tag_strong">{{ $v->created_at }}</strong>
                         </div><br>
                         
                       <h4><font style="color: #ccc;">请各位旅友们互相帮忙、查看问题合理回答！</font></h4>
                  </li>
                  @endforeach                                
              </ul>
              

             <!--  <div class="click_more">点击加载更多<span class="more_span animated">...</span></div>
             <div class="last_page">没有更多内容了</div>
             <div class="load_more ">正在加载<span class="more_span animated">...</span></div> -->
        </div>
  </div>

<!-- <script type="text/javascript">
    
          //点赞功能
          $('.zan').on('click', function () {
            var id=$(this).attr("rel");      //获取到文章id;
            $.get("/home/praise/zan/"+id,function(res){
              
                if(res != 'error'){
                 // $('.zan').($(this)).text(res+'赞');
                   alert('点赞成功！');
                   $('.zan').text(res+'赞');
                   //window.location.reload();  //点赞成功后刷新页面更新新的点赞次数
               }else{
                 
                   alert('点赞失败！');
                  // window.location.reload();  //点赞成功后刷新页面更新新的点赞次数
              }
             });
          });
            //浏览功能
            $('.liulan').on('click', function () {
              var id=$(this).attr("rels");      //获取到文章id;
              $.get("/home/praise/liulan/"+id);
              });
     
    
  </script> -->
 

    <!-- 右侧 -->
    <div class="ask_sidebar fr" style="margin-top:30px;"><br><br>
      <div class="tmright" style="width:330px;padding:5px;height: 510px" >
          <div class="tmright_top"><i class="iconfont icon-fuzhi"></i>广告推荐</div>
              <div id="gundon" class="swiper-container">
                  <div class="swiper-wrapper">
                    @foreach ( $job as $k=>$v )
                     <div class="swiper-slide">
                        <h1>
                            <a href="{{ $v->jhttp }}"><img src="{{ $v->jpice }}" style="height:100px;width:330px">
                            <p></p>
                            <span> {{ ++$k }} &nbsp;&nbsp;&nbsp;{{ $v->jtitle }}</span>
                            </a>
                        </h1>
                    </div>
                    @endforeach      
          </div>
    </div>
 

    <script type="text/javascript">

            window.onload = function() {
              var swiper = new Swiper('#gundon', {
                loop: true,
                mode: 'vertical',
                autoplay: 1500,
                slidesPerView: 3,
                //其他设置
               });

            var comtainer = document.getElementById('gundon');
            comtainer.onmouseenter = function () {
              swiper.stopAutoplay();
            };
            comtainer.onmouseleave = function () {
              swiper.startAutoplay();
            }
        }
    </script>
</div>

      <div class="weeklist" >
          <div class="weeknav" style="text-align: center; font-size: 30px;">
               <span class="select"><font style="color: #ccc;">本周排行榜</font></span>
          </div>
          <div class="weekli">
              <ul>
                  <li>
                      <span class="weekico">1</span>
                      <span class="weekimg">
                        <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                        <a href="http://www.qyer.com/u/1138392/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/ba2c543e2fc44f3a9188341f8a87ef63.gif" rel="nofollow"></a>
                      </span>
                      <span class="weekname"><a href="http://www.qyer.com/u/1138392/ask" class="img" target="_blank">wcm360</a></span>
                      <span class="weeknum">19291分</span>
                  </li>
                  <li>
                      <span class="weekico">2</span>
                      <span class="weekimg">
                          <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                          <a href="http://www.qyer.com/u/3036307/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/5dd5a12f6af844c49314bc8737f5701b.gif" rel="nofollow"></a>
                      </span>
                      <span class="weekname"><a href="http://www.qyer.com/u/3036307/ask" class="img" target="_blank">gzsclf</a></span>
                      <span class="weeknum">17892分</span>
                  </li>
                  <li>
                      <span class="weekico">3</span>
                      <span class="weekimg">
                          <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                          <a href="http://www.qyer.com/u/4674077/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/02da295cb9c64751a8881c76f23a90f4.gif" rel="nofollow"></a>
                      </span>
                      <span class="weekname"><a href="http://www.qyer.com/u/4674077/ask" class="img" target="_blank">cotaku</a></span>
                      <span class="weeknum">16835分</span>
                  </li>
                  <li>
                      <span class="weekico">4</span>
                      <span class="weekimg">
                          <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                          <a href="http://www.qyer.com/u/6915534/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/cc498ea854414e33810f4ef057a324ff.gif" rel="nofollow"></a>
                      </span>
                      <span class="weekname"><a href="http://www.qyer.com/u/6915534/ask" class="img" target="_blank">空心大哥</a></span>
                      <span class="weeknum">15686分</span>
                  </li>
                  <li>
                      <span class="weekico">5</span>
                      <span class="weekimg">
                          <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                          <a href="http://www.qyer.com/u/503614/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/218539b500ce4814b0ab8ac313606ffb.gif" rel="nofollow"></a>
                      </span>
                      <span class="weekname"><a href="http://www.qyer.com/u/503614/ask" class="img" target="_blank">爱啃骨头的猪</a></span>
                      <span class="weeknum">15332分</span>
                  </li>
              </ul>
          </div>
        </div>
    </div>
   <script src="/home/wenda/js/footer.c920a3c0767659c3a3d005cc4d4c338c.js"></script>
</div>

@endsection