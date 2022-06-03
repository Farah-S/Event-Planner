@extends('layout')
@section('title','Contact us')
@section('content')

   <!-- slider_area_start -->
    <div class="slider_area bg-test-img">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="title_text title_text2 ">
                                    <h3 class='slider' style="color:#b61d1d">Contact Us</h3>
                                    <!--
                                    <a href="#" class="boxed-btn-white">Add to your Calendar</a>
                                    -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="countDOwn_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <!--
                            <div class="single_date">
                                <i class="ti-location-pin"></i>
                                <span>City Hall, New York City</span>
                            </div>
                       -->
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <!--
                        <div class="single_date">
                            <i class="ti-alarm-clock"></i>
                            <span>12-15 Sep 2019</span>
                        </div>
                        -->
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-5">
                        <!--
                        <span id="clock"></span>
                        -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="slider slider2">Get in Touch</h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf   
                        <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection