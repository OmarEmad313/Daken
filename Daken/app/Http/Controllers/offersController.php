<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offers;
use Illuminate\Support\Facades\DB;


class offersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('offers.index',[
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('offers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer=new offers();
        $offer->offerId=rand();
        $offer->productId=strip_tags($request->input('product_id'));
        $offer->offerRatio=strip_tags($request->input('offer_ratio'));

        $offer->save();
        return redirect()->back(); 
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
        //
        $offerRecord=DB::table('offers')
        ->where('offerId','=',$offer)
        ->get();

        return view('offers.edit',[
            'offers'=>$offerRecord
        ]);

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
        //
        $offerRecord=DB::table('offers')
        ->where('offerId','=',$offer)
        ->update([
            'productId'=>$request->input('product_id'),
            'offerRatio'=>$request->input('offer_ratio')
        ]);
        return redirect()->back(); 
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

        return redirect('offers.index'); 
    }
}
