<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\reviews;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message'=>'required',
        ]);
        
        $review=new reviews();
        $review->reviewId=rand();
        $review->reviewerId=Auth::user()->id;
        $review->message=strip_tags($request->input('message'));
        $review->save();
        return redirect()->route('contact.index');
    }

}
