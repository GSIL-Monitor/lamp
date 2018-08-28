
<script>
window.QYER = {
    uid: 0};
window.__qRequire__ = {version:1529486646};
</script>

<script src="/home/xiangce/js/photo_album_9306bfa69b7ea03369c86a5d372af151.js"></script>
<link rel="stylesheet" href="/home/xiangce/css/fe_frame_16302440db9076f2f908efe40262811f.css">
<link rel="stylesheet" href="/home/xiangce/css/photo_album_8fdc8e04525cd6c7c597a967b9351c87.css">
<script src="/home/xiangce/js/fe_frame_9be867cd1733aba346e2571954f8593d.js"></script>

<link rel="stylesheet" href="/home/bootstrap/css/bootstrap.min.css">
<script src="/home/bootstrap/js/bootstrap.min.js"></script>
<!-- 引入layui-v2.2.6 -->
<link rel="stylesheet" href="/layui-v2.2.6/css/layui.css">
<script src="/layui-v2.2.6/layui.js"></script>
<script src="/layui-v2.2.6/jquery-1.8.3.js"></script>


<script>
    window._RATrack = window._RATrack||{
        'platform':(/qyer\/|lastminute\/|qyer-guideapp\/|planer\//gi.test(navigator.userAgent) ? 'apph5' : 'mobile'),
        'channel':'',
        'page_type':'',
        'ugc_type':'',
        'ugc_content':''
    };
</script>

</head>
<body>

<style type="text/css">
    .pos img{
        cursor: pointer;
        transition: all 0.6s;
    }
    .pos img:hover{
        transform: scale(1.4);
    }
</style>

<script type="text/javascript">
window.authorUid = 161720;
</script>
<!-- 公共导航 -->

<link rel="stylesheet" href="/home/xiangce/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
<!--test-->
<script src="/home/xiangce/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>

<div id="photoWrapper" class="pr">
<!-- 左侧菜单 -->
<div class="baseinfo-side" id="baseinfoSide" style="display: block; height: 799px;">
    <a href="javascript:void(0)" class="arrowSquare"></a>
    <div class="baseinfo-inner">
        <div class="baseinfo-userbox">
            <div class="baseinfo-userinfo">
                <div class="avatar">
                    <div class="pos">
                    <a href="/home/info" target="_blank">

                        <img src="@if(!empty($user -> Usersdetail -> profile))  {{ $user -> Usersdetail -> profile }} @else /home/moremimg/1.gif @endif"  />
                    </a>
                    </div>
                </div>
                <div class="name">
                    <a href="/home/info" class="fontYaHei" target="_blank">
                        @if(!empty( $user -> Usersdetail -> nickname ))
                           {{  $user -> Usersdetail -> nickname }}
                        @else
                           {{ $user -> username }}
                        @endif
                    </a>
                         @if( $user -> Usersdetail -> sex == 1 )
                            <span class="icon_gender_he" title="男" style="margin-bottom: 7px;"></span>
                        @else( $user -> Usersdetail -> sex == 2 )
                            <span class="icon_gender_she" title="女"></span>
                        @endif
                        <!-- <span class="gender male"></span> -->
                    </div>
                <div class="intro">
                    <p> {{  $user -> Usersdetail -> hobby }}  </p>
                </div>
                <div class="detail">
                    <a class="box line" href="  " target="_blank">
                        <span> 0  {{--  --}} </span>关注
                    </a>
                    <a class="box" href="  " target="_blank">
                        <span>711
                            {{--  --}}
                        </span>粉丝
                    </a>
                </div>
            </div>
        </div>
        <div class="baseinfo-sideNavBox">
            <div class="arrow"></div>
            <dl class="baseinfo-sideNav" style="height: 299px;">
                <dt>
                    <a class="icon profile" href=" "></a>
                    <h4 class="fontYaHei">
                        <a href="/home/info ">
                            个人首页
                        </a>
                    </h4>
                </dt>
                <dd></dd>
                <dd></dd>
                <dt>
                    <a class="icon thread" href="/home/info"></a>
                    <h4 class="fontYaHei">
                        <a href="/home/info">
                        帖子
                        </a>
                    </h4>
                </dt>
                <dd></dd>
                <dt>
                    <a class="icon photo" href="/home/album"></a>
                    <h4 class="fontYaHei">
                        <a href="/home/album">
                         相册
                        </a>
                    </h4>
                </dt>
                <dd></dd>
                <dt>
                    <a class="icon answer" href="/home/mach"></a>
                    <h4 class="fontYaHei">
                        <a href="/home/mach">
                        问答
                        </a>
                    </h4>
                </dt>
                <dd></dd>
                <dt>
                    <a class="icon plan" href="/home/forums"></a>
                    <h4 class="fontYaHei">
                        <a href="/home/forums">
                        结伴同行
                        </a>
                    </h4>
                </dt>
                <dt></dt>
                <dd></dd>
                <dt class="_list">
                    <a class="icon more" href="javascript:void(0);"></a>
                    <h4 class="fontYaHei">更多</h4>
                </dt>
                <dd></dd>
                <dt class="_list">
                    <a class="icon setting"></a>
                    <h4 class="fontYaHei">设置</h4>
                </dt>
                <dd>
                    <ul>
                        <li><a href="/home/geren">个人资料</a></li>
                        <li><a href=" ">我的认证</a></li>
                        <li><a href="/home/geren/{{ $user -> id }}/editusername">账号绑定</a></li>
                        <li><a href=" ">邀请好友</a></li>
                        <li><a href="/home/geren/{{ $user -> id }}/editbeijingpic">背景图片</a></li>
                        <li><a href="/home/geren/{{ $user -> id }}/editpassword">修改密码</a></li>
                        <li><a href="/home/geren/{{ $user -> id }}/editprofile">修改头像</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- 左侧菜单结束 -->


<div id="mainPanel" class="photo-main">
    <div class="photo-wrapper">
        <div class="photo-head pt20">
            <div class="photo-tab">
                <a class="link" >全部照片<em class="small">({{ $sum }})</em></a>
                <a class="link " href=" /home/album">我的相册</a>
            </div>
        </div>


        <div class="photo-box">
            <div class="photo-album-section">
                
                        
   
     <!-- <script type="text/javascript" src="/home/js/jquery-1.10.2.min.js"></script> -->
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


    <script type="text/javascript">
        function fun(){
            $(".xiaoxi").css("display","none");
        }
    </script>

        <!-- 发布系统 -->
    <div class="qy_issue_wrap ">

        <form class="mws-form" action="/home/album" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- 相册标题 -->
            <div class="title" >
                <input id="threadTitle" type="text" placeholder="相册名称" style="width: 61.8%; border-top: none; background-color: #F1FAF7; border-right: none; border-left: none;font-size:30px; " name="title" onclick="fun()" value="{{ old('title') }}">
             </div>

            @if ($errors->has('title'))
                <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('title') }}</p >
            @endif
            <div style="height:20px;"></div>
            <!-- 相册图片 -->
            <div class="jiebandes-wrap" id="gowithDestination">
                <span style="width: 10%;border:none;border-bottom: 1px solid #a5e4b3;font-size:25px;color: #85E2C7">添加相册</span> |
                <input  type="file" id="iiii" style="width: 50%; font-size:15px;border:none;border-bottom: 1px solid #a5e4b3; color:#10b041" name="photo[]" multiple onclick="fun()"  id="iiii" value="{{ old('photo') }}">
            </div>
            <div style="color: #ccc">
                @if ($errors->has('pro'))
                <p style="display: inline;color: red" class="xiaoxi">{{ $errors->first('pro') }}</p >
                @endif
            </div>
            <div style="height: 30px;"></div>
           <div class="mws-button-row">
              <input type="submit" value="上传"   class="layui-btn">
              <input type="reset" value="重置" class="layui-btn layui-btn-warm">
            </div>
        </form>
    </div>

 </div>
        </div>


    </div>
</div>
</div>

    
</script>
<!-- 底部 -->
<script>
$(document).ready(function(){
    require(["project/js/sideNav"]);
    /**
    * 认证头像图标tip
    */
    requirejs(['web_old_tooltips'], function (){
     $('[data-toggle="tooltip"]').tooltip({
         container: 'body'
     });
    });
});
</script>


<script>
        var script   = document.createElement("script");
        script.type  = "text/javascript";
        script.async = true;
        script.src   = "https:///home/xiangce.qyer.com/qyer_ui_frame/m/js/dist/base_beacon_ga.js";
        document.getElementsByTagName("head")[0].appendChild(script);
</script>
</body>
</html>
