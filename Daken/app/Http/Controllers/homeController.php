<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\controllers\Auth; */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\reviews;



class homeController extends Controller
{
    public function index () {
     
        $role=Auth::user()->role;
        $reviews=DB::table('reviews')
        ->join('users','reviews.reviewerId','=','users.id')
        ->select('reviews.message as message','users.name as name')
        ->get();

        if($role=='0'){
            return view('index',[
                'reviews'=>$reviews
            ]);
        }
        if($role=='1'){
            return view('adminProducts.index');
        }
        
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
