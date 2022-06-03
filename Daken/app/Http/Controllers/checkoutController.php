<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\carts;
use App\Models\orderedproducts;

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
            'phone'=>'required|numeric|gt:1000000000',
            'email'=>['required','email:rfc,dns'],
            'order_notes'=>'required',
        ]);

        $total=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->join('products','carts.productId','=','products.productId')
        ->sum('price');
        // getting the items from the cart
        $productRecord=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->get();


        if($total==0){
            return redirect()->route('products.index')->with('errorMessage','No items in the cart');
        }
        // making the reservation
        $randNumber=rand();
        $order=new orders();
        $order->orderId=$randNumber;
        $order->userId=Auth::user()->id;
        $order->branchId=0;
        $order->firstName=strip_tags($request->input('first_name'));
        $order->lastName=strip_tags($request->input('last_name'));
        $order->phone=strip_tags($request->input('phone'));
        $order->reservationMail=strip_tags($request->input('email'));
        $order->orderNotes=strip_tags($request->input('order_notes'));
        $order->save();


        // linking the reservation with the products in cart
        for ($i=0; $i < $productRecord->count(); $i++) { 
            $record=new orderedproducts();
            $record->orderId=$randNumber;
            $record->userId=Auth::user()->id;
            $record->productId=$productRecord[$i]->productId;
            $record->save();
        }
        

        // deleting all items from the cart
        $productRecord2=DB::table('carts')
        ->where('userId','=',Auth::user()->id)
        ->delete();
        
        return redirect()->route('products.index')->with('sucMessage','reservation was added successfully');     
    }

    public function addToCart($id){
        
        $cartProduct=DB::table('carts')
        ->where('productId','=',$id)
        ->where('userId','=',Auth::user()->id)
        ->first();

        if(!$cartProduct){
        $product=DB::table('products')
        ->where('productId','=',$id)
        ->first();

        $carts=new carts();
        $carts->userId=Auth::user()->id;
        $carts->productId=$product->productId;
        $carts->save();
        return redirect()->route('shoppingCart')->with('sucMessage','product successfully added to the cart');
        }
        else{
            return redirect()->route('products.index')->with('errorMessage','product already in the cart');
        }
    }
  
}
