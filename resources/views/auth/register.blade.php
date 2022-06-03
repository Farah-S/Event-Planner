@extends('redlayout')
@section('title','Signup')
@section('content')

<section class="contact-section signup_bg ">
            <div class="container border-right border-left">
                <div class="row justify-content-center">
                    <div class="col-12" style="margin-bottom:2%">
                        <h3 class=" slider slider2 align-mid">Sign Up</h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{route('user.storesignup')}}" method="post" id="signupForm" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf    
                        <div class="row justify-content-center">
                            <div class="col-sm-6 justify-content-center">
                                    <div class="form-group">
                                        <input class="form-control valid @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" id="first_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder="First Name" required autocomplete="name">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('last_name') is-invalid @enderror" value="{{old('last_name')}}" name="last_name" id="last_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder="Last Name">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('password') is-invalid @enderror" minlength=8 name="password" id="password" input type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <br><input type="checkbox" id='show' onclick="myFunction()"> <label style='color:black' for="show">Show Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                               <!-- <input type="file" name="profilepic" class="form-control-file" > -->
                                <label class="button button-contactForm boxed-btn custom-file-upload">
                                    <input type="file" id="image" name="image"/>
                                    <i class="fa fa-cloud-upload"></i> Upload Image
                                </label><br>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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