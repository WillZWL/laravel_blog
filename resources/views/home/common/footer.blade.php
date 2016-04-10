<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="clearfix"></div>
		<div class="bottom">
			<p>Copyright &copy; 2016-2018.Will All rights reserved.<a href="http://www.miitbeian.gov.cn">{{ setting('filling') }}</a>
			<br/>
			Developed By <a href="/abouts" target="_blank">Will Zhang</a>,&nbsp;&nbsp;Powered By <a href="https://laravel.com/">Laravel</a>&nbsp;&nbsp;&&&nbsp;&nbsp;<a href="http://getbootstrap.com/">Bootstrap</a><br/>
			Run On <a href="https://www.aliyun.com">Aliyun's</a> Elastic Compute Service
		</div>
	</div>
</div>
<div id="goTop" class="goTop"></div>
<script type="text/javascript">
    $(window).scroll(function(){
        var sc=$(window).scrollTop();
        var rwidth=$(window).width()+$(document).scrollLeft();
        var rheight=$(window).height()+$(document).scrollTop();
        if(sc>100){
            $("#goTop").css("display","block");
            $("#goTop").css("left",(rwidth-80)+"px");
            $("#goTop").css("top",(rheight-120)+"px");
        }else{
            $("#goTop").css("display","none");
        }
    });
    $("#goTop").click(function(){
        $('body,html').animate({scrollTop:0},300);
    });
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258409999'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1258409999%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<!-- footer -->
</body>
</html>