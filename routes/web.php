<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\singleProductController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\couponController;
use App\Http\Controllers\userController;
use App\Http\Controllers\trackerController;
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




Route::get('/',[homeController::class,'index']);
Route::get('/shop',[homeController::class,'shop']);
Route::get('/about',[homeController::class,'about']);
Route::get('/contact',[homeController::class,'contact']);

// Route::get('/product',[ProductController::class,'index'])->name('product');
// Route::post('/product-add',[ProductController::class,'store'])->name('product.add');

Route::get('/mafb-sign-up',[signupController::class,'index'])->name('viewSignup');
Route::post('/mafb-sign-up',[signupController::class,'createCustomerAccount'])->name('signup');
Route::get('/mafb-log-in',[loginController::class,'index'])->name('mafb-login'); 
Route::post('/log-in',[loginController::class,'login'])->name('login');
Route::get('single-product/{product_code?}',[singleProductController::class,'index']);


Route::get('/single', function () {
    return view('single-product');
});

Route::group(['middleware'=> 'CustomAuth'],function(){
    Route::get('/dashboard',[dashboardController::class,'index']); 
    Route::post('/logout',[loginController::class,'logout'])->name('logout'); 
    Route::get('/category',[categoryController::class,'index'])->name('category');
    Route::post('/category-add',[categoryController::class,'store'])->name('category.add');
    Route::get('/delete-category/{id?}',[categoryController::class,'delete']);
    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::post('/product-add',[ProductController::class,'store'])->name('product.store'); 
    Route::get('/cart-list',[cartController::class,'cart']);
    Route::post('/cart',[cartController::class,'index'])->name('cart.index');
    Route::get('/cart-coupon',[cartController::class,'coupon'])->name('cart.coupon');
    Route::post('/cart-order',[cartController::class,'order'])->name('cart.order'); 

    Route::get('/add-new-employee',[signupController::class,'addUser'])->name('addUser');
// Route::post('/mafb-sign-up',[signupController::class,'createCustomerAccount'])->name('signup');
 Route::get('/order-deliver',[deliveryController::class,'index']);
 Route::post('/set-order-deliver',[deliveryController::class,'store'])->name('setDelivery'); 
 Route::get('/done/{id?}',[deliveryController::class,'update']);
 Route::get('/order-list',[orderController::class,'index']);
 Route::get('/customer-list',[customerController::class,'index']);
 Route::get('/coupon-list',[couponController::class,'index']);
 Route::post('/coupon-added',[couponController::class,'store'])->name('coupon.add');
 Route::get('/delete-coupon/{id?}',[couponController::class,'delete']);
 Route::get('/edit{email?}',[userController::class,'edit']);
 Route::post('/update',[userController::class,'update'])->name("user.update");
 Route::get('/tracker',[trackerController::class,'index']);
});