<div class="blog-masthead">
	<div class="container">
		<nav class="blog-nav">
			<a class="blog-nav-item active" href="/">Home</a>
			<a class="blog-nav-item" href="/articles">Blog</a>
			<a class="blog-nav-item" href="/abouts">About Me</a>
			@if (Auth::guest())
				<a class="blog-nav-item pull-right" href="/login">Login</a>
			@else
				<a class="blog-nav-item pull-right" href="/admin/index" target="_blank">Dashboard</a>
			@endif
		</nav>
	</div>
</div>
