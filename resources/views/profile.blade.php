@extends('layout')
@section('title','Profile')
@section('content')

<div class="slider_area">
    </div>
<div class="ibcontainer">
                            <img src="img/speakers/1.png">
                      
                        <div style = "position:relative; left:600px; bottom:450px;">
                        <div class="about_info">
                        <div class="section_title">
                            <h3 class="slider">Name</h3>
                            <p class="himasfont">Ibrahim Baher</p>
                        <br><br>
                        
                  
                       
                            <h3 class="slider">Email</h3>
                            <p class="himasfont">Ibrahim.baher@email.com</p>
                        </div>
                       
      </div>
                        </div>
                        <div style = "position:relative; left:0px; bottom:150px;">
                                
                                <button type="submit" onclick="location.href = '{{route('user.editProfile')}}';" class="button button-contactForm boxed-btn">Edit profile</button>
                                </div>
                            
                                <div style = "position:relative; left:185px; bottom:210px;">
                                
                                <button type="submit" class="button button-contactForm boxed-btn">Delete Profile</button>
                            
                                </div>
                           
                                <div style = "position:relative; left:385px; bottom:270px;">
                                <button type="submit" onclick="location.href = '{{route('customer.myorders')}}';" class="button button-contactForm boxed-btn">Show Orders</button>
                                </div>
                           
                            
    </div>
    

                
  

@endsection