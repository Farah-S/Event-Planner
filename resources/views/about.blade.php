@extends('layout')
@section('title','About us')
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="title_text title_text2 ">
                                <h3>Event Speakers</h3>
                                <a href="#" class="boxed-btn-white">Add to your Calendar</a>
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
                        <div class="single_date">
                            <i class="ti-location-pin"></i>
                            <span>City Hall, New York City</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="single_date">
                            <i class="ti-alarm-clock"></i>
                            <span>12-15 Sep 2019</span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-5">
                        <span id="clock"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- speakers_start -->
    <div class="speakers_area inc_padd">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/1.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Jonson Miller</h3>
                            <p>Creative Director</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/3.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Albert Jackey</h3>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-2 col-md-6">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/2.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Marked Macau</h3>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/1.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Kelvin Cooper</h3>
                            <p>Art Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- speakers_end-->


    <!-- resister_book_start -->
    <div class="resister_book resister_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="resister_text text-center">
                        <h3>Register Now to Book <br>
                            Your Presence</h3>
                        <a href="#" class="boxed-btn-white">Book Now ($150) </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- resister_book_end -->

    <!-- brand_area_start -->
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
    <!-- brand_area_end -->

    <!-- faq_area_Start -->
    <div class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="serction_title_large mb-95">
                        <h3>
                            Frequently Ask
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                        <img src="img/barnd/info.png" alt=""> Is WordPress hosting worth it?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">What are the advantages <span>of WordPress
                                            hosting over shared?</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <img src="img/barnd/info.png" alt=""> Where the Venue?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        <img src="img/barnd/info.png" alt=""> How can I attend <span>the Event from
                                            Asia?</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                    let god moving. Moving in fourth air night bring upon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->

@endsection