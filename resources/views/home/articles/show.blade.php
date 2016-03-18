@extends('home.layout')

@section('content')
<div class="main">
		<div class="container">
		   <div class="content">
		 		<div class="section group">
					<div class="col-md-9 cont span_2_of_3">
					  	<div class="blog_grid">
				  	   	   <h2 class="post_title">Blandit praesent luptatum</h2>
				  	   	   <a href="single.html"><img src="images/img10.jpg" class="img-responsive" alt="" /></a>
				  	   	   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
				  	       <p>Augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem </p>
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
				  		    <ul class="comment-list">
				  		    	<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
				  		         <li><img src="images/avatar.png" class="img-responsive" alt="">
				  		           <div class="desc">
				  		        	<p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
				  		           </div>
				  		           <div class="clear"></div>
				  		         </li>
				  		     </ul>
			  	     	</div>
					</div>
				<!-- side -->
				@include('home.articles.side')
			</div>
		</div>
	</div>

	<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="{{ $article->slug }}" data-title="{{ $article->title }}" data-url="{{ setting('site_url').$article->slug }}"></div>
	<!-- 多说评论框 end -->
	<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<!-- 	<script type="text/javascript">
	var duoshuoQuery = {short_name:"willzhangweilin"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0]
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script> -->
<!-- 多说公共JS代码 end -->
@stop
