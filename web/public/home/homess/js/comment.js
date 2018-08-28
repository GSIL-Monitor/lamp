$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var lytjbut = document.getElementById('myButton');
function getPlainTxt() {

    // console.log($('#art_id').val());return;

    if ($('#textarea1').val().length < 5) {
        alert('评论不能少于5个字');
        return false;
    } else {

        if ($('#textarea1').val().length >= 5) {
            lytjbut.disabled = true;
        }
        setTimeout(function() {
            var k = "n";    // 在这里判断 session 里的用户uid是否存在
            if (k == "n") {
                myLogin($('#textarea1').val());
            } else {
                $("#err").css("display", "block");
            }

        },
        1000);
    }
}

var pid;
var hff;
$(".project-content").on('click', '.hf', function() {
    pid = $(this).attr("name");
    hff = $(this);
    $(".hf").css("padding-bottom", "10px");
    if ($(document).scrollTop() > 0) {
        $(".huif").css({
            "top": $(this).offset().top + 270,
            "left": $(this).offset().left - 115,
            "display": "block"
        });
    } else {
        $(".huif").css({
            "top": $(this).offset().top + 270,
            "left": $(this).offset().left - 115,
            "display": "block"
        });
    }

    $(this).css("padding-bottom", "220px");
});

function qx() {
    $(".hf").css("padding-bottom", "10px");
    $(".huif").css("display", "none");
}

function hftj() {
    var jhf = document.getElementById("textarea2").value;
    jhf = jhf.replace(/<p><br><\/p>|<p><\/p>/gi, "");
    jhf = jhf.replace(/<\/?(textarea)[^>]*>/gi, "");

    if (jhf.length > 5) {
        // $(".lyhfbt").attr('disabled', "true");
        var h = $.ajax({
            type: 'post',
            url: '/comment/rep_add',
            data: {
                rep_msg:jhf,
                pid:pid
            },
            dataType: 'json',
            success: function(data) {

                if (data == 1) {
                    alert('尚未登录');return;
                }
                /*if (data == "y") {
                    window.location.reload();
                } else {
                    $("#err2").css("display", "block");
                    $("#err2").addClass("dou2");
                }
                    $("#err2").css("display", "block"); // 这里有一个30秒后再评论的功能*/
                $(".hf").css("padding-bottom", "10px");
                $(".huif").css("display", "none");
                // $(".lyhfbt").removeAttr('disabled');
                $('#textarea2').val('');
                $('#textarea1').val('');

                if (hff.parents('.plul').find('ul').eq(0).length > 0) {
                    // alert('存在');
                    hff.parents('.plul').find('ul').eq(0).before(data);
                } else {
                    // alert('不存在');
                    hff.before(data);
                }
                alert('回复成功!~~');return;

            },
            error: function() {}
        });
    } else {
        alert('回复不能少于5个字');
    }
}

function myLogin(aa) {
    var jhf = aa;
    var art_id = $('#art_id').val();
    jhf = jhf.replace(/<p><br><\/p>|<p><\/p>/gi, "");
    jhf = jhf.replace(/<\/?([a-o]|[q-s]|[u-z])[^>]*>/gi, "");
    jhf = jhf.replace(/<\/?(textarea)[^>]*>/gi, "");

    if (jhf.length > 3) {

        $.ajax({
            type: 'POST',
            url: '/comment/com_add',
            data: {
                msg:jhf,
                art_id:art_id
            },
            dataType: 'json',
            success: function(data) {

                if (data == 1) {
                    alert('尚未登录');return;
                }

                $('.project-content').prepend(data);
                $('#myButton').removeAttr('disabled');
                $('#textarea1').val('');
                alert('评论成功, 请点击右下角返回顶部');return;

                // console.log(data);
            },
            error: function() {
                alert('请求失败');
            },
            // timeout:3000,
            async:true
        });
    } else {
        alert('请文明上网, 维护网络河蟹社会');
    }
}
