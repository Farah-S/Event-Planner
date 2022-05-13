@extends('layout')
@section('title','Production House Packages')
@section('content')

<!-- slider_area_start
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
         -->
    <div class="speakers_area inc_padd">
            <div class="row">
                <div class="col-12">
                    <h3 class=" slider slider2 align-left" style="color:black;font-size:70px">Production House</h3>
                </div>
            </div>
        <?php $package=$packages[0]; ?>
        <div class="container">
            <div class="doqrow">
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/Ramadan2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Ramadan</h3>
                            <p>Pick the Ramadan Package you like with variable prices</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/Easter.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Easter</h3>
                            <p>Pick the Easter Package you like with variable prices</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/Easter.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Easter</h3>
                            <p>Pick the Easter Package you like with variable prices</p>
                        </div>
                    </div>
                </div>
                <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/Easter.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('productionHouse.editPackage',['package'=>$package])}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>{{$package->name}}</h3>
                            <p>Pick the {{$package->name}} Package you like with variable prices</p>
                        </div>
                    </div>
                   
                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/xmas3.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Christmas</h3>
                            <p>Pick the Ramadan Package you like with variable prices</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Decorations/h5.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Halloween</h3>
                            <p>Pick the Halloween Package you like with variable prices</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- speakers_end-->


    <!-- resister_book_start -->
    <!-- <div class="resister_book resister_bg_1">
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
    </div> -->
    <!-- resister_book_end -->

    <!-- brand_area_start -->
    <!-- <div class="brand_area">
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
    </div> -->
    <!-- brand_area_end -->

    <!-- faq_area_Start -->
    <!--
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
-->
    <!-- faq_area_end -->

@endsection