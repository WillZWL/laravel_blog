@extends('home.layout')
@section('content')
<!-- welcome -->
    <div class="welcome">
        <div class="container">
            <!-- portfolio-section -->
            <div class="portfolio"  id="portfolio">
                <h2>Gallery</h2>
                <div class="welcome-top">
                    <div class="portfolio"  id="portfolio">
                        <div id="portfoliolist">
                            @for ($i=5; $i<=8; $i++)
                            <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper grid_box">
                                    <div class="welcome-1">
                                        <a href="images/img0{{ $i }}.jpg" class="swipebox"  title="Image Title"> <img src="images/img0{{ $i }}.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                                    </div>
                                 </div>
                            </div>
                            @endfor
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="welcome-top">
                    <div class="portfolio"  id="portfolio">
                        <div id="portfoliolist">
                            @for ($i=1; $i<=4; $i++)
                            <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper grid_box">
                                    <div class="welcome-1">
                                        <a href="images/img0{{ $i }}.jpg" class="swipebox"  title="Image Title"> <img src="images/img0{{ $i }}.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                                    </div>
                                 </div>
                            </div>
                            @endfor

                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="welcome-top">
                    <div id="portfoliolist">
                        @for ($i=10; $i<=13; $i++)
                        <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                            <div class="portfolio-wrapper grid_box">
                                <div class="welcome-1">
                                    <a href="images/img{{ $i }}.jpg" class="swipebox"  title="Image Title"> <img src="images/img{{ $i }}.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <div class="clearfix"></div>
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
<!-- welcome -->
@stop