@extends('layout')
@section('title','Custom Event')
@section('content')

<div class="contact-section customEvent-bg">
    <div class="container">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">Request a Custom Event</h3><br>
            </div>
            
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('customEvents.store')}}" method="post" id="customEventForm" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    <!-- user id sent as hidden param -->
                    <input type="hidden" id="id" name="id" value="2"> 
                    <div class="row">
                        <!-- diaplay current package image-->
                        <div class="form-group mt-3">
                            <h3 class="slider form-item-title">Example Pictures</h3>
                            <label class="button button-contactForm boxed-btn custom-file-upload2">
                                <input type="file" name='image' id='image'>
                                <i class="fa fa-cloud-upload"></i> Upload Image 
                            </label><br>
                            @error('image')
                            <label class='error'>
                                {{$message}}
                            </label>
                            @enderror
                        </div>
                    </div>
                  
                    <h3 class="slider form-item-title">Event Details *</h3>
                    <div class="form-group">
                        <textarea class="white-form w-100" style="padding:1.5%" value="{{old('details')}}" name="details" id='details' minlength=50 cols="30" rows="9" placeholder='Write your event description here'>{{ old('details') }}</textarea>
                        @error('details')
                        <label class='error'>
                            {{$message='You must write at least 50 characters'}}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h3 class="slider form-item-title">Available Budget *</h3>
                        <input class="white-form valid" name="budget" id="budget" value="{{old('budget')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                        @error('budget')
                        <label class='error'>
                            {{$message}}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="valid" value="no" {{ old('indoors') == 'no' ? 'checked' : '' }} name="indoors" id="indoors" type="checkbox">
                        <label for='indoors' class="checkbox-label" style='display: inline-block;'> Indoors Event</label>
                    </div>
                    <div class="form-group">
                        <input class="valid" value="no" {{ old('cancel') == 'no' ? 'checked' : '' }} name="cancel" id="cancel" type="checkbox">
                        <label for='cancel' class="checkbox-label" style='display: inline-block;'> I have read the <a href='#' class='link'>cancel policy</a> of Ukulele *</label><br>
                        @error('cancel')
                        <label class='error'>
                            {{$message='You must accept the cancel policy'}}
                        </label>
                        @enderror
                        <label for="cancel" class="error" style="display: inline-block;"></label>
                    <p class="required">Fields with * are required</p>
                    </div>
                    <div class="form-group mt-3" style="text-align:center">
                        <button type="submit" class="button button-contactForm boxed-btn">Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection