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
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"><br></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""><br></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter password" value=""><br></div>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" placeholder="re-enter password" value=""><br></div>

                </div>
                <div class="row mt-3">
                    <label class="button button-contactForm boxed-btn custom-file-upload">
                                    <input type="file"/>
                                    <i class="fa fa-cloud-upload"></i> Upload Image
                                </label>
                </div>
                <div class="mt-5 text-center"><button class="button button-contactForm boxed-btn" type="button">Save Changes</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection