<?php

namespace App\Providers;
use App\Models\carts;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\products;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$userId=Auth::user()->id;
        //print $userId;
        /* $userRecord=DB::table('users')
        ->where('id','=','1')
        ->get();*/
        //view::share('user',Auth::user()); 

        
        view()->composer('*',function ($view){
            $cartItems=carts::where('userId','=',Auth::user()->id);
            $cartItemsCount=$cartItems->count();
            $total=DB::table('carts')
            ->where('userId','=',Auth::user()->id)
            ->join('products','carts.productId','=','products.productId')
            ->sum('price');

            $view->with('user',Auth::user());
            $view->with('cartNumber',$cartItemsCount);
            $view->with('total',$total);

        });
    }
}
