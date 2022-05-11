<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Event;
use App\Models\package;
/* use App\Models\CustomOrder;
use App\Models\EventOrder;
use App\Models\PackageOrder; */
use App\Models\customEvent;
use Illuminate\Http\Request;

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
        
        /* $orders = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.customer_id')
            ->join('custom_events', 'custom_event_order.order_id', '=', 'orders.id')
            ->join('custom_event_order', 'custom_event_order.order_id', '=', 'orders.id')
            ->select('users.first_name','users.last_name', 'orders.*',)
            ->get(); */
        //$orders=Order::all();
        /*View('admins/allOrders')
        ->with('orders', Order::all())
        ->with('users', User::all())
        ->with('event', Event::all())
        ->with('custom', customEvent::all())
        ->with('package', package::all()); */
        return view('admins/allOrders',['orders'=>Order::all()]);
       
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
     */
    public function show(Order $order) //, $type
    {
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
        return view('admin.allOrders', compact('order'));
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
}
