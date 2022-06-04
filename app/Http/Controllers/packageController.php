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
            ->select('packages.*','images.*','packages.id as packageID')
            ->where('packages.deleted_at','=',NULL)
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
        return view('/productionHouse/addPackage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(packageRequest $request)
    {
        $data=$request->validated();
        
        $package = new package();
        $package->name=$data['name'];
        $package->price=$data['price'];
        $package->season=$data['season'];
        $package->details=$data['details'];
        $package->hidden=0;
        $package->save();
        return redirect()->route('productionHouse.packages');//,$package->id
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
        $package = package::find($id);
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
    public function destroy(Request $request)
    {
        $pks = DB::table('packages')
            ->select('name','id')
            ->get();
        foreach($pks as $n){
            if($request->has([$n->name])){
                $id=$request[$n->name];
                package::where('id',$id)->delete();
                // $package = package::find($id);
                // $package->delete();
            }
        }
        return redirect()->route('productionHouse.packages');
    }

    public function deletepackages()
    {
        $package = DB::table('packages')
            ->join('image_package', 'packages.id', '=', 'image_package.package_id')
            ->join('images', 'image_package.image_id', '=', 'images.id')
            ->select('packages.*','images.*','packages.id as packageID')
            ->get();

        return view('/productionHouse/deletePackages',['package'=>$package]);
    }

    public function showhide()
    {
        $packages = DB::table('packages')
            ->select('packages.*')
            ->get();
        return view('productionHouse/showHidePackages',['package'=>$packages]);
    }

    public function updateShowHide(Request $request)
    {
        $names = DB::table('packages')
            ->select('name','id')
            ->get();
        foreach($names as $n){
            if($request->has([$n->name])){
                $id=$request[$n->name];
                $package = package::find($id);
                $package->hidden=0;
                $package->save();
            }
            else{
                $id=$n->id;
                $package = package::find($id);
                $package->hidden=1;
                $package->save();
            }
        }
        return redirect()->route('productionHouse.packages');
    }

    public function packagedetails($id)
    {
        $data= DB::table('packages')
        ->join('image_package', 'packages.id', '=', 'image_package.package_id')
        ->join('images', 'image_package.image_id', '=', 'images.id')
        ->select('packages.*','images.*','packages.id as packageID')
        ->where('packages.id','=',$id)
        ->get();
        return  view('/packagedetails',['packages'=>$data[0]]);

    }
}
