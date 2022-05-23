<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\controllers\Auth; */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class homeController extends Controller
{
    public function index () {
        //return view('index');

        //return view('welcome');
        $role=Auth::user()->role;
        //echo 'the role is  '.$role;
        if($role=='0'){
            return view('index');
        }
        if($role=='1'){
            return view('admin_dashboard');
        }
        
    }

    public function contact () {
        return view('contact');
    }

    public function shop () {
        return view('shop');
    }

    public function aboutus () {
        return view('aboutus');
    }

    public function aboutOurShop () {
        return view('aboutOurShop');
    }
    
    public function shopingCart () {
        return view('shopingCart');
    }
    /* public function checkOut () {
        return view('checkout');
    } */
    //////////////////////////////////////////////////
    public function categoryWestern () {
        $westernItems=DB::table('products')
        ->where('category','=','wastern items')
        ->get();
        return view('categoryWestern',[
            'record' => $westernItems
        ]); 
    }
    public function categoryOriental () {
        $orientalItems=DB::table('products')
        ->where('category','=','oriental items')
        ->get();
        return view('categoryOriental',[
            'record2' => $orientalItems
        ]);
    }
    public function categorySingle () {
        $singleItems=DB::table('products')
        ->where('category','=','single items')
        ->get();
        return view('categorySingle',[
            'record3' => $singleItems
        ]); 
       }
}
