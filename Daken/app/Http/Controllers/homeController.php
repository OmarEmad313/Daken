<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index () {
        return view('index');
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
    public function checkOut () {
        return view('checkout');
    }
    public function categoryWestern () {
        return view('categoryWestern');
    }
    public function categoryOriental () {
        return view('categoryOriental');
    }
    public function categorySingle () {
        return view('categorySingle');
    }
}
