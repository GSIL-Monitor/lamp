$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

if ($.cookie('reg_block') != 'null') {
	$('.login-content').css('display', 'none');
	$('.register-content').css('display', 'block');
	$('#register').addClass('resp-tab-active');
	$('#register').siblings('li').removeClass('resp-tab-active');
}

// 清除cookie
$.cookie('reg_block', null);

$('#login').on('click',function(){
	$(this).addClass('resp-tab-active');
	$(this).siblings('li').removeClass('resp-tab-active');
	$(this).parents('#horizontalTab').find('.register-content').hide(2000);
	$(this).parents('#horizontalTab').find('.login-content').delay(2000).show(2000);
})

$('#register').on('click',function(){
	$(this).addClass('resp-tab-active');
	$(this).siblings('li').removeClass('resp-tab-active');
	$(this).parents('#horizontalTab').find('.login-content').hide(2000);
	$(this).parents('#horizontalTab').find('.register-content').delay(2000).show(2000);
})

/**
 *  注册表单提交验证 开始
 */
var Tv = false;	// 用户名
var Pv = false;	// 密码
var Nv = false;	// 手机号
var Rpv = false;	// 确认密码
var RegCV = false;	//
var Ev = false;
var PCv = false;

// 用户名
// 获取焦点事件
$('#uname').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#u_check').css('display', 'none');

})

// 失去焦点
$('#uname').blur(function(){

	// 获取输入的值
	var tv = $(this).val().trim();

	// 进行正则匹配
	var reg = /^\w{6,12}$/;

	var inp = $(this);

	// 检测
	if ( !reg.test(tv) ) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#u_check').css('display', 'block').val(' * 温馨提示: 用户名输入不正确 ! 请输入6~12位用户名(可以是字母数字下划线) ...');

	} else {

		// 发送ajax

		// 把值带到服务器 跟mysql数据表做匹配
		$.get('/checkuser', {uname:tv}, function(data){

			// console.log(data);
			if (data == '10') {

				inp.css('border', 'solid 2px #f00');
				$('#u_check').css('display', 'block').val(' * 温馨提示: 用户名已存在 ! ...');

			} else {

				Tv = true;
				inp.css('border', 'solid 2px green');

			}

		})

	}

})


// 密码
$('#upass').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#up_check').css('display', 'none');

})

$('#upass').blur(function(){

	var pv = $(this).val().trim();

	var reg = /^\S{8,12}$/;

	if (!reg.test(pv)) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#up_check').css('display', 'block').val(' * 温馨提示: 密码输入不正确 ! 请输入8~16位密码 ...');

	} else {

		Pv = true;

		// 让边框变绿
		$(this).css('border', 'solid 2px green');
	}
})


// 确认密码
$('#reupass').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#reup_check').css('display', 'none');
});

$('#reupass').blur(function(){

	var rpv = $(this).val();

	if (Pv != false) {

		if (rpv != $('#upass').val()) {

			$(this).css('border', 'solid 2px #f00');
			$('#reup_check').css('display', 'block').val(' * 温馨提示: 两次密码不一致 ! ...');
		} else {

			Rpv = true;

			$(this).css('border', 'solid 2px green');
		}

	} else {

		$(this).css('border', 'solid 2px #f00');
		$('#reup_check').css('display', 'block').val(' * 温馨提示: 请先输入正确格式的密码 ! ...');
	}

})


// 邮箱
$('#email').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#email_check').css('display', 'none');

})

$('#email').blur(function(){

	var emv = $(this).val().trim();

	var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/;

	if (!reg.test(emv)) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#email_check').css('display', 'block').val(' * 温馨提示: 邮箱格式不正确 !  ...');

	} else {

		Ev = true;

		// 让边框变绿
		$(this).css('border', 'solid 2px green');
	}
})


// 手机号
$('#phone').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#phone_check').css('display', 'none');

})

$('#phone').blur(function(){

	var phv = $(this).val().trim();

	var reg = /^1[3-9]\d{9}$/;

	if (!reg.test(phv)) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#phone_check').css('display', 'block').val(' * 温馨提示: 邮箱格式不正确 !  ...');

	} else {

		Nv = true;

		// 让边框变绿
		$(this).css('border', 'solid 2px green');

	}

})


// 手机验证码
$('#phone_code').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#phone_code_check').css('display', 'none');

})

$('#phone_code').blur(function(){

	var phcv = $(this).val().trim();

	var reg = /^\d{4}$/;

	if (!reg.test(phcv)) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#phone_code_check').css('display', 'block').val(' * 温馨提示: 手机验证码格式不正确 !  ...');

	} else {

		PCv = true;

		// 让边框变绿
		$(this).css('border', 'solid 2px green');

	}

})


// 验证码
$('#reg_code').focus(function(){

	$(this).css('border', 'solid 2px blue');
	$('#reg_code_check').css('display', 'none');

})

$('#reg_code').blur(function(){

	var reg_code = $(this).val().trim();

	var reg = /^[A-Za-z0-9]{4}$/;

	if (!reg.test(reg_code)) {

		// 让边框变红
		$(this).css('border', 'solid 2px #f00');
		$('#reg_code_check').css('display', 'block').val(' * 温馨提示: 验证码格式不正确 !  ...');

	} else {

		RegCV = true;

		// 让边框变绿
		$(this).css('border', 'solid 2px green');

	}

})











// 手机验证码获取	开始
var time = 30;
var retime = 30;	// time恢复原来的值
var status = 1;		// 防止重复加载定时器

$('#p_send').click(function(){

	if ($(this).text() != '获取验证码' || status == 0) {
		return false;
	}

	if (Nv) {
		alert(1111);


		var p_send = $(this);

		var p_send_time = setInterval(function(){

			p_send.text(time + 's后再次获取');
			time--;

			if ( time <= 0 ) {

				status = 1;

				p_send.text('获取验证码');
				time = retime;

				clearInterval(p_send_time);

				return false;
			}


		}, 1000)


		// 获取手机号
		var number = $('input[name=phone]').val();

		// ajax获取手机验证码
		$.post('/phone', {number:number}, function(data){

			console.log(data);

		})

		status = 0;
		return false;
	}else{
		alert('请准确填写信息');
	}
})
// 验证码获取	结束


// js 区分登录注册表单提交
$('#login_save').click(function(){

	$('#login_form').submit();

	// return false;
});

$('#reg_save').click(function(){

	if (Tv && Pv && Nv && Rpv && RegCV && Ev && PCv) {

		$('#reg_form').submit();

	}else{
		alert('请正确填写信息后再提交 !');
		return false;

	}


})
