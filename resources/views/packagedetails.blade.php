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
                    <div class="form-group mt-3">
                                <button type="submit" action="{{route('contact.store')}}" class="button button-contactForm boxed-btn">Buy</button>
                            </div>
                </div>
            </div>
    </div>
    </div>
                    
  

@endsection