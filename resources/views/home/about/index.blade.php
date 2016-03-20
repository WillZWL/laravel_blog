<!DOCTYPE html>
<html>
<head>
	<title>{{ setting('site_name') }} | {{ trans('about.about_me') }}</title>
	<script src="/about/js/jquery.min.js"> </script>
	<link href="/about/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="/about/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="/about/js/move-top.js"></script>
		<script type="text/javascript" src="/about/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
 	<!---- start-smoth-scrolling---->
</head>
<body>
 <div id="top-top" class="headerbg">
	   <div class="about_header">
			<div class="nav lang">
				<ul>
					<li><a class="" href="zh-cn">zh-cn</a></li>
					<li>/</li>
					<li><a class="" href="en">en</a></li>
				</ul>
			</div>
			<div class="container">
				   <div class="about_logo">
						<a href="/">{{ trans('about.hello')}}</a>
				   </div>
				  <div class="nav">
					 <ul>
						 <li><a class="scroll" href="#about">{{ trans('about.about')}}</a></li>
						 <li><a class="scroll" href="#skills">{{ trans('about.skill')}}</a></li>
						 <li><a class="scroll" href="#port">{{ trans('about.portfolio')}}</a></li>
						 <li><a class="" href="/contact">{{ trans('about.contact')}}</a></li>
						 <li><a class="" href="/">{{ trans('about.blog')}}</a></li>
					 </ul>
				 </div>
				<div class="clear"></div>
			</div>
	   </div>
	   <div class="banner">
	      <div class="container">
		     <div class="banner-info">
			      <div class="bannerlogo">
					  <img src="/about/images/diamond.png">
			      </div>
			      <div class="bannerhead">
				      <h2>{{ trans('about.name_is') }}<span>  {{ trans('about.name') }}</span></h2>
				      <h3>Web Developer</h3>
				      <p>Linux , PHP , Mysql , Laravel , ThinkPHP , Codeigniter <br/>
				      	Memcached , Redis, <br/>
				      	HTML, JAVASCRIPT, Ajax, jQuery, CSS<br>
				      	Python, Nodejs <br/>
				      </p>
				      <p class="hobby">
				      	Hobby: Coding, Cooking, Reading, Bicycling, Traveling
				      </p>
					  <a class="downarrow scroll" href="#about"><span></span></a>
			      </div>
			 </div>
			 <div class="clear"></div>
		  </div>
	  </div>
 </div>
 <div class="content">
	   <div id="about" class="about">
		 <div class="container">
			   <div class="header-section text-center">
				  <h2><span> </span>ABOUT<span> </span></h2>
				  </div>
				 <span><p>毕业于武汉大学东湖分校管理学院， 电子商务专业， 在校担任创业协会副会长期间， 主持领导团队开发了 论坛，社区，B2C校园订餐商城，并指导多名学生开设运营自己的淘宝店铺，具有一定的互联网产品的开发运营管理经验。
				 </p>
				 <hr>
				 <p>毕业以后先后供职于网站外包公司，跨境电子商务企业， 参与设计开发过旅游散客管理系统， B2C电子商务系统，产品仓储管理系统，产品物流管理系统等。  <a href="/timeline" target="_blank"><<< 更多详情 >>></a></p> </span>

				<h3><a href="/timeline">Work Experience</a></h3>
			  <div class="years">
				<h4><b>2012-2014</b></h4>
				 <span><h4>友谊吧论坛， 小树林校园在线社区</h4></span>
				 <p>在线期间曾Discuz搭建一个关于友谊的论坛社区，独立完成网站前期的策划，建设，运营维护， 后来又基于ThinkSNS 二次开发过一个校园社区。在这两个校园项目中， 积累并且熟悉了网站开发的基本过程，熟悉了MVC的网站开发过程，能对流行的开源系统机型简单的二次开发与定制。</p>
			  </div>

			  <div class="years">
				 <h4><b>2013-2014</b></h4>
				 <span><h4>散客管理系统</h4></span>
				 <p>根据客户的业务要求， 设计并开发了一套旅游相关的散客管理信息系统，能够处理客户公司的财务，销售， 计调，地接， 统计等部门之间的协调工作， 提高了公司的业务处理效率。在项目中主要负责了需求文档的整理与编写，项目后台程序的设计开发。</p>
			  </div>

			   <div class="years">
				 <h4><b>2014</b></h4>
				 <span><h4>商城＋SNS系统开发</h4></span>
				<p>在ThinkPHP的开源框架上，开发过B2C商城系统与SNS垂直化社区， 商城实现了多商店管理，企业页面展示， 团购， 秒杀， 招标与竞标，SNS实现了微博的发布， 评论，转发， 在项目中主要负责过商城的后台管理， 团购与秒杀功能的开发</p>
			  </div>

			  <div class="years">
				 <h4><b>2014－至今</b></h4>
				 <span><h4>跨境电商</h4></span>
				<p>在ThinkPHP的开源框架上，开发过B2C商城系统与SNS垂直化社区， 商城实现了多商店管理，企业页面展示， 团购， 秒杀， 招标与竞标，SNS实现了微博的发布， 评论，转发， 在项目中主要负责过商城的后台管理， 团购与秒杀功能的开发</p>
			  </div>
				<a class="arrow scroll" href="#skills"><span> </span></a>
		  </div>
	  </div>
	  <div id="skills" class="skills">
	  <div class="container">
	     <div class="skills-grids">
			  <div class="skill-section text-center">
				  <h2><span> </span>SKILLS<span> </span></h2>
			  </div>
				  <div class="services_grids">
					  <div id="canvas">
							<div class="skill-grids text-center">
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>PHP</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>MYSQL</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>jQuery</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>JAVASCRIPT</h3>
										 </div>
									</div>
									<div class="clearfix"> </div>
							  </div>
					   </div>
					   <div id="canvas">
							<div class="skill-grids text-center">
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>ThinkPHP</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>Codeigniter</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>Laravel</h3>
										 </div>
									</div>
									<div class="col-md-3">
										<div class="skill-grid">
											<h3>Python</h3>
										 </div>
									</div>
									<div class="clearfix"> </div>
							  </div>
					   </div>
				  </div>
			 </div>
		 </div>
		   <a class="down scroll" href="#port"><span> </span></a>
	  </div>
	  </div>
		<div id="port" class="Portfolio">
			  <div class="Portfolio-section text-center">
			      <h2><span> </span>PORTFOLIO<span> </span></h2>
			  </div>
			  <div class="container">
				  <div class="portfolio-grids">
					  <div class="portfolio-grid col-md-4">
						 <a href="http://www.520fb.com"><img src="/about/images/monitr1.png"></a>
						  <p>发彪网 一家专业做定制的网站</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="portfolio-grid col-md-4">
						  <a href="#"><img src="/about/images/monitr2.png"></a>
						  <p>ValueBasket  The best prices on a wide range of electronics, with free shipping!</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="portfolio-grid col-md-4">
						  <a href="#"><img src="/about/images/monitr3.png"></a>
						  <p>WMS  物流管理系统</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="clear"> </div>
				  </div>
				   <div class="portfolio-grids">
					  <div class="portfolio-grid col-md-4">
						 <a href=""><img src="/about/images/monitr1.png"></a>
						  <p>CPS 产品管理信息系统</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="portfolio-grid col-md-4">
						  <a href="#"><img src="/about/images/monitr2.png"></a>
						  <p>shop.eservicesgroup</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="portfolio-grid col-md-4">
						  <a href="#"><img src="/about/images/monitr3.png"></a>
						  <p>SNS  在线社区</p>
						  <!-- <a class="rightarrow" href="#"><span> </span></a> -->
					  </div>
					  <div class="clear"> </div>
				  </div>
				  <a class="portdown scroll" href="#contact"><span> </span></a>

			  </div>
		</div>
  </div>
@include('home.common.footer')