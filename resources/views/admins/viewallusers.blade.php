@extends('layout')
@section('title','View Users')
@section('content')
<section class="contact-section">
<!-- <div class="slider_area bg-test-img"> -->
    <div class="row justify-content-center">
                        <div class="col-12 ">
                            <h3 class=" slider slider2 align-mid">Users Table</h3>
                        </div>
                    <!-- </div> -->
<div class="container">
<input class="form-control" id="searchbar" type="text" placeholder="Search..">
<div class="row">
<div class="col-md-12 text-right">
  <!-- <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User Type -->
    <!--<span class="caret"></span></button>-->
    <!-- <ul class="dropdown-menu">
      <li>Admin</li>
      <li>Cleint</li>
    </ul>
  </div> -->
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-6">
<table class="table table-bordered table-dark table-hover">
    <caption>List of Client</caption>
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">User Type</th>
        </tr>
    </thead>
    <tbody>
     
        @foreach ($users as $user)
        
           <tr><td>{{$user->id}}</td><td>{{$user->first_name}}</td><td>{{$user->last_name}}</td><td>{{$user->user_type}}</td></tr>
           
        @endforeach
        
    </tbody>
</table>
</div>
<!--the other table's section-->
<div class="col-md-6">
<table class="table table-bordered table-dark table-hover btn-inline">
    <caption>List of Admins</caption>
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">User Type</th>
        </tr>
    </thead>
    <tbody>
     
        @foreach ($admins as $admin)
        
           <tr><td>{{$admin->id}}</td><td>{{$admin->first_name}}</td><td>{{$admin->last_name}}</td><td>{{$admin->user_type}}</td><div class="col-md-2"><button type="submit" class="btn btn-danger btn-sm" value="Delete Profile" onclick="return confirm('Are you sure you want to delete this profile?')">Delete</div></button></tr>
           
        @endforeach
        
    </tbody>
</table>
</div>
<div class="col-md-8">
    <button type="submit" class="btn btn-danger btn-sm" value="Delete Profile" onclick="return confirm('Are you sure you want to delete this profile?')">Delete
</button>
</div>
</div>
</div>
</div>

</section>

@endsection