@extends('layout')
@section('title','My Orders')
@section('content')
<div class="contact-section">
    <div class="container">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">My Orders</h3><br>
            </div>

            <button class="accordion">
                <div class="order-row">
                    <div class="order-column">
                    <a class="order-button"> OrderID: 12</a>
                    </div>  
                    <div class="order-column">
                    <a class="order-button"> Date created: 12/3/2021</a>
                    </div>  
                    <div class="order-column">
                    <a class="order-button"> Order Type: Package</a>
                    </div>    
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Order Description
                </p>
            </div>

            <button class="accordion">
                <div class="order-row">
                    <div class="order-column">
                    <a class="order-button"> OrderID: 6</a>
                    </div>  
                    <div class="order-column">
                    <a class="order-button"> Date created: 1/7/2020</a>
                    </div>  
                    <div class="order-column">
                    <a class="order-button"> Order Type: Event</a>
                    </div>    
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Order Description
                </p>
            </div>
        </div>
    </div>
</div>
    
@endsection