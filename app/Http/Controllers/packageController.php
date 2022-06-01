<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\package;
use App\Http\Requests\packageRequest;
use Illuminate\Support\Facades\DB;

class packageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = DB::table('packages')
            ->join('image_package', 'packages.id', '=', 'image_package.package_id')
            ->join('images', 'image_package.image_id', '=', 'images.id')
            ->select('packages.*','images.*')
            ->get();

        return view('/productionHouse/decorationspage',['package'=>$package]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return addpackage view
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
    public function edit(package $package)
    {
        return view('productionHouse/editPackage',['package'=>$package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(packageRequest $request, package $package)
    {
        $data=$request->validated();
        
        $package = package::find($package->id);
        $package->name=$data['name']; 
        $package->price=$data['price']; 
        $package->season=$data['season'];
        $package->details=$data['details'];
        $package->save();
        return redirect()->route('productionHouse.packages');//,$package->id
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
