@extends('layout')
@section('title','Signup')
@section('content')

<section class="contact-section signup_bg ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class=" slider slider2 align-mid">Sign Up</h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row justify-content-center">
                            <div class="col-sm-6 justify-content-center">
                                    <div class="form-group">
                                        <input class="form-control valid" name="fname" id="fname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="lname" id="lname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="" id="password" input type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Password">
                                        <input type="checkbox" onclick="myFunction()"> Show Password
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                               <!-- <input type="file" name="profilepic" class="form-control-file" > -->
                                <label class="button button-contactForm boxed-btn custom-file-upload">
                                    <input type="file"/>
                                    <i class="fa fa-cloud-upload"></i> Upload Image
                                </label>
                            </div>
                            <div class="form-group mt-3 align-mid">
                                <button type="submit" class="button button-contactForm boxed-btn">Sign-Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection