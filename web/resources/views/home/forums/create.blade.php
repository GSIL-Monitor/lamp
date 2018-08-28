<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>结伴发布页</title>
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
            font-size:30px;
            float: right;
            margin-right: 20px;
            border-radius:10px;
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


    <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    


    <form action="/home/forums/jiebanfabu/1" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <!-- 发布系统 -->
        <div class="qy_issue_wrap ">
            <!-- 发布标题 -->
        	<div class="title" >
                <input id="threadTitle" type="text" placeholder="输入结伴标题，快速吸引小伙伴" style="width: 100%; border-top: none; border-right: none; border-left: none; " name="btitle" onclick="fun()" value="{{ old('btitle') }}">
             </div><br>
              
			@if ($errors->has('btitle'))
                <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('btitle') }}</p ><br>
			@endif
           
            <div>
                <input id="threadTitle" type="text" placeholder="请填写您的目的地城市" style="width: 100%;border:none;border-bottom: 1px solid #a5e4b3; color:#10b041;font-size:25px;" name="badd" onclick="fun()" value="{{ old('badd') }}">
            </div>
                
			@if ($errors->has('badd'))
            <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('badd') }}</p >
			@endif
				
            <div>
                <h3>结伴日期</h3>
                <div class="gowithdate-wrap">
                    <label for="meeting">出发日期</label>&nbsp;&nbsp;&nbsp;<input  id="meeting" type="date"  value="YYYY-MM-DD"/ name="bsettime" onclick="fun()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label for="meeting" class="xml46">结束日期</label>&nbsp;&nbsp;&nbsp;<input id="meeting" type="date"  value="YYYY-MM-DD"/ name="bouttime" onclick="fun()">
                </div>
	            <div class="gowithdate-wrap" style="font-size: 15px">
		             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            @if ($errors->has('bsettime'))
		            <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('bsettime') }}</p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					@endif 
					@if ($errors->has('bouttime'))
		            <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('bouttime') }}</p >
					@endif 
				</div>
            </div>

            <!--联系方式-->
            <div class="contactway-wrap">
                <h3>联系方式</h3>
                <textarea id="contactWay" placeholder="请输入您的联系方式" name="bphones" onclick="fun()" ></textarea> 
                <div style="color: #ccc">
	                @if ($errors->has('bphones'))
			           <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('bphones') }}</p >
					@endif
				</div>
            </div>
            <!--展示图片-->
            <div class="contactway-wrap">
                <h3>请选择文件上传一张清晰的展示图</h3>
                 <input  type="file" id="destComplete" name="bpice"   style="width: 100%;border:none; color:#10b041" />
                
                    @if ($errors->has('bphones'))
                       <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('bpice') }}</p >
                    @endif
            </div>

           <h3 class="editor-h3">结伴详情</h3>
              <!-- 加载编辑器的容器 -->
            
            <script id="container" name="content" type="text/plain" style="width:100%;height:200px;" onclick="fun(1)">
             
            </script>
            @if ($errors->has('content'))
            	<p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('content') }}</p >
			@endif
        </div>

        <!-- 浮动层 -->
        <div class="qy_issue_mask jieban-mask x-filter-blur">
        	<span class="" ><img src="/home/img/logo1.png" style="width:150px;height:50px; float:left"></span>
            <input type="submit" value="发布结伴" class="pub-jieban active " >
        </div>
    </form>

 <!--  实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['fullscreen', 'source', 'undo', 'redo'],
                ['bold', 'italic', 'underline', 'fontborder',  'simpleupload','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'selectall', 'cleardoc']
            ]
        });
    </script>
</body>
</html>
