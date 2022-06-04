<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Displaying all the products from database (get req)
        $offer=DB::table('offers')
        ->join('products','offers.productId','=','products.productId')
        ->select('offers.offerRatio as offerRatio','products.name as productName',
        'products.price as productPrice','products.category as productCategory',
        'products.productsImage as productImage','products.productId as productId')
        ->get();

        $count1 = products::count();
        return view('products.index',[
            'products' => products::all(),  
            'offers'=>$offer,
            'count'=>$count1,
        ]);
    }

   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        // get

        $product=DB::table('products')
        ->where('productId','=',$product)
        ->get();


        return view('products.show',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        //  get
        $product2=DB::table('products')
        ->where('productId','=',$product)
        ->get();

        return view('products.edit',[
            'product'=>$product2
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $request->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>['required','integer'],
            'category'=>'required',
        ]);
        $photoName=$request->file('productimage');
        if(!$photoName){
            $records=DB::table('products')
            ->where('productId','=',$product)
            ->update([
                'name'=>$request->input('product_name'),
                'description'=>$request->input('product_description'),
                'price'=>$request->input('product_price'),
                'category'=>$request->input('category'),
            ]);
            
            return redirect()->route('adminProducts.index')->with('sucMessage','product edited successfully');
    
    }  
    else{
       
        $photoName=$request->file('productimage')->getClientOriginalName();
        $records=DB::table('products')
        ->where('productId','=',$product)
        ->update([
            'name'=>$request->input('product_name'),
            'description'=>$request->input('product_description'),
            'price'=>$request->input('product_price'),
            'category'=>$request->input('category'),
            'productsImage'=>$photoName
        ]);
        $request->file('productimage')->storeAs('public/img/',$photoName);
        
        return redirect()->route('adminProducts.index')->with('sucMessage','product edited successfully');
    }
    }
  

    public function search()
    {
       $search_text=$_GET['query'];
       $products=products::where('name','LIKE','%'.$search_text.'%')->get();

       return view('products.show',[
        'product'=>$products
    ]);
    }
}
