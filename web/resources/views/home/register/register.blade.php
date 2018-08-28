@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
	<link rel="stylesheet" type="text/css" href="/register/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="/register/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/register/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
		.containerss {
			margin-top:15px;
		}
		.red {
			color:red;
		}
		#ehong-code-input {
			width:42px;
			letter-spacing:2px;
			margin:0px 8px 0px 0px;
		}
		.ehong-idcode-val {
			position:relative;
			padding:1px 4px 1px 4px;
			top:0px;
			*top:-3px;
			letter-spacing:4px;
			display:inline;
			cursor:pointer;
			font-size:16px;
			font-family:"Courier New",Courier,monospace;
			text-decoration:none;
			font-weight:bold;
		}
		.ehong-idcode-val0 {
			border:solid 1px #A4CDED;
			background-color:#ECFAFB;
		}
		.ehong-idcode-val1 {
			border:solid 1px #A4CDED;
			background-color:#FCEFCF;
		}
		.ehong-idcode-val2 {
			border:solid 1px #6C9;
			background-color:#D0F0DF;
		}
		.ehong-idcode-val3 {
			border:solid 1px #6C9;
			background-color:#DCDDD8;
		}
		.ehong-idcode-val4 {
			border:solid 1px #6C9;
			background-color:#F1DEFF;
		}
		.ehong-idcode-val5 {
			border:solid 1px #6C9;
			background-color:#ACE1F1;
		}
		.ehong-code-val-tip {
			font-size:12px;
			color:#1098EC;
			top:0px;
			*top:-3px;
			position:relative;
			margin:0px 0px 0px 4px;
			cursor:pointer;
		}
	</style>
	<div style="height: 800px">
		<div class="containerss">
    <div class="col-md-6 col-md-offset-3">
        <form action="/home/doregister" method="post" id="form">
        	{{ csrf_field() }}
            <div class="form-group has-feedback">
                <label for="username">用户名</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input id="username" class="form-control" value="" name="username" placeholder="请输入用户名" maxlength="20" type="text" autocomplete="off">
                </div>
                <span style="color:green;display: none;" class="tips" id="a1"></span>
                <span style="color:red;display: none;" class="tips" id="a2"></span>
                <span style="display: none;" class=" glyphicon glyphicon-remove form-control-feedback" id="b1"></span>
                <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" id="b2"></span>
            </div>

            <div class="form-group has-feedback">
                <label for="password">密码</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input id="password" class="form-control" value="" name="password" placeholder="请输入密码" maxlength="20" type="password" autocomplete="off">
                </div>
                <span style="color:green;display: none;" class="tips" id="a3"></span>
                <span style="color:red;display: none;" class="tips" id="a4"></span>
                <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback" id="b3"></span>
                <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" id="b4"></span>
            </div>

            <div class="form-group has-feedback">
                <label for="passwordConfirm">确认密码</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input id="repassword" class="form-control" value="" name="repassword" placeholder="请再次输入密码" maxlength="20" type="password" autocomplete="off">
                </div>
                <span style="color:red;display: none;" class="tips" id="a5"></span>
                <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback" id="b5"></span>
                <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" id="b6"></span>
            </div>

            <div class="form-group has-feedback">
                <label for="phoneNum">手机号码</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    <input id="phone" class="form-control" value="" name="phone" placeholder="请输入手机号码" maxlength="11" type="text" autocomplete="off">
                </div>
                <span style="color:red;display: none;" class="tips" id="a6"></span>
                <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback" id="b7"></span>
                <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" id="b8"></span>
            </div>

            <div class="form-group has-feedback">
                <label>邮箱</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input id="email" class="form-control" value="" name="email" placeholder="请输入邮箱,用于激活帐号" type="text" autocomplete="off">
                </div>
                <span style="color:red;display: none;" class="tips" id="a7"></span>
                <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback" id="b9"></span>
                <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" id="b10"></span>
            </div>
            <div class="form-group">
                <input class="form-control btn btn-primary" id="submit" value="立&nbsp;&nbsp;即&nbsp;&nbsp;注&nbsp;&nbsp;册" type="submit">
            </div>
            
        </form>
        <div class="form-group">
                <a href="/home/login"><input value="已有帐号,前往登录"  class="form-control btn btn-success"></a>
        </div>
    </div>
</div>		
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var isUname = false;
			var isEmail = false;
			var isPhone = false;
			
		    $("#username").focus(function(){
		    	$("#a1").css("display","inline");
		    	$("#a2").css("display","none");
		    	$("#a1").html('请输入5~16位并且以字母开头的用户名');
		    });
		    $("#username").blur(function(){
		    	$("#a1").css("display","none");
		    });

		    $("#password").focus(function(){
		    	$("#a4").css("display","none");
		    	$("#a3").css("display","inline");
		    	$("#a3").html('请输入6~18位的密码');
		    });
		    $("#password").blur(function(){
		   	 	$("#a3").css("display","none");
		    });
		    //验证用户名格式
		    $("#username").blur(function(){
		    	var name = $("#username").val();
		    	var name_preg = /^[a-zA-Z][a-zA-Z0-9_]{4,15}$/;
		    	if(name_preg.test(name)){
		    		
		    		$("#b1").css("display","none");
		    		$("#b2").css("display","inline");
		    	}else{
		    		$("#b2").css("display","none");
		    		$("#b1").css("display","inline");
		    		$("#a2").css("display","inline");
		    		$("#a2").html('用户名格式错误');
		    	}
		    });
		    //验证密码
		    $("#password").blur(function(){
		    	var pass = $("#password").val();
		    	var pass_preg = /^[a-zA-Z0-9_]{6,18}$/;
		    	if(pass_preg.test(pass)){
		    		$("#b3").css("display","none");
		    		$("#b4").css("display","inline");
		    	}else{
		    		$("#b4").css("display","none");
		    		$("#b3").css("display","inline");
		    		$("#a4").css("display","inline");
		    		$("#a4").html('密码格式不正确');
		    	}
		    });
		    //验证确认密码
		    $("#repassword").blur(function(){
		    	var pass = $("#password").val();
		    	var repass = $("#repassword").val();
		    	if(pass == repass && repass){
		    		$("#b5").css("display","none");
		    		$("#b6").css("display","inline");
		    		$("#a5").css("display","none");
		    	}else{
		    		$("#b6").css("display","none");
		    		$("#b5").css("display","inline");
		    		$("#a5").css("display","inline");
		    		$("#a5").html('两次输入的密码不同');
		    	}
		    });
		    //验证手机号
		    $("#phone").blur(function(){
		    	var phone = $("#phone").val();
		    	var phone_preg = /^1[3,4,5,6,7,8,9]{1}[0-9]{9}$/;
		    	if(phone_preg.test(phone)){
		    		$("#b7").css("display","none");
		    		$("#b8").css("display","inline");
		    		$("#a6").css("display","none");
		    	}else{
		    		$("#b8").css("display","none");
		    		$("#b7").css("display","inline");
		    		$("#a6").css("display","inline");
		    		$("#a6").html('手机号格式不正确');
		    	}
		    });
		    //验证邮箱 
		    $("#email").blur(function(){
		    	var email = $("#email").val();
		    	var email_preg = /^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,4}$/;
		    	if(email_preg.test(email)){
		    		$("#b9").css("display","none");
		    		$("#b10").css("display","inline");
		    		$("#a7").css("display","none");
		    	}else{
		    		$("#b10").css("display","none");
		    		$("#b9").css("display","inline");
		    		$("#a7").css("display","inline");
		    		$("#a7").html('邮箱格式不正确');
		    	}
		    });
		    // 表单的提交事件
			$('form').submit = function(){
				
				return false;
			}
		});
	</script>
@endsection