@extends('redlayout')
@section('title','All Orders')
@section('content')
<div class="contact-section">
    <div class="container">
        <div class="row" style="justify-content:center">
            <div class="col-12">
                <h3 class=" center-title orders-title">All Orders</h3><br>
            </div>
            @if(count($orders)>0)
            <?php $j=0; ?>
                @for ($i = 0; $i < count($orders); $i++)
                    <!-- foreach($orders as $order) -->
                    <?php $order=$orders[$i]; ?>
                    <button class="accordion">
                        <div class="order-row">
                            <div class="order-column2">
                                <a class="order-button"> UserName: {{ $order->first_name }} {{ $order->last_name }}</a>
                            </div> 
                            <div class="order-column2">
                                <a class="order-button"> OrderID: {{ $order->orderID }}</a>
                            </div>  
                            <div class="order-column2">
                                <a class="order-button"> Date created: {{ $order->created_at }}</a>
                            </div>  
                            <div class="order-column2">
                                @if($order->order_type=='event')
                                <a class="order-button"> Order Type: {{ $order->type }}</a>
                                @else
                                <a class="order-button"> Order Type: {{ $order->order_type }}</a>
                                @endif
                            </div>    
                        </div>
                    </button>
                    @if($order->order_type=='event')
                        <div class="accordion-content">
                            <p>
                                <?php 
                                    $items=array();
                                    $event=$events[$j];
                                    $table=$event->getType();
                                    while($table!='event'){
                                        $items[$table]=$event; 
                                        $event=$event->getEvent();
                                        $table=$event->getType();
                                    }
                                ?>
                                <!-- <h3 style='text-align:center'>{{$order->type}}</h3> -->
                                <br>
                                <table class='order-table'>
                                    <h3 class='orders-sections'>General</h3>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                        Indoors Event: 
                                        </td>
                                        <td class='order-table'>
                                            {{ ($order->indoors==0 ? "No" : "Yes") }}
                                        </td>
                                    </tr>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Sound Setup:
                                        </td>
                                        <td class='order-table'>
                                            {{ ($order->soundSetup==0 ? "No" : "Yes") }}
                                        </td>
                                    </tr>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Stage Length:
                                        </td>
                                        <td class='order-table'>
                                            {{$order->stageLength}}m
                                        </td>
                                    </tr>  
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Stage Width:
                                        </td>
                                        <td class='order-table'>
                                            {{$order->stageWidth}}m
                                        </td>
                                    </tr>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Color of Lights:
                                        </td>
                                        <td class='order-table'>
                                            {{$order->lightsColor}}
                                        </td>
                                    </tr> 
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Photo:
                                        </td>
                                        <td class='order-table'>
                                            {{ ($order->photo==0 ? "No" : "Yes") }}
                                        </td>
                                    </tr>     
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Video:
                                        </td>
                                        <td class='order-table'>
                                            {{ ($order->video==0 ? "No" : "Yes") }}
                                        </td>
                                    </tr>   
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Total Budget:
                                        </td>
                                        <td class='order-table'>
                                            {{$order->budget}} EGP
                                        </td>
                                    </tr> 
                                    @if($order->type=='graduation')
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Plixie:
                                            </td>
                                            <td class='order-table'>
                                                {{ ($order->plixie==0 ? "No" : "Yes") }}
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                                @if(array_key_exists("table",$items))
                                    <br>
                                    <table class='order-table'>
                                        <h3  class='orders-sections'>Tables & Chairs</h3>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Number of Chairs:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['table']->numberOfChairs }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Number of Tables:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['table']->numberOfTables }}
                                            </td>
                                        </tr>   
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Table Cloth Color:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['table']->clothColor }}
                                            </td>
                                        </tr>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Chairs Color:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['table']->chairColor }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Tables Shape:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['table']->tableShape }}
                                            </td>
                                        </tr>                                             
                                    </table>
                                @endif
                                @if(array_key_exists("marketing",$items))
                                    <br>
                                    <table class='order-table'>
                                        <h3  class='orders-sections'>Marketing</h3>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Online Advertisement:
                                            </td>
                                            <td class='order-table'>
                                                {{ ($items['marketing']->onlineAD==0 ? "No" : "Yes") }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Billboard Advertisement:
                                            </td>
                                            <td class='order-table'>
                                                {{ ($items['marketing']->billboardAD==0 ? "No" : "Yes") }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Marketing Budget:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['marketing']->budget }}
                                            </td>
                                        </tr>                                             
                                    </table>
                                @endif
                                @if(array_key_exists("ledScreen",$items))
                                    <br>
                                    <table class='order-table'>
                                        <h3  class='orders-sections'>LED Screens</h3>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Size:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['ledScreen']->size }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Number of Screens:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['ledScreen']->numberOfScreens }}
                                            </td>
                                        </tr>                                             
                                    </table>
                                @endif
                                @if(array_key_exists("centerpiece",$items))
                                    <br>
                                    <table class='order-table'>
                                        <h3  class='orders-sections'>Centerpiece</h3>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Flowers color:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['centerpiece']->flowersColor }}
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Vase Shape:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['centerpiece']->vaseShape }}
                                            </td>
                                        </tr>                                             
                                    </table>
                                @endif
                                @if(array_key_exists("decoration",$items))
                                    <br>
                                    <h3  class='orders-sections'>Decorations</h3>
                                    <table class='order-table'>
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Decorations Budget:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['decoration']->budget }} EGP
                                            </td>
                                        </tr> 
                                        <tr class='order-table'>
                                            <td class='order-table'>
                                                Decorations Details:
                                            </td>
                                            <td class='order-table'>
                                                {{ $items['decoration']->details }}
                                            </td>
                                        </tr>  
                                    </table>
                                @endif 
                            </p>
                        </div>
                        <?php $j++; ?>
                    @elseif($order->order_type=='customEvent')
                        <div class="accordion-content">
                            <p>
                                <h3  class='orders-sections'>Custom Event</h3>
                                <table class='order-table'>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Event Details:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->details }}
                                        </td>
                                    </tr> 
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Indoors:
                                        </td>
                                        <td class='order-table'>
                                            {{ ($order->indoors==0 ? "No" : "Yes") }}
                                        </td>
                                    </tr>   
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Available Budget:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->budget }} EGP
                                        </td>
                                    </tr>                                             
                                </table>
                            </p>
                        </div>
                    @else
                        <div class="accordion-content">
                            <p>
                                <h3  class='orders-sections'>Package</h3>
                                <table class='order-table'>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Package Name:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->name }}
                                        </td>
                                    </tr> 
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Details:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->details }}
                                        </td>
                                    </tr>   
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Price:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->price }} EGP
                                        </td>
                                    </tr>
                                    <tr class='order-table'>
                                        <td class='order-table'>
                                            Season:
                                        </td>
                                        <td class='order-table'>
                                            {{ $order->season }}
                                        </td>
                                    </tr>                                             
                                </table>
                            </p>
                        </div>
                    @endif
                   
                @endfor
            @else
                <h2>There are no orders</h2>
            @endif
        </div>
        
    </div>
</div>
    
@endsection