@extends('layout')
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
                                    <a href="#">View</a>
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
                                <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Corprate</h3>
                            <p>Pick the Easter Package you like with variable prices</p>
                        </div>
                    </div>
                    

                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/ani2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Aniversaries</h3>
                            <p>Pick the Ramadan Package you like with variable prices</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/product.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>New product</h3>
                            <p>Customize your new product reveal conference with variable prices</p>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/Events/grad2.jpg" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                <a href="#" >View</a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Graduation Parties</h3>
                            <p>Pick the Halloween Package you like with variable prices</p>
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

            </div>
        </div>
    </div>
    
@endsection