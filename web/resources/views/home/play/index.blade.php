@extends('home.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
<div class="carbg">
			<div class="container">
				<div class="title2">
					<h1><i class="iconfont icon-jingdian"></i>娱乐</h1>
					<p>世界各地的娱乐地点，给您不一样的出行攻略</p>
					
				</div>
			</div>
		</div>
		<!--列表头部 end-->

		<div class="container mt10">
			<div class="boxleft">
				<div class="gllist">
					<ul>
						@foreach($play as $k=>$v)
						<li>
							<h1><a href="/home/play/{{ $v -> id}}"><img src="{{ $v->picture }}"/></a></h1>
							<h2><a href="#">{{ $v-> title}}</a></h2>
							<h3>地区:{{ $v -> address }}</h3>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="boxright">
				<!--gg--
				<div class="gg">
					<a href="#"><img src="img/yngg.jpg" /></a>
				</div>
				<!gg end-->
				<!--bbgl-->
				<div class="title" style="margin-top: 0;">必备攻略
					<a href="#">更多&nbsp;>></a>
				</div>
				<div class="bbgl">
					<h1>
						<a href="#"><img src="img/2.jpg"/>
						<p></p>
						<span>01&nbsp;冬季出行必备十大条件</span>
						</a>
					</h1>
					<ul>
						<li><span>01</span>
							<a href="#">邂逅洱海，玉龙雪山大索</a>
						</li>
						<li><span>02</span>
							<a href="#">实景表演印象丽江</a>
						</li>
						<li><span>03</span>
							<a href="#">崇圣寺三塔，手工扎染</a>
						</li>
						<li><span>04</span>
							<a href="#">车1导0购物邂逅洱海</a>
						</li>
						<li><span>05</span>
							<a href="#">邂逅洱海，玉龙雪山大索</a>
						</li>
						<li><span>06</span>
							<a href="#">车1导0购物邂逅洱海</a>
						</li>
					</ul>
				</div>
				<!--bbgl end-->
				<!--gg-->
				<div class="gg mt20">
					<a href="#"><img src="img/3.jpg" /></a>
				</div>
				<!--gg end-->
				<!--innews-->
				<div class="title">最新消息
					<a href="#">更多&nbsp;></a>
				</div>
				<div class="innews">
					<h1>
						<a href="#"><img src="img/sanya.png"/>
						<p></p>
						<span>01&nbsp;冬季出行必备十大条件</span>
						</a>
					</h1>
					<ul>
						<li><span>2017-07-15</span>
							<a href="#">邂逅洱海，玉龙雪山大索</a>
						</li>
						<li><span>2017-07-15</span>
							<a href="#">实景表演印象丽江</a>
						</li>
						<li><span>2017-07-15</span>
							<a href="#">崇圣寺三塔，手工扎染</a>
						</li>
						<li><span>2017-07-15</span>
							<a href="#">车1导0购物邂逅洱海</a>
						</li>
						<li><span>2017-07-15</span>
							<a href="#">邂逅洱海，玉龙雪山大索</a>
						</li>
						<li><span>2017-07-15</span>
							<a href="#">车1导0购物邂逅洱海</a>
						</li>
					</ul>
				</div>
				<!--innews end-->
				<!--cxlist-->
				<div class="title">畅销排行榜单
					<a href="#">&nbsp;</a>
				</div>
				<div class="cxlist">
					<ul>
						<li>
							<a href="#">
								<h2><b>1</b>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">

								<h2><b>2</b>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">

								<h2><b>3</b>橘子洲-韶山-张家界-玻璃栈道-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">
								<h2>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">
								<h2>橘子洲-韶山-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">
								<h2>橘子洲-韶山-张家界-天门山-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>
						<li>
							<a href="#">

								<h2>橘子洲-韶山-张家界-天门山-玻璃栈道-凤凰古城双飞6日游
								<p><span>跟团游</span>满意度99%</p>
								</h2>
							</a>
						</li>

					</ul>
				</div>
				<!--cxlist end-->
				<!--gg-->
				<div class="gg mt20">
					<a href="#"><img src="img/1.jpg" /></a>
				</div>
				<!--gg end-->

			</div>
			
		</div>
		<div class="container">
			<!-- 分页 -->
			<div class="pagination">
          		{!! $play->appends($request)->render() !!}
      		</div>
			<!--gg-->
			<div class="gg2">
				<a href="#"><img src="img/gg.jpg" /></a>
			</div>
			
			<!--gg end-->
			<!--热门案例-->
			<div class="rmal">
				<div class="rmallist">
					<div class="rmaltel"><span>HOT·</span>热门推荐定制案例</div>
					<div class="rmaltop">如果没有你想要的线路怎么办？别急您还可以选择
						<a href="#">定制线路&nbsp;>></a>
					</div>
					<ul>
						<li>
							<h1><a href="#"><img src="img/dz_03.jpg"/></a></h1>
							<h2>
										<b>海南·三亚/15日风情之旅</b>
										<span>蒋女士 | 2017年08月</span>
										<p>这次旅行印象最深刻的是跳伞看风景、开漂移等等。本来酒店原计划四星级，最后酒店免费升级了五星级正宗海景房，</p>
								</h2>
							<h3><a href="#"><i class="iconfont icon-lianjie"></i>查看详细</a></h3>
						</li>
						<li>
							<h1><a href="#"><img src="img/dz_03.jpg"/></a></h1>
							<h2>
										<b>海南·三亚/15日风情之旅</b>
										<span>蒋女士 | 2017年08月</span>
										<p>这次旅行印象最深刻的是跳伞看风景、开漂移等等。本来酒店原计划四星级，最后酒店免费升级了五星级正宗海景房，</p>
								</h2>
							<h3><a href="#"><i class="iconfont icon-lianjie"></i>查看详细</a></h3>
						</li>
						<li>
							<h1><a href="#"><img src="img/dz_03.jpg"/></a></h1>
							<h2>
										<b>海南·三亚/15日风情之旅</b>
										<span>蒋女士 | 2017年08月</span>
										<p>这次旅行印象最深刻的是跳伞看风景、开漂移等等。本来酒店原计划四星级，最后酒店免费升级了五星级正宗海景房，</p>
								</h2>
							<h3><a href="#"><i class="iconfont icon-lianjie"></i>查看详细</a></h3>
						</li>

					</ul>
				</div>
			</div>

@endsection