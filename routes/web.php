<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\userController;
use App\Http\Controllers\customEventController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/',[homeController::class,'index'])->name('home.home');

Route::get('/cancelpolicy',[homeController::class,'cancelpolicy'])->name('home.cancelpolicy');

Route::get('/contact',[homeController::class,'contact'])->name('home.contact');

Route::get('/about',[homeController::class,'about'])->name('home.about');

/*-----------------------------------------shared user files-----------------------------------------*/

Route::get('/signup',[userController::class,'create'])->name('user.signup');

#Route::get('/login',[loginController::class,'index'])->name('user.login');

Route::get('/myprofile',[profileController::class,'show'])->name('user.profile');

Route::get('/editprofile',[profileController::class,'edit'])->name('user.editProfile');

Route::post('/updateprofile',[profileController::class,'update'])->name('user.update');

Route::post('/deleteprofile',[profileController::class,'delete'])->name('user.deleteProfile');

Route::get('/logout',[loginController::class,'logout'])->name('user.logout');


/*-----------------------------------------events files-----------------------------------------*/

Route::get('/events',[eventController::class,'index'])->name('events.events');

Route::get('/events/welcomeparty',[eventController::class,'welcomePartyForm'])->name('events.welcomeparty');

Route::post('/storeWelcomeParty',[eventController::class,'storeWelcomeParty'])->name('events.storeWelcomeParty');

Route::get('/events/anniversary',[eventController::class,'anniversaryForm'])->name('events.anniversary');

Route::post('/storeAnniversary',[eventController::class,'storeAnniversary'])->name('events.storeAnniversary');

Route::get('/events/newproduct',[eventController::class,'newProductForm'])->name('events.newproduct');

Route::post('/storeNewProduct',[eventController::class,'storeNewProduct'])->name('events.storeNewProduct');

Route::get('/events/customevent',[customEventController::class,'index'])->name('events.custom');

/* Route::controller(customEventController::class)->group(function () {
    Route::post('/events/customevent/', 'store')->name('custom.store');
});
 */
/*-----------------------------------------prod house files-----------------------------------------*/

Route::get('/productionHouse',[packageController::class,'index'])->name('productionHouse.packages');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/productionHouse/addPackage',function(){return view('productionHouse/addPackage');})->name('productionHouse.addPackage');

    Route::get('/productionHouse/editPackage/{package}',[packageController::class,'edit'])->name('productionHouse.editPackage');

    Route::post('/updatePackage/{package}',[packageController::class,'update'])->name('productionHouse.updatePackage');
});

Route::get('/productionHouse/packagedetails',function(){return view('packagedetails');})->name('productionHouse.packageDetails');

/*-----------------------------------------admin files-----------------------------------------*/
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/viewprofile',function(){return view('adminviewprofile');})->name('admin.viewProfile');

    // Route::get('/admin/viewprofiletst',function(){return view('testfile');})->name('admin.viewProfiletst');

    Route::get('/admin/viewallusers',function(){return view('viewallusers');})->name('admin.viewUsers');

    Route::get('/admin/allOrders',[orderController::class,'index'])->name('admin.allOrders');
});

/*-----------------------------------------customer files-----------------------------------------*/
Route::group(['middleware' => 'customer'], function() {

    Route::get('/myorders',function(){return view('customers/myorders');})->name('customer.myorders');

});

// Route::get('/test',function(){return view('test');})->name('test');

/*-----------------------------------------resources-----------------------------------------*/

// Route::resource('users',userController::class);
Route::resource('users',profileController::class);  

Route::resource('customEvents',customEventController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/owner', 'owner');
Route::view('/customer', 'customer');

/*-----------------------------------------Customer files-----------------------------------------*/

Route::get('/customer/allOrders',[orderController::class,'showCustomerOrders'])->name('cutomer.allOrders');
