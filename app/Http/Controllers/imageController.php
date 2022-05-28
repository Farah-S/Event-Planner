<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\packageImage;
use App\Models\CustomEventImage;
use App\Models\customEvent;
use App\Models\package;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store($image)
    {
        $name=$image->getClientOriginalName();
   
        $path=$image->getRealPath();

        $destinationPath = 'public\img\Users';
        $image->move($destinationPath,$name);
        $model=new Image();
        $model->category='user'; 
        $model->path=$path; 
        $model->save();
        return $model->id;
    }

    public function customEventImageStore($image,$eventid)
    {
        // $image = $request->image('image');
   
      //Display image Name
        $name=$image->getClientOriginalName();

   
      //Display image Extension
        $extension=$image->getClientOriginalExtension();
  
   
      //Display image Real Path
        $path=$image->getRealPath();
   
   
      //Display image Size
        $size=$image->getSize();
   
   
      //Display image Mime Type
        $mime=$image->getMimeType();
   
      //Move Uploaded image
        $destinationPath = 'public\img\Custom Events';
        $image->move($destinationPath,$name);
        $model=new Image();
        $model->category='customEvent';
        $model->path=$path; 
        $model->save();
        $modelid=$model->id;
        
        $event = customEvent::find($id);
        $model->customEvent()->attach($event);
               
        
    }

    public function packageImageStore($image,$packageid)
    {
        // $image = $request->image('image');
   
      //Display image Name
        $name=$image->getClientOriginalName();

   
      //Display image Extension
        $extension=$image->getClientOriginalExtension();
  
   
      //Display image Real Path
        $path=$image->getRealPath();
   
   
      //Display image Size
        $size=$image->getSize();
   
   
      //Display image Mime Type
        $mime=$image->getMimeType();
   
      //Move Uploaded image
        $destinationPath = 'public\img\Decorations';
        $image->move($destinationPath,$name);
        $model=new Image();
        $model->category='package'; 
        $model->path=$path; 
        $model->save();
        $modelid=$model->id;
        $package = package::find($id);
        $model->package()->attach($package); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
