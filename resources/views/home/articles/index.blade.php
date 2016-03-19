@extends('home.layout')
@section('content')
	<div class="main">
		<div class="container">
			<div class="content">
		 		<div class="section group">
					<div class="col-md-9 cont span_2_of_3">
						<div class="blog_grid">
							<h2 class="post_title"><a href="single.html">Blandit praesent luptatum</a></h2>
							<a href="single.html"><img src="images/img10.jpg" class="img-responsive" alt="" /></a>
							<p>Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole</p>
								<div class="button1"><a class="more" href="single.html">Read More</a></div>
							<ul class="links">
								<li><i class="date"> </i><span class="icon_text">July 14, 2014</span></li>
								<li><a href="#"><i class="admin"> </i><span class="icon_text">Admin</span></a></li>
								<li class="last"><a href="#"><i class="permalink"> </i><span class="icon_text">Permalink</span></a></li>
							</ul>
							<ul class="links_middle">
								<li><a href="#"><i class="title-icon"> </i><span class="icon_text">Lorem Ipsum Dolore</span></a></li>
								<li><i class="tags"> </i><span class="icon_text">No tags</span></li>
							</ul>
							<ul class="links_bottom">
								<li><a href="#"><i class="comments"> </i><span class="icon_text">5 Comments</span></a></li>
								<li><i class="views"> </i><span class="icon_text">49</span></li>
								<li><i class="likes"> </i><span class="icon_text">12</span></li>
							</ul>
						</div>
						<div class="blog_grid">
							<h2 class="post_title"><a href="single.html">Blandit praesent luptatum</a></h2>
							<a href="single.html"><img src="images/img12.jpg" class="img-responsive" alt="" /></a>
							<p>Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole</p>
							<div class="button1"><a class="more" href="single.html">Read More</a></div>

							<!-- 多说评论框 start -->
							<div class="ds-thread" data-thread-key="" data-title="" data-url=""></div>
							<!-- 多说评论框 end -->
							<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
							<script type="text/javascript">
							var duoshuoQuery = {short_name:"willzhangweilin"};
							(function() {
								var ds = document.createElement('script');
								ds.type = 'text/javascript';ds.async = true;
								ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
								ds.charset = 'UTF-8';
								(document.getElementsByTagName('head')[0]
								 || document.getElementsByTagName('body')[0]).appendChild(ds);
							})();
							</script>
							<!-- 多说公共JS代码 end -->
						</div>
						<div class="pagination pagination__posts">
							<ul>
								<li class="first"><a href="#">First</a></li>
								<li class="prev"><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="next"><a href="#">Next</a></li>
								<li class="last"><a href="#">Last</a></li>
								<div class="clearfix"></div>
							</ul>
						</div>
					</div>
					<!-- side -->
					@include('home.articles.side')
				</div>
			</div>
		</div>
	</div>
@stop
