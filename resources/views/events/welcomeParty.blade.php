@extends('layout')
@section('title','Welcome Party')
@section('content')

<div class="contact-section">
    <div class="container border-right border-left">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title-events">Welcome Party</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('events.storeWelcomeParty')}}" method="post" id="welcomePartyForm" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    <!-- user id sent as hidden param -->
                    <input type="hidden" id="id" name="id" value="2"> 
                    <!-- sound setup -->
                    <div class="form-group">
                        <input class="disable-select valid" value="yes" {{ old('soundSetup') == 'yes' ? 'checked' : '' }} name="soundSetup" id="soundSetup" type="checkbox">
                        <label for='soundSetup' class="checkbox-label" style='display: inline-block;'> Sound Setup</label>
                    </div>
                    <!-- end of sound setup -->

                    <!-- stage -->
                    <div class="form-group">
                        <input type="checkbox" id="stage" name="stage" value="yes" {{ old('stage') == 'yes' ? 'checked' : '' }}/>
                        <label for="stage" class="checkbox-label" style='display: inline-block;'>Stage</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='stageOptions' name='stageOptions' style='display:none;'>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Stage Length (in meters) *</h3>
                                <input class="white-form-inner valid" name="stageLength" id="stageLength" value="{{old('stageLength')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('stageLength')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Stage Width (in meters) *</h3>
                                <input class="white-form-inner valid" name="stageWidth" id="stageWidth" value="{{old('stageWidth')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('stageWidth')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of stage -->

                    <!-- lights colors -->
                    <div class="form-group">
                         <h3 class="slider form-item-title">Colors of the Lights </h3>
                        <input class="white-form valid" value="{{old('lightsColor')}}" name="lightsColor" id="lightsColor" type="text" placeholder='Ex: White'>
                    </div>
                    <!-- end of lights colors -->

                    <!-- led screens -->
                    <div class="form-group">
                        <input type="checkbox" id="ledScreen" name="ledScreen" value="yes" {{ old('ledScreen') == 'yes' ? 'checked' : '' }}/>
                        <label for="ledScreen" class="checkbox-label" style='display: inline-block;'>LED Screens</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='ledOptions' name='ledOptions'  style='display:none;'>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Size of Each Screen *</h3>
                                <input class="white-form-inner valid" name="size" id="size" value="{{old('size')}}" minlength='3' maxlength='10' type="text" placeholder="Ex: 1280 x 720">
                                @error('size')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Number of Screens *</h3>
                                <input class="white-form-inner valid" name="numberOfScreens" id="numberOfScreens" value="{{old('numberOfScreens')}}" min=0 type="number" step=1 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('numberOfScreens')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of led screens -->

                    <!-- media production -->
                    <h3 class="slider form-item-title">Media Production :</h3>
                    <div class="form-group inner-div">
                        <input class="valid" value="yes" {{ old('photo') == 'yes' ? 'checked' : '' }} name="photo" id="photo" type="checkbox">
                        <label for='photo' class="checkbox-label" style='display: inline-block;'> Photo</label>
                        <br>
                        <input class="valid" value="yes" {{ old('video') == 'yes' ? 'checked' : '' }} name="video" id="video" type="checkbox">
                        <label for='video' class="checkbox-label" style='display: inline-block;'> Video</label>
                    </div>
                    <!-- end of media production -->

                    <!-- total budget -->
                    <div class="form-group">
                        <h3 class="slider form-item-title">Total Available Budget *</h3>
                        <input class="white-form valid" name="budget" id="budget" value="{{old('budget')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                        @error('budget')
                        <label class='error'>
                            {{$message}}
                        </label>
                        @enderror
                    </div>
                    <!-- end of total budget -->

                    <!-- indoors -->
                    <div class="form-group">
                        <input class="valid" value="yes" {{ old('indoors') == 'yes' ? 'checked' : '' }} name="indoors" id="indoors" type="checkbox">
                        <label for='indoors' class="checkbox-label" style='display: inline-block;'> Indoors Event</label>
                    </div>
                    <!-- end of indoors -->

                    <!-- cancel policy check -->
                    <div class="form-group">
                        <input class="valid" value="yes" {{ old('cancel') == 'yes' ? 'checked' : '' }} name="cancel" id="cancel" type="checkbox">
                        <label for='cancel' class="checkbox-label" style='display: inline-block;'> I have read the <a href='#' class='link'>cancel policy</a> of Ukulele *</label><br>
                        @error('cancel')
                        <label class='error'>
                            {{$message}}
                        </label>
                        @enderror
                        <!-- <label for="cancel" class="error" style="display: inline-block;"></label> -->
                    <p class="required">Fields with * are required</p>
                    </div>
                    <div class="form-group mt-3" style="text-align:center">
                        <button type="submit" class="button button-contactForm boxed-btn">Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{url('js/checkboxShowWelcome.js')}}"></script>
@endsection