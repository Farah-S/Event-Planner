@extends('layout')
@section('title','Edit Package')
@section('content')

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h3 class=" slider form-title">Package name</h3>
            </div>
           
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row" style="justify-content: center">
                        <div class="form-group mt-3">
                        <!-- <input type="file" name="profilepic" class="form-control-file" > -->
                            <label class="button button-contactForm boxed-btn custom-file-upload image-label" >
                                <input type="file"/>
                                <i class="fa fa-cloud-upload"></i> Upload Image
                            </label><br><br>
                        </div>  
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn sigup-button">Sign-Up</button>
                        </div>
                    </div>
                </form>
           
        </div>
    </div>
</section>

@endsection