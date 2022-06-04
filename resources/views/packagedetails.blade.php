@extends('redlayout')
@section('title','Package Details')
@section('content')

<div class="slider_area">
    </div>
    <!-- slider_area_start -->
    <div class="about_area">
        <div class="ibcontainer">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                       
                        <img src="{{$packages->path}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <h3>{{$packages->name}} details</h3>
                        </div>
                        <p class="ibfontsize">{{$packages->details}}</p>
                       
                    </div>
                    @auth('customer')
                    <div class="form-group mt-3">
                              <a href="{{route('customer.packageorder',['packageid'=>$packages->packageID])}}" class='link'><button type="submit" class="button button-contactForm boxed-btn">Buy Package</button></a>
                            </div>
                    @endauth
                    
                </div>
            </div>
    </div>
    </div>
                    
  

@endsection