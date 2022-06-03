@extends('redlayout')
@section('title','Log in')
@section('content')
<section class="contact-section">
            <div class="container border-right border-left">
                <div class="row justify-content-center" >
                    <div class="col-8 align-self-center">
                        <h3 class=" slider slider2 slider3">Log In</h3><br>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('login') }}" method="post" id="loginForm" novalidate="novalidate"  required autocomplete="email">
                        @csrf

                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('email') is-invalid @enderror" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('password') is-invalid @enderror"  name="password" minlength=8 id="password" input type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input type="checkbox" onclick="myFunction()" id='show' name='show'><label for='show' class="password" style='display: inline-block;'>&nbsp; Show password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3 align-mid">
                                <button type="submit" class="button button-contactForm boxed-btn">Log In</button>
                                @if (Route::has('password.request'))
                                    <a class="button button-contactForm boxed-btn" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
@endsection