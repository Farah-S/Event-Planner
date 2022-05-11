<?php

namespace App\Http\Controllers;
use App\Http\Requests\createCustomEvent;
use App\Models\customEvent;

use Illuminate\Http\Request;

class customEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events/customEvent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCustomEvent $request)
    {
        $data=$request->validated();
        $event=new customEvent();
        $event->details=strip_tags($data['details']); 
        $event->budget=$data['budget'];
         
        if($request->has('indoors')){
            $event->indoors=true;
        }
        else{
            $event->indoors=false;
        }
        $userid=$request->id;
        $event->save();
        $eventid=$event->id;
        app(orderController::class)->create($userid,$eventid,'customEvent');
        return redirect()->route('home.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $event = customEvent::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
