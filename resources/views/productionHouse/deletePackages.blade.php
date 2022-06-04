@extends('redlayout')
@section('title','Production House Packages')
@section('content')

    
<div class="contact-section">
    <div class="container border-right border-left">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title-events">Selcet to Show Package</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('productionHouse.delete')}}" method="post" id="showhideForm" novalidate="novalidate">
                    @csrf
                    <!-- <input type="hidden" id="packages" name="packages" value="{{$package}}"> -->
                    @foreach($package as $p)
                        <div class="form-group">
                            <input class="valid" value="{{$p->id}}" name="{{$p->name}}" id="{{$p->name}}" type="checkbox">
                            <label for='{{$p->name}}' class="checkbox-label" style='display: inline-block;'> {{$p->name}}</label>
                        </div>
                    @endforeach
                    <div class="form-group mt-3" style="text-align:center">
                        <button type="submit" class="button button-contactForm boxed-btn">Delete Selected</button>
                    </div>
                    <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
            
        
            
                 
        </div>
              
    </div>  
</div>  
@endsection