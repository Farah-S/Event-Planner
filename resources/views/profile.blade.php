@extends('layout')
@section('title','Profile')
@section('content')


    <!-- slider_area_start -->
    <div class="speakers_area inc_padd">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/1.png" alt="">
                        </div>
                    <div class="about_info">
                        <div class="section_title">
                            <h3>Name</h3>
                            <p>Ibrahim Baher</p>
                        </div>
                    </div>
                    <br>
                    <div class="about_info">
                        <div class="section_title">
                            <h3>Email</h3>
                            <p>Ibrahim.baher@email.com</p>
                        </div>
                    </div>
                 </div>
                     </div>
                     <div class="col-lg-4">
                            <div class="row justify-content-center ">
                                
                                <button type="submit" class="button button-contactForm boxed-btn">edit profile</button>
                            </div>
                            <div class="row justify-content-center ">
                                
                                <button type="submit" class="button button-contactForm boxed-btn">Delete Profile</button>
                            
                            </div>
                            <div class="row justify-content-center ">
                                
                                <button type="submit" class="button button-contactForm boxed-btn">Show Orders</button>
                            
                            </div>
                            </div>
                            
                            
            </div>    
        </div>  
    </div>  
                
  

@endsection