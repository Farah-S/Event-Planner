@extends('layout')
@section('title','Profile')
@section('content')
@auth
<div class="slider_area">
    </div>
<div class="ibcontainer">
                            <img src="{{ asset('img/speakers/1.png')}}">
                      
                        <div style = "position:relative; left:600px; bottom:450px;">
                        <div class="about_info">
                        <div class="section_title">
                            <h3 class="slider">Name</h3>
                            <p class="himasfont"></p>
                        <br><br>
                        
                  
                       
                            <h3 class="slider">Email</h3>
                            <p class="himasfont"></p>
                        </div>
                       
      </div>
                        </div>
                        <div style = "position:relative; left:0px; bottom:150px;">
                                
                                <button type="submit" onclick="location.href = '';" class="button button-contactForm boxed-btn">Edit profile</button>
                                </div>
                            
                                <div style = "position:relative; left:185px; bottom:210px;">
                              
                                <form action="" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="button button-contactForm boxed-btn" value="Delete Profile">
                                </form>
                                </div>
                           
                                <div style = "position:relative; left:385px; bottom:270px;">
                                <button type="submit" onclick="location.href = '{{route('customer.myorders')}}';" class="button button-contactForm boxed-btn">Show Orders</button>
                                </div>
                           
                            
    </div>
    


@endauth
@endsection