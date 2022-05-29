@extends('layout')
@section('title','Add Package')
@section('content')

<div class="contact-section">
    <div class="container border-right border-left">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">Add Package</h3><br>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="addPackageForm" novalidate="novalidate">
                    <div class="row">
                        
                        <div class="form-group mt-3">
                            <label class="button button-contactForm boxed-btn custom-file-upload2">
                                <input type="file"/>
                                <i class="fa fa-cloud-upload"></i> Upload Image
                            </label>
                        </div>
                    </div>

                    <h3 class="slider form-item-title">Package Name</h3>
                            <div class="form-group">
                                <textarea class="form-control w-100" minlength=5 name="name" id="name" cols="1" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Package Name'" placeholder="Enter Package Name"></textarea>
                            </div>
                        <h3 class="slider form-item-title">Package Details</h3>
                            <div class="form-group">
                                <textarea class="form-control w-100" minlength=20 name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Package Description'" placeholder="Enter Package Description"></textarea>
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