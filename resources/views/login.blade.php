@extends('layout')
@section('title','Log in')
@section('content')
<section class="contact-section">
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-8 align-self-center">
                        <h3 class=" slider slider2 slider3">Log In</h3><br>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="loginForm" novalidate="novalidate">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" minlength=8 id="password" input type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Password"><br>
                                        <input type="checkbox" onclick="myFunction()"> Show Password
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3 align-mid">
                                <button type="submit" class="button button-contactForm boxed-btn">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
@endsection