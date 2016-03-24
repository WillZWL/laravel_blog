@extends('home.layout')

@section('content')
	<div class="banner">
		<div class="container">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						@foreach ($articles as $k => $article)
						<li>
							<a href="{{ $article->slug }}"><img src="{{ $article->image }}" class="img-responsive" alt="{{ $article->title }}"></a>
							<div class="caption">
								<p>{!! mb_substr(str_replace('&nbsp;', '', strip_tags($article->body)), 0, 200) !!}</p>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- header -->
<!-- ipsum -->
	<div class="ipsum">
		<div class="container">
			<h3><span>"</span>人生就像是写代码，不断的重复着运行、调试、更新、迭代。也许我们都不能写出完美的代码，但任何时候都要拥有一颗迭代的心<span>"</span></h3>
		</div>
	</div>
<!-- ipsum -->
 <!-- portfolio-section -->
 <div class="container">
	 <div class="portfolio" id="portfolio">
	 <div class="welcome-top">
			<div id="portfoliolist">
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img01.jpg" class="swipebox"  title="Image Title"> <img src="images/img01.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					</div>
	            </div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img02.jpg" class="swipebox"  title="Image Title"> <img src="images/img02.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/im03.jpg" class="swipebox"  title="Image Title"> <img src="images/img03.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img04.jpg" class="swipebox"  title="Image Title"> <img src="images/img04.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img05.jpg" class="swipebox"  title="Image Title"> <img src="images/img05.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img06.jpg" class="swipebox"  title="Image Title"> <img src="images/img06.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img07.jpg" class="swipebox"  title="Image Title"> <img src="images/img07.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">
						<div class="welcome-1">
							<a href="images/img08.jpg" class="swipebox"  title="Image Title"> <img src="images/img08.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					 </div>
				</div>
				<div class="clearfix"></div>
    		</div>
	</div>
	  <!-- Script for gallery Here -->
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
			<script type="text/javascript">
			$(function () {
				var filterList = {
					init: function () {
						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector: '.portfolio',
							filterSelector: '.filter',
							effects: ['fade'],
							easing: 'snap',
							// call the hover effect
							onMixEnd: filterList.hoverEffect()
						});
					},
					hoverEffect: function () {
						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(
							function () {
								$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
								$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
							},
							function () {
								$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
								$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
							}
						);
					}
				};
				// Run the show!
				filterList.init();
			});
			</script>
<!-- portfolio-section  -->
		</div>
</div>
<!-- more -->
<div class="more-recent">
	<div class="container">
		<div class="col-md-6 more-left">
			<h3><span><a href="/abouts">More About Author</a></span></h3>
			<p>2014年毕业于武汉大学东湖分校管理学院，电子商务专业，主要研究于电子商务网站的分析建设，在校曾建设开发过多种类型的电子商务网站，具有一定的互联网产品的建设开发经验</p>
			<p>毕业以后先后供职于网站外包公司，跨境电子商务企业， 参与设计开发过旅游散客管理系统， B2C电子商务系统，产品仓储管理系统，产品物流管理系统等， 熟悉各类型电商系统开发</p>
			<p>精通PHP＋Mysql的系统开发，能熟练使用javascript, jQuery, Ajax等WEB前端技术， 熟练使用ThinkPHP， CodeIgbiter， Laravel 等PHP框架，熟练Linux， Nginx， Apache , PHP 基本环境配置， 熟练使用Mencached， Redis等数据缓存系统</p>
			<p>对于互联网的技术具备良好的兴趣，对新事物的接受与学习能力强，爱好读书， 敲码， 业余爱好广泛， 骑行， 登山， 徒步， 游泳等</p>
			<div class="button"><a class="more" href="/abouts">Read More</a></div>
		</div>
		<div class="col-md-6 recent">
			<h3><span>Recent</span> Blog Post</h3>
			@foreach ($articles as $k => $article)
			@if ($k < 3)
			<div class="recent-top">
				<div class="recent-left">
					<img src="{{ $article->image }}" class="img-responsive" alt="">
				</div>
				<div class="recent-right">
					<h5>{{ date('Y-m-d', strtotime($article->created_at)) }}<span>&nbsp;&nbsp;<a href="{{ $article->slug }}">{{ $article->title }}</a></span></h5>
					<p> {!! mb_substr(str_replace('&nbsp;', '', strip_tags($article->body)), 0, 60) !!}</p>
				</div>
				<div class="clearfix"></div>
			</div>
			@endif
			@endforeach
			<div class="button"><a class="more" href="/blogs">Read More</a></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- more -->

@stop
