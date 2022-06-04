<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\updateUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\createUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
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
    public function store(createUser $request)
    {
        $data=$request->validated();
        $user=new User();
        $user->first_name=$data['first_name']; 
        $user->last_name=$data['last_name']; 
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);
        if($request->file('image')!=NULL){
            $image=$request->file('image');
            $user->image_id = app(imageController::class)->store($image);
        }
        else{
            $user->image_id=1;
        }
        
        $user->user_type='customer';
        $user->save();
        return redirect()->route('home.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('profile');
    }

    public function showAdmin($id)
    {
        // $i=request('id');
        $user = user::find($id);
        return view('adminviewprofile',['user'=>$user]);
    }

    public function allUsers()
    {
        $users = DB::table('users')
            ->select('users.first_name','users.last_name', 'users.user_type','users.id')
            ->where('user_type', '=' , 'customer')
            ->get(); 
        $admins = DB::table('users')
            ->select('users.first_name','users.last_name', 'users.user_type','users.id')
            ->where('user_type', '=' , 'admin')
            ->get();
            
            return view('admins/viewallusers',['users'=>$users,'admins'=>$admins]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit() //User $user
    {
        return view('editProfile'); //,['user'=>$user]
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUser $request)//   ,User $user
    {
        $data=$request->validated();
        $user = user::find($data['id']);
        $user->first_name=$data['first_name'];
        $user->last_name=$data['last_name'];
        $user->email=$data['email'];
        
        if($data['password']==$user->password)
        {
            $user->password=$data['password'];
            
        }
        else
        {
            $user->password=Hash::make($data['password']);
        }
        
        
        if($request->file('image')!=NULL){

            $im=$user->image_id;
            $image=$request->file('image');
            $user->image_id = app(imageController::class)->store($image);
            $user->user_type='customer'; 
            $user->save();
            
            if($user->image_id!=1)
            {
                app(imageController::class)->destroy($im);
            }
        

        }
        else{
        $user->user_type='customer'; 
        $user->save();
        }
        return redirect()->route('user.profile');//,$user->id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = User::find($id);
        $category->delete();

        return back()->with('success', 'User is deleted successfully');
        
    }

    public function addAdmin($id)
    {
        $user = User::find($id);
        $user->user_type='admin'; 
        $user->save();
        return redirect()->route('home.home');
    }

    public function removeAdmin($id)
    {
        $user = User::find($id);
        $user->user_type='customer'; 
        $user->save();
        return redirect()->route('home.home');
        
    }
}
