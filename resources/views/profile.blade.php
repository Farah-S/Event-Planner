@extends('redlayout')
@section('title','Profile')
@section('content')
<div class="slider_area">
</div>
<div class="ibcontainer">
    <img src="{{ asset('img/speakers/1.png')}}">

    <div style="position:relative; left:600px; bottom:450px;">
        <div class="about_info">
            <div class="section_title">
                <h3 class="slider">Name</h3>
                <p class="himasfont">{{$user['first_name']}} {{$user['last_name']}}</p>
                <br><br>



                <h3 class="slider">Email</h3>
                <p class="himasfont">{{$user['email']}}</p>
            </div>

        </div>
    </div>
    <div style="position:relative; left:0px; bottom:150px;">

        <button type="submit" onclick="location.href = '{{route('user.update')}}';" class="button button-contactForm boxed-btn">Edit profile</button>
    </div>

    <div style="position:relative; left:185px; bottom:210px;">

        <form action="{{route('user.deleteProfile')}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="button button-contactForm boxed-btn" value="Delete Profile">
        </form>
    </div>

    <div style="position:relative; left:385px; bottom:270px;">
        <button type="submit" onclick="location.href = '{{route('customer.myorders')}}';" class="button button-contactForm boxed-btn">Show Orders</button>
    </div>


</div>




@endsection