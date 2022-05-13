<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\offersController;





Route::get('/',[homeController::class,'index'] )->name('home.index');



Route::get('/shop',[homeController::class,'shop'] )->name('home.shop');

Route::get('/aboutus',[homeController::class,'aboutus'] )->name('home.aboutus');

Route::get('/aboutOurShop',[homeController::class,'aboutOurShop'] )->name('home.aboutOurShop');

Route::get('/shopingCart',[homeController::class,'shopingCart'] )->name('home.shopingCart');

Route::get('/checkOut',[homeController::class,'checkOut'] )->name('home.checkOut');

Route::get('/contact',[homeController::class,'contact'] )->name('home.contact');


Route::get('/categoryWestern',[homeController::class,'categoryWestern'] )->name('home.categoryWestern');
Route::get('/categoryOriental',[homeController::class,'categoryOriental'] )->name('home.categoryOriental');
Route::get('/categorySingle',[homeController::class,'categorySingle'] )->name('home.categorySingle');



Route::resource('products',productController::class);
Route::resource('offers',offersController::class);