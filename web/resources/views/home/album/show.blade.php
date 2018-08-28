
<title></title>

<link rel="shortcut icon" href="" />
<script>
window.QYER = {
    uid: 0};
window.__qRequire__ = {version:1529486646};
</script>

<link rel="stylesheet" href="/home/xiangce/css/fe_frame_16302440db9076f2f908efe40262811f.css">
<link rel="stylesheet" href="/home/xiangce/css/photo_album_8fdc8e04525cd6c7c597a967b9351c87.css">
<script src="/home/xiangce/js/fe_frame_9be867cd1733aba346e2571954f8593d.js"></script>
<script src="/home/xiangce/js/photo_album_9306bfa69b7ea03369c86a5d372af151.js"></script>


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

<script type="text/javascript">
window.authorUid = 161720;
</script>
<!-- 公共导航 -->


<style type="text/css">
    .pos img{
        cursor: pointer;
        transition: all 0.6s;
    }
    .pos img:hover{
        transform: scale(1.4);
    }
</style>

<script>
    window.QYER={uid:[0][0]||0};

    window._RATrack = window._RATrack||{
        'platform':'web',
        'channel':'',
        'page_type':'',
        'ugc_type':'',
        'ugc_content':'',
        'abt':''
    };
</script>
<link rel="stylesheet" href="home/xiangce/css/headerfoot_black.min-2b9fe8cff370bc02d93e68713767796c.css">
<!--test-->
<script src="home/xiangce/js/headerfoot_black.min-ff48a3286dff20aad635ebdfdcd8779c.js"></script>

<div class="q-layer-header">
</div>

<div id="photoWrapper" class="pr">
<!-- 左侧菜单 -->

<div class="baseinfo-side" id="baseinfoSide" style="display: block; height: 799px;">
    <a href="javascript:void(0)" class="arrowSquare"></a>
    <div class="baseinfo-inner">
        <div class="baseinfo-userbox">
            <div class="baseinfo-userinfo">
                <div class="avatar">
                    <div class="pos">
                    <a href="/home/geren" target="_blank">

                        <img src="{{ $album -> albumusersdetail -> profile }}" >
                    </a>
                    </div>
                </div>
                <div class="name">
                    <a href="/home/geren" class="fontYaHei" target="_blank">
                    @if(!empty( $album -> albumusersdetail -> nickname ))
                       {{ $album -> albumusersdetail -> nickname }}
                    @else
                       {{ $album -> albumuser -> username }}
                    @endif
                    </a>
                    @if( $album -> albumusersdetail -> sex == 1 )
                        <span class="icon_gender_he" title="男" style="margin-bottom: 7px;"></span>
                    @else( $album -> albumusersdetail -> sex == 2 )
                        <span class="icon_gender_she" title="女"></span>
                    @endif
                </div>
                <div class="intro">
                    <p>
                         {{ $album -> albumusersdetail -> hobby }}
                    </p>
                </div>
                <div class="detail">
                    <a class="box line" href=" " target="_blank">
                        <span>0</span> 关注
                    </a>
                    <a class="box" href=" " target="_blank">
                        <span>711</span> 粉丝
                    </a>
                </div>
            </div>
        </div>
        <div class="baseinfo-sideNavBox">
            <div class="arrow"></div>
            <dl class="baseinfo-sideNav" style="height: 299px;">
                <dt>
                    <a class="icon profile" href="/home/geren"></a>
                    <h4 class="fontYaHei">
                        <a href="/home/geren">
                            个人首页
                        </a>
                    </h4>
                </dt>
                <dd></dd>
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
                    <a class="icon photo" href="home/album"></a>
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
                <dt class="_list">
                    <a class="icon setting"></a>
                    <h4 class="fontYaHei">设置</h4>
                </dt>
                <dd>
                    <ul>
                        <ul>
                        <li><a href="/home/geren">个人资料</a></li>
                        <li><a href="/home/geren/{{ $album -> albumuser -> id }}/editusername">账号绑定</a></li>
                        <li><a href="/home/geren/{{ $album -> albumuser -> id }}/editbeijingpic">背景图片</a></li>
                        <li><a href="/home/geren/{{ $album -> albumuser -> id }}/editpassword">修改密码</a></li>
                        <li><a href="/home/geren/{{ $album -> albumuser -> id }}/editprofile">修改头像</a></li>
                    </ul>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>


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
<div id="mainPanel" class="photo-main">
    <div class="photo-wrapper">
        <div class="crumbs-nav">
            <span><a href="/home/album">TA的相册</a></span>
            <span>&gt;</span>
            <span><a class="albumName current" href="#"> {{ $album -> title }}</a></span>
        </div>
        <div class="photo-head pt40">
            <div class="photo-title">
                <h2>
                    <span class="albumName">
                         {{ $album -> title }}
                    </span>
                </h2>
                <p class="date"> {{ $album -> created_at }}</p>
            </div>
            <div id="addPhotoWrap" class="photo-buttons" style="position: relative;">
                <button id="addPhoto" class="ui-button btn-default-full" style="position: relative; z-index: 1;">
                    <i class="icons icon-upload"></i>
                    <span>
                        <a href="/home/album/create">上传照片</a>
                    </span>
                </button>
               <!--  <a href=" ">
                    <span class="ui-button">管理照片</span>
                </a>
                <button class="ui-button btn-danger btn-delalbum">删除相册</button> -->
                <div id="html5_1cltu1lph18ce1u8cbu7b3kee33_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 16px; width: 100px; height: 30px; overflow: hidden; z-index: 0;">
                    <input id="html5_1cltu1lph18ce1u8cbu7b3kee33" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/png">
                </div>
            </div>
        </div>

        <div class="photo-box" style="z-index:5" >
            <div class="photo-album-detail-section" >
                <div id="photoList" class="photo-list" >
                    <ul>
                        @foreach( $photo as $k =>$v )
                        <li>
                            <a href="/home/big/{{ $k }}" class="img-link" target="_blank">
                                <img src="{{ $photo[$k] }}" onerror="javascript:this.src='/home/xiangce/15346446819189.jpg'" width="120" height="120">
                                <span class="after"></span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
             </div>
        </div>

    </div>
</div>

<style type="text/css">
    #photoList img{
        cursor: pointer;
        transition: all 0.6s;
    }
    #photoList img:hover{
        width: 600px;
        height: 400px;
        transform: scale(1.4);
        /*position:abselute;
        z-index:10;*/
    }
</style>

<!-- 底部 -->

</body>
</html>
