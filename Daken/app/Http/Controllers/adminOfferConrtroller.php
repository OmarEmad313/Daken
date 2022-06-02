<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offers;
use Illuminate\Support\Facades\DB;

class adminOfferConrtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminOffers.index',[
            'offers' => offers::all(),
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminOffers.create');
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
            'product_id'=>['required','integer'],
            'offer_ratio'=>['required','integer'],   
        ]);

        $product2=DB::table('products')
        ->where('productId','=',$request->input('product_id'))
        ->first();

        if ( $product2) {
            $offer=new offers();
            $offer->offerId=rand();
            $offer->productId=strip_tags($request->input('product_id'));
            $offer->offerRatio=strip_tags($request->input('offer_ratio'));
    
            $offer->save();
            return redirect()->route('adminOffers.index')->with('sucMessage','offer added successfully');
            
        }

        else {
            return redirect()->route('adminOffers.index')->with('errorMessage','can not add an offer on an unavailble product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($offer)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $offer)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offerRecord=DB::table('offers')
        ->where('offerId','=',$id)
        ->delete();

        return redirect()->route('adminOffers.index')->with('sucMessage','offer deleted successfully');
    }
}
