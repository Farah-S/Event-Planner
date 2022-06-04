@extends('redlayout')
@section('title','Admin View Profile')
@section('content')
<div class="speakers_area inc_padd ">
    <div class="container d-flex ">
        <div class="row test-pad">
            <div class="col-lg-12 text-left">
                <div class="card121">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                        <img src="{{ asset('img/speakers/1.png')}}" >
                        </div>
                        
                       
                                        
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 text-left">
                @if($user->user_type=='customer')
                <a href="{{route('admin.addAdmin',['id'=>$user->id])}}"><button type="submit" class="button button-contactForm boxed-btn">Add as Admin</button></a>
                @elseif($user->user_type=='admin')
                <a href="{{route('admin.removeAdmin',['id'=>$user->id])}}"><button type="submit" class="button button-contactForm boxed-btn">Remove as Admin</button></a>
                @endif
</div>
                            
<div class="col-md-4 text-left">

                                
                        <button type="submit" class="button button-contactForm boxed-btn">Delete Profile</button>
</div>
                    
                    
<div class="col-md-4 text-left">

                        <button type="submit" onclick="location.href = '{{route('customer.myorders')}}';" class="button button-contactForm boxed-btn">Show Orders</button>
</div>
            </div>
            <div class = "col-lg-6 text-left">
                <div class="card121">
                    <div class="row justify-content-center ">
                        <div class="about_info">
                            <div class="section_title">
                                <h3>Name</h3>
                                <h4>Ibrahim Baher</h4>
                                <h3>Email</h3>
                                <h4>Ibrahim.baher@email.com</h4>
                                <h3>Phone Number</h3>
                                <h4>+201092171234</h4>
                                <h3>User Type</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>    
        </div>  
    </div>  
@endsection