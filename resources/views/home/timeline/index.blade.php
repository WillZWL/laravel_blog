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
    @foreach ($years as $k => $year)
    <div class="history-date">
      <ul>
        <h2 class="first"><a href="#nogo">{{ $k }}</a></h2>
        @foreach ($year as $timeline)
        <li @if ($timeline->difficulty != 'LOW') class="green" @endif>
          <h3>{{ date('m-d', strtotime($timeline->start_date)) }}<span>{{ date('Y', strtotime($timeline->start_date)) }}</span></h3>
          <dl>
            <dt>{{ $timeline->project }}
              <span>{{ $timeline->subject }}</span>
            </dt>
          </dl>
        </li>
        @endforeach
      </ul>
    </div>
    @endforeach
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