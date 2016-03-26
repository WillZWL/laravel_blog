@extends('home.layout')
@section('content')
<div class="main">
		<div class="container">
		   <div class="content">
		 		<div class="section group">
					<div class="col-md-9 cont span_2_of_3 blog_content">
					  	<div class="blog_grid">
				  	   	   <h2 class="post_title">{{ $article->title }}</h2>
				  	   	   <img src="{{ $article->image }}" class="img-responsive" alt="{{ $article->title }}" style="width: 820px;height: 450px;" />
				  	   	   <p>{!! str_replace('background-color: rgb(255, 255, 255);','',$article->body) !!}</p>
				  	        <!-- 多说评论框 start -->
							<div class="ds-thread" data-thread-key="{{ $article->slug }}" data-title="{{ $article->title }}" data-url="{{ setting('site_url').$article->slug }}"></div>
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
					</div>
				<!-- side -->
				@include('home.articles.side')
			</div>
		</div>
	</div>
@stop
