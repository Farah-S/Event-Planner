@extends('layout')
@section('title','Edit Package')
@section('content')

<div class="contact-section">
    <div class="container border-right border-left">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">{{$package->name}}</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('productionHouse.updatePackage')}}" method="post" id="editPackageForm" novalidate="novalidate">
                    <div class="row">
                        <!-- diaplay current package image-->
                        <div class="form-group mt-3">
                            <label class="button button-contactForm boxed-btn custom-file-upload2">
                                <input type="file"/>
                                <i class="fa fa-cloud-upload"></i> Upload Image
                            </label>
                        </div>
                    </div>
                  
                        <h3 class="slider form-item-title">Package Details</h3>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" minlength=20 id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Old Package Description'" placeholder="Old Package Description"></textarea>
                            </div>
                            <div class="form-group">
                                <h3 class="slider form-item-title">Package Price</h3>
                                <input class="form-control valid" name="price" id="price" min=0 type="number" step=0.25 onfocus="this.placeholder = ''" onblur="this.placeholder = '0'" placeholder="0">
                            </div>
                            <div class="form-group">
                                <h3 class="slider form-item-title">Package Season</h3>
                                <!-- make this a select/dropdown list instead, with none as an option -->
                                <input class="form-control valid" name="season" id="season" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'season'" placeholder="Enter Package Season">
                            </div>
                        <div class="form-group mt-3" style="text-align:center">
                            <button type="submit" class="button button-contactForm boxed-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection