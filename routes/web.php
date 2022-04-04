<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-----------------------------------------shared files-----------------------------------------*/

Route::get('/',[homeController::class,'index']);

Route::get('/cancelpolicy',[homeController::class,'cancelpolicy'])->name('home.cancelpolicy');

Route::get('/contact',[homeController::class,'contact'])->name('home.contact');

Route::get('/about',[homeController::class,'about'])->name('home.about');

/*-----------------------------------------shared user files-----------------------------------------*/

Route::get('signup',[signupController::class,'index'])->name('user.signup');

Route::get('/login',[loginController::class,'index'])->name('user.login');

Route::get('/myprofile',function(){return view('profile');})->name('user.profile');

Route::get('/editprofile',function(){return view('editprofile');})->name('user.editProfile');

/*-----------------------------------------events files-----------------------------------------*/

Route::get('/events',function(){return view('events/events');})->name('events.events');

Route::get('/events/customevent',function(){return view('events/customEvent');})->name('events.custom');

/*-----------------------------------------prod house files-----------------------------------------*/

Route::get('/productionHouse',function(){return view('productionHouse/decorationspage');})->name('productionHouse.packages');

Route::get('/productionHouse/addPackage',function(){return view('productionHouse/addPackage');})->name('productionHouse.addPackage');

Route::get('/productionHouse/editPackage',function(){return view('productionHouse/editPackage');})->name('productionHouse.editPackage');

Route::get('/packagedetails',function(){return view('packagedetails');})->name('productionHouse.packageDetails');

/*-----------------------------------------admin files-----------------------------------------*/

Route::get('/admin/viewprofile',function(){return view('adminviewprofile');})->name('admin.viewProfile');
Route::get('/admin/viewprofiletst',function(){return view('testfile');})->name('admin.viewProfiletst');


Route::get('/viewallusers',function(){return view('viewallusers');})->name('admin.viewUsers');

Route::get('/allOrders',function(){return view('admins/allOrders');})->name('admin.allOrders');

/*-----------------------------------------customer files-----------------------------------------*/

Route::get('/myorders',function(){return view('customers/myorders');})->name('customer.myorders');

