<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;


class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $productRecord=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->join('products','carts.productId','=','products.productId')
        ->select('products.name as productName','products.price as productPrice')
        ->get();

        $total=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->join('products','carts.productId','=','products.productId')
        ->sum('price');

        return view('checkout.index',[
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);

        $order=new orders();
        $order->orderId=rand();
        $order->userId=Auth::user()->id;
        $order->branchId=0;
        $order->save();

        $user_records=DB::table('users')
        ->where('Id','=',Auth::user()->id)
        ->update([
            'first name'=>$request->input('first_name'),
            'last name'=>$request->input('last_name'),
            'phone'=>$request->input('phone'),
            'reservation mail'=>$request->input('email'),
            'order Notes'=>$request->input('order_notes'),
        ]);
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
        //
    }
}
