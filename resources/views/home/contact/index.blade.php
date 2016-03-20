@extends('home.layout')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<style type="text/css">
    #allmap {width: 100%;height:300px;margin:0;font-family:"微软雅黑";}
</style>

@section('content')
    <div class="main">
        <div class="container">
            <div class="contact">
                <div class="contact-head text-center">
                    <h2>Contact Me</h2>
                    <p></p>
                </div>
                <!-- contact-grids -->
                <div class="contact-grids">
                    <div class="contact-map" style="height: 300px;">
                        <div id="allmap"></div>
                        <script type="text/javascript">
                            // 百度地图API功能
                            var map = new BMap.Map("allmap");    // 创建Map实例
                            map.centerAndZoom(new BMap.Point(113.988, 22.570), 12);  // 初始化地图,设置中心点坐标和地图级别
                            map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
                            map.setCurrentCity("深圳");          // 设置地图显示的城市 此项是必须设置的
                            // map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
                        </script>
                    </div>
                    <!-- contact-form -->
                    <div class="contact-form">
                        <div class="contact-left">
                            <form>
                                <div class="contact-form-row">
                                    <div>
                                        <span>Email :</span>
                                        <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                                    </div>
                                    <div>
                                        <span>Subject :</span>
                                        <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="contact-form-row2">
                                    <div>
                                        <span>Message :</span>
                                        <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thanks for Your Message';}">Thanks for Your Message</textarea>
                                    </div>
                                    <div>
                                        <span>Scan MY WeChat</span>
                                        <img src="/images/wechat.png">
                                    </div>
                                </div>
                                    <div class="clearfix"> </div>
                                    <input type="submit" value="send">
                            </form>
                        </div>
                    </div>
                    <!-- contact-form -->
                </div>
                <!-- contact-grids -->
            </div>
        </div>
    </div>

@stop