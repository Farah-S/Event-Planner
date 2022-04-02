@extends('layout')
@section('title','Home')
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="title_text">
                                <h3 class='slider'>Online Event Planning</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/about/white.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <h3>Event Planning</h3>
                        </div>
                        <p>We offer many event types like conferences, corporate, graduation events and more</p>
                        <a href="{{route('events.events')}}" class="boxed-btn-red">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_area" style="background-color: #faf3e9;">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <h3>Production House</h3>
                        </div>
                        <p>As well as events we offer decoration services</p>
                        <a href="{{route('productionHouse.packages')}}" class="boxed-btn-red">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/about/deco.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_area_end -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="feature-img">
                <img class="img-fluid img-about" width=800 src="img/about/team.jpg" alt="">
            </div>
            <div class="blog_details" style="text-align: center;">
                <h1>Introducing Ukulele
                </h1>
                
                <p class="excert">
                This section shall contain some information about the company
                </p>
                <div class="quote-wrapper">
                <div class="quotes">
                    Placeholder for company motto
                </div>
                </div>
                <p>
                This section shall contain some information about the company
                </p>
            </div>
        </div>
   </section>
   <!--================ Blog Area end =================-->

    <!-- footer_start -->
    
    <!-- suppliers maybe who knows
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand_active owl-carousel">
                        <div class="single_brand text-center">
                            <img src="img/barnd/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/2.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/3.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/4.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/5.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   -->

@endsection