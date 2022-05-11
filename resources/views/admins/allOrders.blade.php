@extends('layout')
@section('title','All Orders')
@section('content')
<div class="contact-section">
    <div class="container">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class="slider center-title">All Orders</h3><br>
            </div>
            @if(count($orders)>0)
                @foreach($orders as $order)
                <button class="accordion">
                    <div class="order-row">
                        <div class="order-column2">
                            <a class="order-button"> UserName: Ibrahim Baher</a>
                        </div> 
                        <div class="order-column2">
                            <a class="order-button"> OrderID: 12</a>
                        </div>  
                        <div class="order-column2">
                            <a class="order-button"> Date created: 12/3/2021</a>
                        </div>  
                        <div class="order-column2">
                            <a class="order-button"> Order Type: {{ $order->order_type }}</a>
                        </div>    
                    </div>
                </button>
                @if($order->order_type=='event')
                    <div class="accordion-content">
                        <p>
                            <h3 style='text-align:center'>New Product</h3>
                            <table class='order-table'>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                       Indoors Event: 
                                    </td>
                                    <td class='order-table'>
                                        No
                                    </td>
                                </tr>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Sound Setup:
                                    </td>
                                    <td class='order-table'>
                                        yes
                                    </td>
                                </tr>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Stage Length:
                                    </td>
                                    <td class='order-table'>
                                        15m
                                    </td>
                                </tr>  
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Stage Width:
                                    </td>
                                    <td class='order-table'>
                                        12.5m
                                    </td>
                                </tr>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Color of Lights:
                                    </td>
                                    <td class='order-table'>
                                        Yellow
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Photo:
                                    </td>
                                    <td class='order-table'>
                                        Yes
                                    </td>
                                </tr>     
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Video:
                                    </td>
                                    <td class='order-table'>
                                        Yes
                                    </td>
                                </tr>   
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Total Budget:
                                    </td>
                                    <td class='order-table'>
                                        15,000 EGP
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Plixie:
                                    </td>
                                    <td class='order-table'>
                                        No
                                    </td>
                                </tr> 
                            </table>
                            <table class='order-table'>
                                <h3 style='text-align:center'>Decorations</h3>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Decorations Budget:
                                    </td>
                                    <td class='order-table'>
                                        5000 EGP
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Decorations Details:
                                    </td>
                                    <td class='order-table'>
                                        details
                                    </td>
                                </tr>                                             
                            </table>
                            <table class='order-table'>
                                <h3 style='text-align:center'>Centerpiece</h3>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Flowers color:
                                    </td>
                                    <td class='order-table'>
                                        Red
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Vase Shape:
                                    </td>
                                    <td class='order-table'>
                                        Round
                                    </td>
                                </tr>                                             
                            </table>
                            <table class='order-table'>
                                <h3 style='text-align:center'>LED Screens</h3>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Size:
                                    </td>
                                    <td class='order-table'>
                                        250x172
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Number of Screens:
                                    </td>
                                    <td class='order-table'>
                                        24
                                    </td>
                                </tr>                                             
                            </table>
                            <table class='order-table'>
                                <h3 style='text-align:center'>Marketing</h3>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Online Advertisement:
                                    </td>
                                    <td class='order-table'>
                                        Yes
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Billboard Advertisement:
                                    </td>
                                    <td class='order-table'>
                                        No
                                    </td>
                                </tr>                                             
                            </table>
                            <table class='order-table'>
                                <h3 style='text-align:center'>Tables & Chairs</h3>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Number of Chairs:
                                    </td>
                                    <td class='order-table'>
                                        15
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Number of Tables:
                                    </td>
                                    <td class='order-table'>
                                        16
                                    </td>
                                </tr>   
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Table Cloth Color:
                                    </td>
                                    <td class='order-table'>
                                        White
                                    </td>
                                </tr>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Chairs Color:
                                    </td>
                                    <td class='order-table'>
                                        White
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Tables Shape:
                                    </td>
                                    <td class='order-table'>
                                        Square
                                    </td>
                                </tr>                                             
                            </table>
                        </p>
                    </div>
                @elseif($order->order_type=='customEvent')
                    <div class="accordion-content">
                        <p>
                            <h3 style='text-align:center'>Custom Event</h3>
                            <table class='order-table'>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Event Details:
                                    </td>
                                    <td class='order-table'>
                                        details
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Indoors:
                                    </td>
                                    <td class='order-table'>
                                        No
                                    </td>
                                </tr>   
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Available Budget:
                                    </td>
                                    <td class='order-table'>
                                        12000 EGP
                                    </td>
                                </tr>                                             
                            </table>
                        </p>
                    </div>
                @else
                    <div class="accordion-content">
                        <p>
                            <h3 style='text-align:center'>Package</h3>
                            <table class='order-table'>
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Package NAme:
                                    </td>
                                    <td class='order-table'>
                                        details
                                    </td>
                                </tr> 
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Indoors:
                                    </td>
                                    <td class='order-table'>
                                        No
                                    </td>
                                </tr>   
                                <tr class='order-table'>
                                    <td class='order-table'>
                                        Available Budget:
                                    </td>
                                    <td class='order-table'>
                                        12000 EGP
                                    </td>
                                </tr>                                             
                            </table>
                        </p>
                    </div>
                @endif
            @endforeach
            <button class="accordion">
                <div class="order-row">
                    <div class="order-column2">
                        <a class="order-button"> UserName: Mohamed Ayman</a>
                    </div> 
                    <div class="order-column2">
                        <a class="order-button"> OrderID: 6</a>
                    </div>  
                    <div class="order-column2">
                        <a class="order-button"> Date created: 1/7/2020</a>
                    </div>  
                    <div class="order-column2">
                        <a class="order-button"> Order Type: Event</a>
                    </div>    
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Order Description
                </p>
            </div>
            @else
                <h2>There are no orders</h2>
            @endif
        </div>
        
    </div>
</div>
    
@endsection