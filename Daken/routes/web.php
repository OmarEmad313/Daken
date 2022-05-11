<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\orientalC;
use App\Http\Controllers\productController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
=======

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
>>>>>>> parent of 340b981 (breeze)

// The homepage or the first page
//              The class we are going to use , name of the function
Route::get('/',[homeController::class,'index'] )->name('home.index');

<<<<<<< HEAD
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});


require __DIR__.'/auth.php';
=======
Route::get('/contact',[homeController::class,'contact'] )->name('home.contact');
>>>>>>> parent of 340b981 (breeze)

Route::get('/shop',[homeController::class,'shop'] )->name('home.shop');

Route::get('/aboutus',[homeController::class,'aboutus'] )->name('home.aboutus');

Route::get('/aboutOurShop',[homeController::class,'aboutOurShop'] )->name('home.aboutOurShop');

Route::get('/shopingCart',[homeController::class,'shopingCart'] )->name('home.shopingCart');

Route::get('/checkOut',[homeController::class,'checkOut'] )->name('home.checkOut');

Route::get('/categoryWestern',[homeController::class,'categoryWestern'] )->name('home.categoryWestern');
Route::get('/categoryOriental',[homeController::class,'categoryOriental'] )->name('home.categoryOriental');
Route::get('/categorySingle',[homeController::class,'categorySingle'] )->name('home.categorySingle');



Route::resource('products',productController::class);
// Route::resource('/categoryOriental',oriental::class);


/* Route::get('/shop/{category?}/{item?}', function ($category=null,$item=null) {
    if(isset($category)){

        if(isset($item)){
            return " <h2>this is item</h2>  {$item}";
        }
        return" <h2>this is category</h2>  {$category}";
       
    }

    return '<h2>All items</h2>';
}); */
