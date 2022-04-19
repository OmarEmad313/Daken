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
        return view('shop-grid');
    }

    public function aboutus () {
        return view('aboutus');
    }

    public function aboutOurShop () {
        return view('aboutOurShop');
    }

}
