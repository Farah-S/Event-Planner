@extends('layout')
@section('title','Profile')
@section('content')

<div class="slider_area">
    </div>
    <!-- slider_area_start -->
    <div class="ibspeakers_area">
        <div class="container ibcontainer">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/1.png" alt="">
                        </div>
                    <div class="about_info">
                        <div class="section_title">
                            <h3 class="slider">Name</h3>
                            <p class="himasfont">Ibrahim Baher</p>
                        </div>
                    </div>
                    <br>
                    <div class="about_info">
                        <div class="section_title">
                            <h3 class="slider">Email</h3>
                            <p class="himasfont">Ibrahim.baher@email.com</p>
                        </div>
                    </div>
                 </div>
                     </div>
                     <div class="col-lg-4">
                            <div class="row justify-content-center ">
                                
                                <button type="submit" onclick="location.href = '{{route('user.editProfile')}}';" class="button button-contactForm boxed-btn">Edit profile</button>
                            </div>
                            <br>
                            <div class="row justify-content-center ">
                                
                                <button type="submit" class="button button-contactForm boxed-btn">Delete Profile</button>
                            
                            </div><br>
                            <div class="row justify-content-center ">
                                
                                <button type="submit" onclick="location.href = '{{route('customer.myorders')}}';" class="button button-contactForm boxed-btn">Show Orders</button>
                            
                            </div>
                            </div>
                            
                            
            </div>    
        </div>  
    </div>  
                
  

@endsection