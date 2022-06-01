<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class shoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productRecord=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->join('products','carts.productId','=','products.productId')
        ->select('products.name as productName','products.price as productPrice','products.productsImage as image',
        'products.productId as productId')
        ->get();
        
        $total=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->join('products','carts.productId','=','products.productId')
        ->sum('price');

        return view('shoppingCart',[
            'products'=>$productRecord,
            'totalPrice'=>$total
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productRecord=DB::table('carts')
        ->where('productId','=',$id)
        ->delete();

        return redirect()->route('shoppingCart'); 
    }
}
