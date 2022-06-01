@extends('layout')
@section('title','Production House Packages')
@section('content')

         
    <div class="speakers_area inc_padd">
            <div class="row">
                <div class="col-12">
                    <h3 class=" slider slider2" style="color:black;font-size:70px;text-align:center">Production House</h3>
                </div>
            </div>
        <div class="container">
        @php                                
                $num_of_rows= ceil(sizeof($package)/3);
                $package_size=sizeof($package);
        @endphp 

                @for($i=0;$i<$package_size;$i++)
                    @if($i%3==0)
                        <div class="doqrow">  
                    @endif
                        <div class="column">
                            <div class="single_speaker">
                                <div class="speaker_thumb">
                                    <img src="{{$package[$i]->path}}" alt="">
                                    <div class="hover_overlay">
                                        <div class="social_icon">
                                            <a href="{{route('productionHouse.packageDetails')}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="speaker_name text-center">
                                    <h3>{{$package[$i]->name}}</h3>
                                    <p>{{$package[$i]->details}}</p>
                                </div>
                            </div>
                        </div>
                @endfor 
        
                 
                </div>
              
        </div> 

    </div>  

@endsection