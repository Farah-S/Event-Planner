@extends('layout')
@section('title','Opening')
@section('content')

<div class="contact-section">
    <div class="container border-right border-left">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title-events">Opening</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('events.storeOpening')}}" method="post" id="newProductForm" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    <!-- user id sent as hidden param -->
                    <input type="hidden" id="id" name="id" value="2"> 
                    <!-- tables & chairs -->
                    <div class="form-group">
                        <input type="checkbox" id="table" name="table" value="yes" {{ old('table') == 'yes' ? 'checked' : '' }}/>
                        <label for="table" class="checkbox-label" style='display: inline-block;'>Tables & Chairs</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='tablesOptions' name='tablesOptions' style='display:none;'>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Number of Chairs *</h3>
                                <input class="white-form-inner valid" name="numberOfChairs" id="numberOfChairs" value="{{old('numberOfChairs')}}" min=0 type="number" step=1 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('numberOfChairs')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Number of Tables *</h3>
                                <input class="white-form-inner valid" name="numberOfTables" id="numberOfTables" value="{{old('numberOfTables')}}" min=0 type="number" step=1 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('numberOfTables')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Color of Table Cloths *</h3>
                                <input class="white-form-inner valid" name="clothColor" id="clothColor" value="{{old('clothColor')}}" minlength='1' type="text" placeholder="Ex: Red, White">
                                @error('clothColor')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Color of Chairs *</h3>
                                <input class="white-form-inner valid" name="chairColor" id="chairColor" value="{{old('chairColor')}}" minlength='1' type="text" placeholder="Ex: White, Purple">
                                @error('chairColor')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Shape of Tables *</h3>
                                <div class='inner-div'>
                                    <input type="radio" id="rectangular" name="tableShape" value="rectangular" checked>
                                    <label for='Rectangular' class="radio-label" style='display: inline-block;'> Rectangular</label><br>
                                    <input type="radio" id="round" name="tableShape" value="round"  {{ old('tableShape') == 'round' ? 'checked' : '' }}>
                                    <label for='round' class="radio-label" style='display: inline-block;' > Round</label><br>
                                    <input type="radio" id="square" name="tableShape" value="square" {{ old('tableShape') == 'square' ? 'checked' : '' }}>
                                    <label for='square' class="radio-label" style='display: inline-block;'> Square</label><br>
                                    <input type="radio" id="else" name="tableShape" value="else" {{ old('tableShape') == 'else' ? 'checked' : '' }}>
                                    <label for='else' class="radio-label" style='display: inline-block;'> Else</label><br>
                                    <div class="form-group outer-div" id='elseTextbox' name='elseTextbox' style='display:none;'>
                                        <!-- <div class='inner-div'> -->
                                            <input class="white-form-inner valid" name="elseTableShape" id="tableShape" value="{{old('elseTableShape')}}" minlength='1' type="text" placeholder="Enter desired shape">
                                            @error('elseTableShape')
                                            <label class='error'>
                                                {{$message}}
                                            </label>
                                            @enderror
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of tables & chairs -->
                    
                    <!-- centerpiece -->
                    <div class="form-group">
                        <input type="checkbox" id="cp" name="cp" value="yes" {{ old('cp') == 'yes' ? 'checked' : '' }}/>
                        <label for="cp" class="checkbox-label" style='display: inline-block;'>Centerpiece</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='centerpieceOptions' name='centerpieceOptions' style='display:none;'>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Color of Flowers *</h3>
                                <input type='text' class="white-form-inner valid" name="flowersColor" minlength=1 id="flowersColor" value="{{old('flowersColor')}}" placeholder="Ex: Red">
                                @error('flowersColor')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Shape of the Vases *</h3>
                                <input type='text' class="white-form-inner valid" name="vaseShape" minlength=1 id="vaseShape" value="{{old('vaseShape')}}" placeholder="Ex: Round, any">
                                @error('vaseShape')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of centerpiece -->

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

                    <!-- decoration -->
                    <div class="form-group">
                        <input type="checkbox" id="decorations" name="decorations" value="yes" {{ old('decorations') == 'yes' ? 'checked' : '' }}/>
                        <label for="decorations" class="checkbox-label" style='display: inline-block;'>Decorations</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='decorationOptions' name='decorationOptions'  style='display:none;'>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Available Budget for Decorations *</h3>
                                <input class="white-form-inner valid" name="decoBudget" id="decoBudget" value="{{old('decoBudget')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('decoBudget')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group inner-div">
                                <h3 class="slider inner-form-item-title">Decoration Details *</h3>
                                <div class="form-group">
                                    <textarea class="white-form w-100" style="padding:1.5%" name="decodetails" value="{{old('decodetails')}}" id='decodetails' minlength="50" cols="30" rows="9" placeholder='Write the details of your desired decoration here'>{{old('decodetails')}}</textarea>
                                    @error('decodetails')
                                    <label class='error'>
                                        {{$message='You must write at least 50 characters'}}
                                    </label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of decoration -->

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

                    <!-- marketing -->
                    <div class="form-group">
                        <input type="checkbox" id="market" name="market" value="yes" {{ old('market') == 'yes' ? 'checked' : '' }}/>
                        <label for="market" class="checkbox-label" style='display: inline-block;'>Marketing</label>
                        <!-- start of hidden div -->
                        <div class="form-group outer-div" id='marketingOptions' name='marketingOptions' style='display:none;'>
                            <div class="form-group inner-div">
                                <input class="valid" value="online" {{ (is_array(old('marketing')) and in_array('online', old('marketing'))) ? 'checked' : '' }} name="onlineAD" id="onlineAD" type="checkbox">
                                <label for='onlineAD' class="checkbox-label" style='display: inline-block;'> Online Advertisement</label>
                                <br>
                                @error('onlineAD')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                                <br>
                                <input class="valid" value="bill" {{ (is_array(old('marketing')) and in_array('bill', old('marketing'))) ? 'checked' : '' }} name="billboardAD" id="billboardAD" type="checkbox">
                                <label for='billboardAD' class="checkbox-label" style='display: inline-block;'> Billboard Advertisement</label>
                                <br>
                                @error('billboardAD')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                                <br>
                                <h3 class="slider form-item-title">Available Budget for Marketing *</h3>
                                <input class="white-form valid" name="marketingBudget" id="marketingBudget" value="{{old('marketingBudget')}}" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                                @error('marketingBudget')
                                <label class='error'>
                                    {{$message}}
                                </label>
                                @enderror
                            </div>
                        </div>
                        <!-- end of hidden div -->
                    </div>
                    <!-- end of marketing -->

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
                    <p class="required">Fields with * are required</p>
                    </div>
                    <div class="form-group mt-3" style="text-align:center">
                        <button type="submit" name='submit' class="button button-contactForm boxed-btn">Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script src="{{url('js/checkboxShowProduct.js')}}"></script>
@endsection