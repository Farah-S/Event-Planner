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

Route::get('/login',[loginController::class,'index']);
Route::get('/signup',[signupController::class,'index']);
Route::get('/contact',[homeController::class,'contact'])->name('home.contact');
Route::get('/about',[homeController::class,'about'])->name('home.about');
Route::get('/cancelpolicy',[homeController::class,'about'])->name('home.cancelpolicy');
Route::get('/',[homeController::class,'index']);
Route::get('/events',function(){return view('events/events');})->name('events.events');
Route::get('/productionHouse',function(){return view('productionHouse/productionhouse');})->name('productionHouse.productionHouse');
Route::get('/productionHouse/editPackage',function(){return view('productionHouse/editPackage');});
Route::get('/profile',function(){return view('profile');});
Route::get('/editprofile',function(){return view('editprofile');});
Route::get('/adminviewprofile',function(){return view('adminviewprofile');});


Route::get('/store',function(){
    $category = request('category');

    if (isset($category)){
    return ' you are veiwing the store for '. strip_tags($category);
}
    return ' you are veiwing all instruments ';
});