        
    <title>发布游记</title>
     <script type="text/javascript" src="/home/js/jquery-1.10.2.min.js"></script>
    <style>
        #threadTitle::-moz-placeholder {
            color: #a5e4b3 !important;
        }

        #threadTitle:-ms-input-placeholder {
            color: #a5e4b3 !important;
        }

        #threadTitle::-webkit-input-placeholder {
            color: #a5e4b3 !important;
        }
    </style>

    <style type="text/css">

        .qy_issue_mask {
            position: fixed;
            background: #f8f8f8;
            width: 100%;
            text-align: center;
            height: 50px;
            z-index: 1000;
            border-bottom: 1px solid #f2f2f2;
            top: 0;
        }

        .pub-jieban.active {
            background-color: #10b041;
            color: #fff;
            font-size:20px;
            float: right;
            margin-right: 20px;
        }
        .jieban-mask a {
            float: right;
            width: 120px;
            line-height: 51px;
            font-size: 14px;
            color: #959595;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }


        .qy_issue_mask {
            position: fixed;
            background: #f8f8f8;
            width: 100%;
            text-align: center;
            height: 50px;
            z-index: 1000;
            border-bottom: 1px solid #f2f2f2;
            top: 0;
        }

        .qy_issue_wrap{
            width:600px;
            margin-top:60px;
            text-align:center;
            line-height:40px;
            margin:0 auto;
        }
        #threadTitle{
            font-size: 30px;
            height: 40px;
            line-height: 40px;
            overflow: hidden;
            word-wrap: break-word;
            word-break: break-all;
            border-bottom: 1px solid #a5e4b3;
            font-family: Hiragino Sans GB,Microsoft YaHei,\9ED1\4F53,\5b8b\4f53,sans-serif;
            color: #10b041;
        }

         h3{

            display: block;
            font-size: 1.17em;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            font-weight: bold;
            text-align: left;
         }
        .gowithdate-wrap {
            padding-bottom: 8px;
            text-align: left;
            font-size: 20px;
        }
        .contactway-wrap textarea {
            padding: 2px 10px;
            box-sizing: border-box;
            width: 560px;
            height: 67px;
            border: 1px solid #d7d7d7;
            border-radius: 3px;
            font-size: 14px;
            line-height: 26px;
        }
        .title {
        color: #10b041;
        font-size: 28px;
        position: relative;
        padding-top: 100px;
    </style>

</head>

<body>

    <script type="text/javascript">
        function fun(){
            $(".xiaoxi").css("display","none");
        }
    </script>

        <!-- 发布系统 -->
        <div class="qy_issue_wrap ">

        <form class="mws-form" action="/home/bbs" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- 发布标题 -->
            <div class="title" >
                <input id="threadTitle" type="text" placeholder="键入游记标题" style="width: 100%; border-top: none; border-right: none; border-left: none; " name="title" onclick="fun()" value="{{ old('title') }}">
             </div>

            @if ($errors->has('title'))
                <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('title') }}</p >
            @endif

            <div>
                <!-- 发布标题 -->
                <input id="threadTitle" type="text" placeholder="输入摘要,快速吸引小伙伴" style="width: 100%;border:none;border-bottom: 1px solid #a5e4b3; color:#10b041" name="summary" onclick="fun()" value="{{ old('summary') }}">
            </div>
                <div style="color: #ccc">
                    @if ($errors->has('summary'))
                    <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('summary') }}</p >
                    @endif
                </div>
            
                <div class="jiebandes-wrap" id="gowithDestination">
                    <span style="width: 10%;border:none;border-bottom: 1px solid #a5e4b3;">主题图片</span> |
                    <input  type="file"  style="width: 85%;border:none;border-bottom: 1px solid #a5e4b3; color:#10b041" name="pro" onclick="fun()" value="{{ old('pro') }}">
                </div>
                <div style="color: #ccc">
                    @if ($errors->has('pro'))
                    <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('pro') }}</p >
                    @endif
                </div>
                 <div class="jiebandes-wrap" id="gowithDestination">
                    <span style="width: 10%;border:none;border-bottom: 1px solid #a5e4b3;">游记地点</span> |
                    <input  type="text"  style="width: 85%;border:none;border-bottom: 1px solid #a5e4b3; color:#10b041" placeholder="世界很大,键入地点" name="site" onclick="fun()" value="{{ old('pro') }}">
                </div>
                <div style="color: #ccc">
                    @if ($errors->has('site'))
                    <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('site') }}</p >
                    @endif
                </div>
                <div style="height: 20px;"></div>
                <!-- 配置文件 -->
                <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
                <!-- 编辑器源码文件 -->
                <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>

                <!-- 加载编辑器的容器 -->
                <script id="container" name="content" type="text/plain" style="width: 600px; height:200px">
                 
                </script>    
            @if ($errors->has('content'))
                <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('content') }}</p >
            @endif
    </div>

            <!-- 浮动层 -->
            <div class="qy_issue_mask jieban-mask x-filter-blur">
                <span class="" >
                    <img src="/home/img/logo1.png"  style="width:150px;height:50px; float:left">
                </span>
                <input type="submit" style="width: 150px;height: 50px;  float:right;"  class="pub-jieban active" value="发布游记">
                <a href="/home/bbs" class="pub-savedraft">返回</a>
            </div>
  
            <!--  实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container',{
                    toolbars: [
                    
                        [,'fullscreen', 'undo', 'redo','|','bold', 'italic', 'underline', 'fontborder',  'simpleupload','insertimage','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'cleardoc']
                    ]
                });
                // var ue = UE.getEditor('container');
            </script>

  </form>
</body>
</html>
