<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminOfferConrtroller;
use App\Http\Controllers\adminProductController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\shoppingCartController;




Route::get('/',function(){
    return view('auth/register');
});

Route::get('redirects',[homeController::class,'index'],[userController::class,'index'] )->name('home.index');


Route::get('/shop',[homeController::class,'shop'] )->name('home.shop');

Route::get('/aboutus',[homeController::class,'aboutus'],[userController::class,'index'] )->name('home.aboutus');

Route::get('/aboutOurShop',[homeController::class,'aboutOurShop'] )->name('home.aboutOurShop');

// Route::get('/shopingCart',[homeController::class,'shopingCart'] )->name('home.shopingCart');

Route::resource('checkout',checkoutController::class );
Route::post('/addToCart/{id}',[checkoutController::class,'addToCart'] )->name('checkout.addToCart');


Route::resource('contact',contactController::class );


Route::get('/categoryWestern',[homeController::class,'categoryWestern'] )->name('home.categoryWestern');
Route::get('/categoryOriental',[homeController::class,'categoryOriental'] )->name('home.categoryOriental');
Route::get('/categorySingle',[homeController::class,'categorySingle'] )->name('home.categorySingle');



Route::resource('products',productController::class);


Route::resource('adminProducts',adminProductController::class);
route::delete('adminProducts/destroy{id}',[adminProductController::class,'destroy'])->name('adminProduct.destory');


Route::resource('adminOffers',adminOfferConrtroller::class);
route::delete('adminOffers/destroy{id}',[adminOfferConrtroller::class,'destroy'])->name('adminOffers.destory');

Route::get('/shoppingCart',[shoppingCartController::class,'index'])->name('shoppingCart');
route::delete('/shoppingCart/{id}',[shoppingCartController::class,'destroy'])->name('cart.destory');




Route::get('/reservation',[adminController::class,'reservation'] )->name('admin.reservation');
Route::get('/feedback',[adminController::class,'feedback'] )->name('admin.feedback');


Route::get('/search',[productController::class,'search']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
