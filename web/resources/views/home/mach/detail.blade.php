@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
    <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>

    <link rel="stylesheet" href="/home/wenda/css/style.1b2989828d13f1e19850c0b07ba6c03c.css">
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
                          <form action="/search" method="get" id="formsearch">
                                <input id="keyword" name="q" type="text" value="" placeholder="此页为问题回答页,如需提交新的问题,请点击后面的按钮,进行提问!!!" class="ui_input" autocomplete="off" disabled="disabled"  />
                          </form> 
                          <div id="search_menu"></div>
                        </div>
                        <div></div>
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

        <div class="ask_index_list">
			      <!-- 精选问答 -->
			      <ul class="index_answer" id="newElite">
			           <li data-bn-ipg="ask-index-elite-1">
			                <div class="ui_headPort">
			                    <a class="avatar" href="javascript:;" rel="nofollow" target="_blank">
			                      <img width="48" height="48" src="/home/wenda/picture/575eb983c3504e319dee568888f82ef8.gif" onerror="this.src='https://static.qyer.com/images/user2/avatar/small1.png'">
			                    </a>
			                </div>
			                <div class="add_headPort">
			                    <a class="avatar" href="javascript:;" rel="nofollow" target="_blank"></a>
			                          请教的问题?
			                    <div class="certification_box">
			                        <span class="certification_desc"><span class="triangle-down"></span></span>
			                    </div>
			                </div>
			                <div class="ask_index_list_content">
			                  <a href="javascript:;" target="_blank">
			                    <h4>{{ $mach->wtitle }}</h4>
			                    <div class="clearfix">
			                          <p class="truncation_2">{!! $mach->wcontent !!}</p>
			                    </div>
			                  </a>
			                </div>
			                <div class="index_list_bot">
			                  <div class="index_list_bot_right">
			                      <a href="javascript:;" target="_blank" >
			                        <span><span class="iconfont">&#xe697;</span>{{ $mach->wzan }}个 点赞</span>
			                        <span class="line">|</span>
			                      </a>
			                      <a href="javascript:;" target="_blank" >
			                       <span><span class="iconfont" >&#58910;</span>{{ $mach->wliulan }}次 浏览</span>
			                      </a>
			                  </div>  
			                  <strong class="ask_tag_strong">发布问题时间：</strong>
			                  <strong class="ask_tag_strong">{{ $mach->created_at }}</strong>
			                 </div><br><br>
			                 <div>
			                   <a class="index_list_bot_right " class="btn btn-info " href="javascript:;" onclick="fun(this)" style="color: red;font-size:18px;text-decoration: none;" >我要回答</a> <br><br><hr><br>
			                   <div id='huidatijiao'></div><br><br>
			                 </div>
			               
			                @foreach ( $hd as $k => $v )  
			                @if( $mach->id == $v->rid)
			                <div class="ui_headPort">
			                  <a class="avatar" href="http://www.qyer.com/u/1611281" rel="nofollow" target="_blank">
			                    <img width="48" height="48" src="/home/wenda/picture/575eb983c3504e319dee568888f82ef8.gif" onerror="this.src='https://static.qyer.com/images/user2/avatar/small1.png'">
			                  </a>
			                </div>
			            
			                <div class="add_headPort">
			                    <a class="avatar" href="http://www.qyer.com/u/1611281" rel="nofollow" target="_blank">
			                          FightingDarcy
			                    </a>
			                          已回答的问题
			                    <div class="certification_box">
			                        <span class="certification_desc"><span class="triangle-down"></span></span>
			                    </div>
			                          
			                </div>
			                  
			                <div class="ask_index_list_content">
			                    <div class="clearfix">
			                          <p class="truncation_2">{!! $v->rcomment !!}</p>
			                    </div>
			                </div>
			                <div class="index_list_bot">
			                    <div class="index_list_bot_right">
			                        <a href="javascript:;" target="_blank" class="rzan" rel="{{ $v->id }}">
			                          <span><span class="iconfont">&#xe697;</span>{{ $v->rzan }}个 点赞</span>
			                          <span class="line">|</span>
			                        </a>
			                        <a href="javascript:;" target="_blank" class="rliulan" rels="{{ $v->id }}">
			                         <span><span class="iconfont">&#58910;</span>{{ $v->rliulan }}次 浏览</span>
			                        </a>   
			                    </div>  
			                      <strong class="ask_tag_strong">回答时间：</strong>
			                      <strong class="ask_tag_strong">{{ $v->created_at }}</strong>
			                </div><br><br>
			                 @endif
			                 @endforeach
			           </li>
			      </ul> 

        <script type="text/javascript">
          $(function () {
                //点赞功能
                $('.rzan').on('click', function () {
                  var id=$(this).attr("rel");      //获取到回答用户id;
                  $.get("/home/praise/rzan/"+id,function(res){
                      if(res != 'error'){
                        alert('点赞成功！');
                         window.location.reload();  //点赞成功后刷新页面更新新的点赞次数
                     }else{
                         
                         alert('点赞失败！');
                    }
                   });
                });

                  //浏览功能
                  $('.rliulan').on('click', function () {
                    var id=$(this).attr("rels");      //获取到回答用户id;
                    $.get("/home/praise/rliulan/"+id);
                     });
              });
          
        </script>

  		  <div style="display:none;width:750px;" id="form" >
  		        <form action="/home/mach/{{ $mach->id }}" method="post" >
  		          {{ csrf_field() }}
  		          {{ method_field('PUT') }}         
  		          <!-- 编辑器 -->
  		          <script id="huida" name="huida" type="text/plain" style="height: 200px;">
  		          </script> 
  		              <a class="ui_button"  href="javascript:;" onclick="fun(2)" style="font-size:15px;float: left;">取消</a> 
  		           <input type="submit" class="ui_button fr" id="jsanswersubmit" value="回答" data-bn-ipg="ask-question-answer-submit"><br>  
  		      </form>
  		  </div>
  
  		  <script type="text/javascript">
	              function fun(fms) {
	                if(fms == 2){
	                //隐藏
	                document.getElementById('form').style='display:none';
	                }else{
	                  
	                document.getElementById('form').style.display='';
	                $("#form").insertAfter($('#huidatijiao'));
	               
	                }
	                
	              }
  		  </script>

		      <div class="click_more">点击加载更多<span class="more_span animated">...</span></div>
		      <div class="last_page">没有更多内容了</div>
		      <div class="load_more ">正在加载<span class="more_span animated">...</span></div>
		</div>
		</div>


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
               
      			<!-- 本周排行榜 -->
              <div class="weeklist">
                
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
  		                       <span class="weekname">
  		                       		<a href="http://www.qyer.com/u/1138392/ask" class="img" target="_blank">wcm360</a>
  		                       </span>
  		                       <span class="weeknum">19291分</span>
  	                    </li>
                        <li>
                          <span class="weekico">2</span>
                          <span class="weekimg">
                               <img src="/home/wenda/picture/week_ico_01.png" class="crown">
                               <a href="http://www.qyer.com/u/3036307/ask" class="img" target="_blank"><img width="56" height="56" src="/home/wenda/picture/5dd5a12f6af844c49314bc8737f5701b.gif" rel="nofollow"></a>
                           </span>
                          <span class="weekname">
                        	    <a href="http://www.qyer.com/u/3036307/ask" class="img" target="_blank">gzsclf</a>
                          </span>
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
    </div>
     <script src="/home/wenda/js/footer.c920a3c0767659c3a3d005cc4d4c338c.js"></script>
</div>

 <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('huida',{
          toolbars: [
                  ['fullscreen', 'source', 'undo', 'redo'],
                  ['bold', 'italic', 'underline', '|', 'forecolor','emotion', 'cleardoc','|','imagecenter','justifyleft','justifyright', 'justifycenter', 'justifyjustify',]
              ]
        });
    </script>

    
@endsection