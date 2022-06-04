@extends('redlayout')
@section('title','Events')
@section('content')

<div class="speakers_area inc_padd">
        <div class="container">
            <div class="doqrow">
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/welcome2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                    <a href="{{route('events.welcomeparty')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>WelcomeParties</h3>
                            <p>Customize the Welcome Party you dream of with variable prices</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/corp2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.conferences')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Confrences</h3>
                            <p>Customize the event that suits your purposes with variable prices </p>
                        </div>
                    </div>

                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/pmv-chamara-1kCDtHVl064-unsplash.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.branding')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Branding</h3>
                            <p>reache more customers by properly branding for your products </p>
                        </div>
                    </div>
                    

                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/ani2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.anniversary')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Aniversaries</h3>
                            <p>lets us celebrate with you your everlasting aniversaries</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/product.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.newproduct')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>New product</h3>
                            <p>Customize your new product reveal conference with variable prices</p>
                        </div>
                    </div>

                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.custom')}}" >Customise</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Make custom event</h3>
                            <p>Something Else you want ? Customise the event you dream of</p>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/grad2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.graduation')}}" >View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Graduation Parties</h3>
                            <p>let us help you to celebrate your university students graduation</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/alexander-kovacs-GMGdhtYeROY-unsplash.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="{{route('events.opening')}}">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Opening Event</h3>
                            <p>celebrate the beginning of your new success story</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    
@endsection