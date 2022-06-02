@extends('layout')
@section('title','Edit Profile')
@section('content')
<section class="contact-section">
<div class="container rounded bg-white  ">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Ahmed</span><span class="text-black-50">useraccount@gmail.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
            <div class="col-12">
                    <h3 class=" slider slider2 align-mid">Edit Profile</h3>
                    </div>
            @php
                
                $user=Auth::guard('admin')->user();
                $user=Auth::guard('owner')->user();
    
            @endphp

            <form class="form-contact contact_form" action="{{route('user.update')}}" method="post" id="editProfileForm" novalidate="novalidate">
                @csrf    
                <div class="row mt-2">
                    @php
                        if (Auth::guard('customer')->check())
                        {
                            $user=Auth::guard('customer')->user();
                        }
                        else if (Auth::guard('admin')->check())
                        {
                            $user=Auth::guard('admin')->user();
                        }
                        else if (Auth::guard('owner')->check())
                        {
                            $user=Auth::guard('owner')->user();
                        }
                    $userId= $user->id;
                    @endphp
                    <input type="hidden" id="id" name="id" value="{{$userId}}">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" id="first_name" name="first_name" class="form-control" value="{{$user->first_name}}" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" id="last_name" name="last_name" class="form-control" value="{{$user->last_name}}" placeholder="surname"><br></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" id="email" name="email" class="form-control" placeholder="enter email id" value="{{$user->email}}"><br></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" id="password" name="password" class="form-control" placeholder="enter password" value="{{$user->password}}"><br></div>
                   
                </div>
                <div class="row mt-3">
                    <label class="button button-contactForm boxed-btn custom-file-upload">
                                    <input type="file"/>
                                    <i class="fa fa-cloud-upload"></i> Upload Image
                                </label>
                </div>
                <div class="form-group mt-3 align-mid">
                        <button type="submit" class="button button-contactForm boxed-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection