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
            'offer_ratio'=>'required|numeric|gt:0' 
            
            
        ]);

        $product2=DB::table('products')
        ->where('productId','=',$request->input('product_id'))
        ->first();

        $offer=DB::table('offers')
        ->where('productId','=',$request->input('product_id'))
        ->first();

        if ( !$product2) {
            
            return redirect()->route('adminOffers.index')->with('errorMessage','can not add an offer on an unavailble product');

        }

        else if($offer){
            /* return redirect()->route('adminOffers.index')->with('errorMessage','offer already Exists'); */
            $records=DB::table('offers')
            ->where('offerId','=',$offer->offerId)
            ->update([
                'offerRatio'=>$request->input('offer_ratio'),
            ]);
            return redirect()->route('adminOffers.index')->with('sucMessage','offer updated successfully');
        }
        else{
            $offer=new offers();
            $offer->offerId=rand();
            $offer->productId=strip_tags($request->input('product_id'));
            $offer->offerRatio=strip_tags($request->input('offer_ratio'));
    
            $offer->save();
            return redirect()->route('adminOffers.index')->with('sucMessage','offer added successfully');
            
        }
    }

    public function destroy($id)
    {
        $offerRecord=DB::table('offers')
        ->where('offerId','=',$id)
        ->delete();

        return redirect()->route('adminOffers.index')->with('sucMessage','offer deleted successfully');
    }
}
