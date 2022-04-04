@extends('layout')
@section('title','Custom Event')
@section('content')

<div class="contact-section customEvent-bg">
    <div class="container ">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">Request a Custom Event</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="customEventForm" novalidate="novalidate">
                    <div class="row">
                        <!-- diaplay current package image-->
                        <div class="form-group mt-3">
                            <label class="button button-contactForm boxed-btn custom-file-upload2">
                                <input type="file"/>
                                <i class="fa fa-cloud-upload"></i> Upload Image
                            </label>
                        </div>
                    </div>
                  
                        <h3 class="slider form-item-title">Event Details</h3>
                            <div class="form-group">
                                <textarea class="white-form w-100" name="message" minlength=50 id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Description'" placeholder="Event Description"></textarea>
                            </div>
                            <div class="form-group">
                                <h3 class="slider form-item-title">Available Budeget</h3>
                                <input class="white-form valid" name="budget" id="budget" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                            </div>
                        <div class="form-group mt-3" style="text-align:center">
                            <button type="submit" style="background: transparent;" class="button button-contactForm boxed-btn">Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection