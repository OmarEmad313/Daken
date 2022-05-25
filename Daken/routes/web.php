<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\offersController;
use App\Http\Controllers\userController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminOfferConrtroller;
use App\Http\Controllers\adminProductController;




/* Route::get('/',[homeController::class,'index'] )->name('home.index'); */
Route::get('/',function(){
    return view('auth/register');
});

Route::get('redirects',[homeController::class,'index'],[userController::class,'index'] )->name('home.index');


Route::get('/shop',[homeController::class,'shop'] )->name('home.shop');

Route::get('/aboutus',[homeController::class,'aboutus'],[userController::class,'index'] )->name('home.aboutus');

Route::get('/aboutOurShop',[homeController::class,'aboutOurShop'] )->name('home.aboutOurShop');

Route::get('/shopingCart',[homeController::class,'shopingCart'] )->name('home.shopingCart');

Route::resource('checkout',checkoutController::class );

//Route::get('/contact',[homeController::class,'contact'] )->name('home.contact');

Route::resource('contact',contactController::class );


Route::get('/categoryWestern',[homeController::class,'categoryWestern'] )->name('home.categoryWestern');
Route::get('/categoryOriental',[homeController::class,'categoryOriental'] )->name('home.categoryOriental');
Route::get('/categorySingle',[homeController::class,'categorySingle'] )->name('home.categorySingle');



Route::resource('products',productController::class);
route::delete('products/destroy{id}',[productController::class,'destroy'])->name('product.destory');

Route::resource('offers',offersController::class);
route::delete('offers/destroy{id}',[offersController::class,'destroy'])->name('offers.destory');

Route::resource('adminProducts',adminProductController::class);

Route::resource('adminOffers',adminOfferConrtroller::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
