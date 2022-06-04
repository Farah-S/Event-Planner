<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Event;
use App\Models\package;
use App\Models\decoration;
use App\Models\centerpiece;
use App\Models\ledScreen;
use App\Models\marketing;
use App\Models\table;
/* use App\Models\CustomOrder;
use App\Models\EventOrder;
use App\Models\PackageOrder; */
use App\Models\customEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all orders
        
        $events = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('event_order', 'event_order.order_id', '=', 'orders.id')
            ->join('events', 'event_order.event_id', '=', 'events.id')
            ->select('users.first_name','users.last_name', 'orders.id AS orderID','events.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 
        $wrapped_events=array();
        $i=0;
        foreach($events as $e){
            $array=(array)$e;
            $array['type']='event';
            $event = new Event($array);
            $event->setType('event');
            $wrapped_events[$i]=$event;
            $deco=decoration::where('event_id', '=', $e->id)->first();
            if($deco!=NULL){
                $deco->setEvent($wrapped_events[$i]);
                $deco->setType("decoration");
                $wrapped_events[$i]=$deco;
            }  
            $cp=centerpiece::where('event_id', '=', $e->id)->first();
            if($cp!=NULL){
                
                $cp->setEvent($wrapped_events[$i]);
                $cp->setType("centerpiece");
                $wrapped_events[$i]=$cp;
            }
            $led=ledScreen::where('event_id', '=', $e->id)->first();
            if($led!=NULL){
                
                $led->setEvent($wrapped_events[$i]);
                $led->setType("ledScreen");
                $wrapped_events[$i]=$led;
            } 
            $marketing=marketing::where('event_id', '=', $e->id)->first();
            if($marketing!=NULL){
                
                $marketing->setEvent($wrapped_events[$i]);
                $marketing->setType("marketing");
                $wrapped_events[$i]=$marketing;
                
            } 
            $tables=table::where('event_id', '=', $e->id)->first();
            if($tables!=NULL){
                
                $tables->setEvent($wrapped_events[$i]);
                $tables->setType("table");
                $wrapped_events[$i]=$tables;
            } 
            $i+=1;
        }
        
        $customs = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('custom_event_order', 'custom_event_order.order_id', '=', 'orders.id')
            ->join('custom_events', 'custom_event_order.custom_event_id', '=', 'custom_events.id')
            ->select('users.first_name','users.last_name', 'orders.id AS orderID','custom_events.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 
        
        $packages = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('order_package', 'order_package.order_id', '=', 'orders.id')
            ->join('packages', 'order_package.package_id', '=', 'packages.id')
            ->select('users.first_name','users.last_name', 'orders.id AS orderID','packages.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 

        $orders=$events->merge($customs);
        $orders=$orders->merge($packages)->sortByDesc('orderID')->values();
        
        return view('admins/allOrders',['events'=>$wrapped_events,'orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userid, $event_package_id, $type)
    {
        //create a new order
        $order=new Order();
        $order->customer_id=$userid;
        $order->order_type=$type;
        $order->save();
        
        //tie to pivot table
        switch($type){
            case 'customEvent':
                $customevent = customEvent::find($event_package_id);
                $order->customEvent()->attach($customevent);
                break;
            case 'package':
                $package = package::find($event_package_id);
                $order->package()->attach($package);
                break;
            case 'event':
                $event = Event::find($event_package_id);
                $order->event()->attach($event);
                break;
            default:
                //add exception to show there is an invalid type
                break;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     * 
     */
    public function showCustomerOrders() //, $type
    {
        $userid=Auth::guard('customer')->user()->id;
        #dd($userid);

        $events = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('event_order', 'event_order.order_id', '=', 'orders.id')
            ->join('events', 'event_order.event_id', '=', 'events.id')
            ->where('users.id', '=', "$userid")
            ->select('orders.id AS orderID','events.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 
        $wrapped_events=array();
        $i=0;
        foreach($events as $e){
            $array=(array)$e;
            $array['type']='event';
            $event = new Event($array);
            $event->setType('event');
            $wrapped_events[$i]=$event;
            $deco=decoration::where('event_id', '=', $e->id)->first();
            if($deco!=NULL){
                $deco->setEvent($wrapped_events[$i]);
                $deco->setType("decoration");
                $wrapped_events[$i]=$deco;
            }  
            $cp=centerpiece::where('event_id', '=', $e->id)->first();
            if($cp!=NULL){
                
                $cp->setEvent($wrapped_events[$i]);
                $cp->setType("centerpiece");
                $wrapped_events[$i]=$cp;
            }
            $led=ledScreen::where('event_id', '=', $e->id)->first();
            if($led!=NULL){
                
                $led->setEvent($wrapped_events[$i]);
                $led->setType("ledScreen");
                $wrapped_events[$i]=$led;
            } 
            $marketing=marketing::where('event_id', '=', $e->id)->first();
            if($marketing!=NULL){
                
                $marketing->setEvent($wrapped_events[$i]);
                $marketing->setType("marketing");
                $wrapped_events[$i]=$marketing;
                
            } 
            $tables=table::where('event_id', '=', $e->id)->first();
            if($tables!=NULL){
                
                $tables->setEvent($wrapped_events[$i]);
                $tables->setType("table");
                $wrapped_events[$i]=$tables;
            } 
            $i+=1;
        }
        
        $customs = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('custom_event_order', 'custom_event_order.order_id', '=', 'orders.id')
            ->join('custom_events', 'custom_event_order.custom_event_id', '=', 'custom_events.id')
            ->where('users.id', '=', "$userid")
            ->select('orders.id AS orderID','custom_events.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 
        
        $packages = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('order_package', 'order_package.order_id', '=', 'orders.id')
            ->join('packages', 'order_package.package_id', '=', 'packages.id')
            ->where('users.id', '=', "$userid")
            ->select('orders.id AS orderID','packages.*','orders.order_type')
            ->orderBy('orders.id', 'desc')
            ->get(); 

        $orders=$events->merge($customs);
        $orders=$orders->merge($packages)->sortByDesc('orderID')->values();

        /* switch($type){
            case 'customEvent':
                $order = CustomOrder::findOrFail($order->id);
                break;
            case 'package':
                $order = PackageOrder::findOrFail($order->id);
                break;
            case 'event':
                $order = PackageOrder::findOrFail($order->id);
                break;
            default:
                //add exception to show there is an invalid type
                break;
        }
        return $order = customEvent::findOrFail($id); */
        return view('/customers/myOrders',['events'=>$wrapped_events,'orders'=>$orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function packageorder($packageid) { 
        $user=Auth::guard('customer')->user()->id;
        $this->create($user,$packageid,'package');
        return redirect()->route('home.home');
    }
}
