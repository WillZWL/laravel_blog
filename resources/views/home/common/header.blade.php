<!DOCTYPE HTML>
<html>
<head>
<title>Home {{ setting('site_name') }}</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/history.css">
<link rel="stylesheet" href="css/swipebox.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{ setting('site_keywords') }}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> -->
<script src="js/jquery.min.js"></script>
 <!------ Light Box ------>
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!------ Eng Light Box ------>
<script src="js/responsiveslides.min.js"></script>
<script>
$(function () {
  $("#slider").responsiveSlides({
    auto: true,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    pager: true,
  });
});

$(document).ready(function(){
    @if (Request::getRequestUri() == '/')
        $("#home").addClass('active');
    @else
        $("#{{ str_replace('/', '', Request::getRequestUri()) }}").addClass('active');
    @endif;
});
</script>

</head>
<body>
<!-- header -->
	<div class="header">
		<div class="container">
<!-- 			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""></a>
			</div> -->
			<div class="header-bottom">
				<div class="head-nav">
					<span class="menu">
						<ul class="cl-effect-3">
							<li id='home'><a href="/">Home</a></li>
							<li id="blogs"><a href="blogs">Blog</a></li>
                            <li id="gallerys"><a href="gallerys">Gallery</a></li>
                            <li id="contact"><a href="contact">Contact</a></li>
							<li><a href="abouts" target="_blank">About</a></li>
							<div class="clearfix"></div>
						</ul>
                    </span>
				</div>
				<div class="search2">
					<form>
						<input type="text" value="Search.." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search..';}">
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>