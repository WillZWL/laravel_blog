@extends('home.layout')
@section('content')
    <div class="main">
        <div class="container">
            <div class="contact">
                <div class="contact-head text-center">
                    <h2>Contact Me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                </div>
                <!-- contact-grids -->
                <div class="contact-grids">
                    <div class="contact-map">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> -->
                        </iframe>
                    </div>
                    <!-- contact-form -->
                    <div class="contact-form">
                        <form>
                            <div class="contact-form-row">
                                <div>
                                    <span>Name :</span>
                                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                                </div>
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
                                <span>Message :</span>
                                <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thanks for Your Message';}">Thanks for Your Message</textarea>
                            </div>
                            <input type="submit" value="send">
                        </form>
                    </div>
                    <!-- contact-form -->
                </div>
                <!-- contact-grids -->
            </div>
        </div>
    </div>
@stop