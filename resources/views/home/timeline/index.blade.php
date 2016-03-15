<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('description', setting('site_description'))">
  <meta name="author" content="ganto">

  <title>@yield('title', setting('site_name'))</title>

  <link rel="stylesheet" href="{{ cdn(elixir("css/all.css")) }}">
  <link rel="stylesheet" href="css/history.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  @include('home.partials.nav')
<div class="head-warp">
  <div class="head">
        <div class="nav-box">
          <ul>
              <li class="cur" style="text-align:center; font-size:62px; font-family:'微软雅黑', '宋体';">Will'S Timeline</li>
          </ul>
        </div>
  </div>
</div>
<div class="main">
  <div class="history">
    <div class="history-date">
      <ul>
        <h2 class="first"><a href="#nogo">2016</a></h2>
        <li class="green">
          <h3>03.13<span>2016</span></h3>
          <dl>
            <dt>Flex Tool
              <span>Upload Csv file to Our Database, and generate new report</span>
            </dt>
          </dl>
        </li>

        <li>
         <h3>03.10<span>2016</span></h3>
          <dl>
            <dt>ValueBasket
              <span>Adding addtional information(First leg tracking number) in Dispatch Report with HS Code</span>
             </dt>
          </dl>
        </li>

         <li>
          <h3>03.08<span>2016</span></h3>
          <dl>
            <dt>ValueBasket
              <span>B2C courier / upload the data to aftership</span>
            </dt>
          </dl>
        </li>

       <li class="green">
          <h3>03.06<span>2016</span></h3>
          <dl>
            <dt>ChatandVision
              <span>Accelerator) - Amazon EUR report format (DE, ES, FR & IT)</span>
            </dt>
          </dl>
        </li>
        <li>
          <h3>03.01<span>2016</span></h3>
          <dl>
            <dt>Modify SE paypal sales reconcilization</dt>
          </dl>
        </li>
        <li>
          <h3>02.28<span>2016</span></h3>
          <dl>
            <dt>Modify Implement Gateway Report Tools for Amazon
          </dt>
          </dl>
        </li>
        <li class="green">
          <h3>03.06<span>2016</span></h3>
          <dl>
            <dt>ChatandVision
              <span>Accelerator) - Amazon EUR report format (DE, ES, FR & IT)</span>
            </dt>
          </dl>
        </li>
        <li>
          <h3>03.01<span>2016</span></h3>
          <dl>
            <dt>Modify SE paypal sales reconcilization</dt>
          </dl>
        </li>
        <li>
          <h3>02.28<span>2016</span></h3>
          <dl>
            <dt>Modify Implement Gateway Report Tools for Amazon
          </dt>
          </dl>
        </li>
      </ul>
    </div>
    <div class="history-date">
      <ul>
        <h2 class="date02"><a href="#nogo">2015</a></h2>
        <li class="green">
          <h3>03.13<span>2016</span></h3>
          <dl>
            <dt>Flex Tool
              <span>Upload Csv file to Our Database, and generate new report</span>
            </dt>
          </dl>
        </li>

        <li>
         <h3>03.10<span>2016</span></h3>
          <dl>
            <dt>ValueBasket
              <span>Adding addtional information(First leg tracking number) in Dispatch Report with HS Code</span>
             </dt>
          </dl>
        </li>

         <li>
          <h3>03.08<span>2016</span></h3>
          <dl>
            <dt>ValueBasket
              <span>B2C courier / upload the data to aftership</span>
            </dt>
          </dl>
        </li>

       <li class="green">
          <h3>03.06<span>2016</span></h3>
          <dl>
            <dt>ChatandVision
              <span>Accelerator) - Amazon EUR report format (DE, ES, FR & IT)</span>
            </dt>
          </dl>
        </li>
        <li>
          <h3>03.01<span>2016</span></h3>
          <dl>
            <dt>Modify SE paypal sales reconcilization</dt>
          </dl>
        </li>
        <li>
          <h3>02.28<span>2016</span></h3>
          <dl>
            <dt>Modify Implement Gateway Report Tools for Amazon
          </dt>
          </dl>
        </li>
        <li class="green">
          <h3>03.06<span>2016</span></h3>
          <dl>
            <dt>ChatandVision
              <span>Accelerator) - Amazon EUR report format (DE, ES, FR & IT)</span>
            </dt>
          </dl>
        </li>
        <li>
          <h3>03.01<span>2016</span></h3>
          <dl>
            <dt>Modify SE paypal sales reconcilization</dt>
          </dl>
        </li>
        <li>
          <h3>02.28<span>2016</span></h3>
          <dl>
            <dt>Modify Implement Gateway Report Tools for Amazon
          </dt>
          </dl>
        </li>
      </ul>
    </div>
    <div class="history-date">
      <ul>
        <h2 class="date02"><a href="#nogo">2014</a></h2>
        <li class="green">
          <h3>03.06<span>2016</span></h3>
          <dl>
            <dt>ChatandVision
              <span>Accelerator) - Amazon EUR report format (DE, ES, FR & IT)</span>
            </dt>
          </dl>
        </li>
        <li>
          <h3>03.01<span>2016</span></h3>
          <dl>
            <dt>Modify SE paypal sales reconcilization</dt>
          </dl>
        </li>
        <li>
          <h3>02.28<span>2016</span></h3>
          <dl>
            <dt>Modify Implement Gateway Report Tools for Amazon
          </dt>
          </dl>
        </li>
      </ul>
    </div>
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<footer class="blog-footer">
    <p><a href="">Will's Blog</a> Based On Laravel5 and Bootstrap3.</p>
    @if(setting('bei_an') != '')
      <p>{!! setting('bei_an').' '.setting('tong_ji') !!}</p>
    @endif
    <p><a href="#">Back to top</a></p>
  </footer>

  <script src="{{ cdn(elixir("js/all.js")) }}"></script>

  <script>
    $('.blog-post img').addClass('carousel-inner img-responsive img-rounded');
    $(document).ready(function() {
      $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    });
  </script>

</body>
</html>