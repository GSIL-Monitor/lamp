@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

            
	<style type="text/css">
		.biaoti{
			font-size:30px;
			
			margin-top: 10px;
		}
	</style>




	<!--产品列表-->
<div class="container mt20">
	<div class="boxleft">
		<div class="line_detail">
			<div class="hdbox_left"><font style="font-size:30px;margin-left: 150px;font-weight:900;">{{ $mate->btitle }}</font>
				<div class="biaoti"></div>
				<div class="overflow bg-f mt20" style="border: 1px #eee solid;"></div>
			</div>	
		</div>
		<div class="detxq">
			<div class="detailbox">
				<div class="daybox">
					<div class="boxleft">
						<h1>结</h1>
						<h1>伴</h1>
						<h1>详</h1>
						<h1>情</h1>
					</div>
					<div class="boxright" style="display:inline;">
						@if ( $mate->status == 1 )
							<h1><span >结伴状态</span style="display:inline;">如需结伴的小伙伴请通过下面联系方式联系对方，双方确定同游请点击《结伴同游》按钮......
							<a href="/home/forums/{{ $mate->id }}/jieban" onclick="return confirm('是否同意结伴')"><span style="float: right;display:inline;background:green;">结伴同游</span></a></h1>
						@else
							<h1><span >已成功结伴</span style="display:inline;">请合理安排好自己的行程时间！！！
							<a href="javascript:;"><span style="float:right;display:inline;background:green;">已完成同游</span></a></h1>
                       	@endif

					</div>
					<div class="boxright">
						<h1><span>发布者</span>zhangsan</h1>
						<div class="boxdt">
							<ul>
								<li><span><i class="iconfont icon-shijian"></i>发布时间</span>{{ $mate->created_at }}&nbsp;&nbsp;&nbsp;08:00</li>
								<li><span><i class="iconfont icon-dizhi"></i>结伴目的地</span>{{ $mate->badd }}</li>
								<li><span><i class="iconfont icon-shijian"></i>结伴日期</span>{{ $mate->bsettime }}&nbsp;&nbsp;&nbsp;{{ $mate->bouttime }}</li>
								<li><span><i class="iconfont icon-fuzhi"></i>联系方式</span>{{ $mate->bphones }}</li>
								<li><span><i class="iconfont icon-fuzhi"></i>结伴详情</span></li>
								<li>
									{!! $mate->content !!}
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bank30"></div>



@endsection