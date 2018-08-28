@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')


  <script type="text/javascript">
      function fun(){
        $(".xiaoxi").css("display","none");
      }
  </script>


  <!--[if lte IE 8]>
  <script>
                  (function(){
                      var e="abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(","),
                      i=e.length;
                      while(i--){document.createElement(e[i])}
                   })();
              </script>
  <![endif]-->

    <link rel="stylesheet" type="text/css" href="/home/wenda/wenda1/css/ask.1457079.css" />
    <link rel="stylesheet" type="text/css" href="/home/wenda/wenda1/css/question-description.62e8625.css" />
     <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
   


<body class="layout-center ask-new-layout">
    <div id="body" class="container">
      <div class="ask-wrapper">
          <div class="ask-main-box">
              <div class="question-description f-pening" id="question-description">
                <div class="qb-layout-tit">
                   <i class="iknow-ask_icons i-status-being grid mr-10"></i>
                    <span class="ask-title f-pening">
                      提问
                    </span>
                </div>
                <form action="/home/mach/2/edit" method="get">
                     {{ csrf_field() }}
                    <div class="qd-layout">
                        <div class="qd-content">
                              <div class="qd-ct qd-title">
                                  <textarea id="title-area" placeholder="标题：写下你的问题" name="wtitle" onclick="fun()" ></textarea>
                                  <span id="title-count" class="count"><b>最长可输入</b>20字符</span>
                                  
                               </div>
                         </div> 
                        @if ($errors->has('wtitle'))
                           <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('wtitle') }}</p >
                        @endif
                        
                        <div id="title-error-tip" class="f-12"></div>
                            <ul class="qd-content-suggestion">
                            </ul><br><br><br>
                        
                        <h1>请详细描述下问题</h1>
                           
                              <!-- 加载编辑器的容器 -->
                        <script id="container" name="wcontent" type="text/plain" style="height: 200px;" onclick="fun()">
                       </script> 
                       @if ($errors->has('wcontent'))
                          <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('wcontent') }}</p >
                       @endif         
                    </div>

                  <div class="wgt-submit">
                    <div id="normail-submit-panel">
                      <div class="clearfix" id="submit-panel" data-hide="doctor">
                        <div id="ik-authcode-outer" style="display: none;"></div>
                          <input type="submit" value="登录提交" class="submit-btn disabled" id="submit-btn"> 
                      </div>
                    </div>
                  </div>
                </form>
            </div>
          </div>
      </div>
    </div>

<!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
          toolbars: [
               ['fullscreen', 'source', 'undo', 'redo'],
                  ['bold', 'italic', 'underline', '|', 'forecolor','emotion', 'cleardoc','|','imagecenter','justifyleft','justifyright', 'justifycenter', 'justifyjustify',]
              ]
        });
    </script>


@endsection