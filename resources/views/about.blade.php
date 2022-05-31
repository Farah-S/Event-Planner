@extends('layout')
@section('title','About us')
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1">
    <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <div class="row">
                            <div class="col-xl-8col-lg-5">
                                <div class="title_text">
                                    <h3 class='slider slider2'>About Us</h3>
                                    <!--
                                    <a href="#" class="boxed-btn-white">Add to your Calendar</a>
                                    -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
      
    </div>
    <!-- slider_area_end -->

    <!-- speakers_start -->
    <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8">
                <div class="section_title">
                            <h3>About the Company</h3>
                        </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="about_info">
                        <p>This is some info about the company </p>
                     
                    </div>
                </div>
            </div>
        </div>
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
                            <p>team member info</p>
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
                            <p>Product Designer + info</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-2 col-md-6">
                 
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

    <!-- faq_area_Start -->
    <div class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="serction_title_large mb-95">
                        <h3>
                            FAQ
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div id="accordion">
                    <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">Question1</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Answer1
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">Question2</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Answer2
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">Question3</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Answer3
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">Question4</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Answer4
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