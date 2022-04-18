<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

// The homepage or the first page
//              The class we are going to use , name of the function
Route::get('/',[homeController::class,'index'] );

Route::get('/contact',[homeController::class,'contact'] );

Route::get('/shop/{category?}/{item?}', function ($category=null,$item=null) {
    if(isset($category)){

        if(isset($item)){
            return " <h2>this is item</h2>  {$item}";
        }
        return" <h2>this is category</h2>  {$category}";
       
    }

    return '<h2>All items</h2>';
});
