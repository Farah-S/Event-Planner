<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\updateUser;
use App\Http\Requests\createUser;
use App\Models\User;
use App\Admin;
use App\Writer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;



class userController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)/* later it will display based on id*/
    {
        return view('profile');
    }
    

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:owner');
        $this->middleware('guest:customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //signup/creating a new user
        return view('auth.register');
        
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
    public function show($id)
    {
        //$id=1;
        return view('profile',['user'=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('editProfile',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUser $request,User $user)
    {
        $data=$request->validated();
        $user = user::find($user->id);
        $user->first_name=$data['first_name']; 
        $user->last_name=$data['last_name']; 
        $user->email=$data['email'];
        $user->password=$data['password'];
        $user->image_id=1;
        $user->user_type='admin'; 
        $user->save();
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

        return back()->with('success', 'Item is deleted successfully');
        
    }
}
