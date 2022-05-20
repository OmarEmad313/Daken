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
        'products.productsImage as productImage')
        ->get();

        $count1 = products::count();
        return view('products.index',[
            'products' => products::all(),  
            'offers'=>$offer,
            'count'=>$count1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // (get req)
        return view('products.create');
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
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>['required','integer'],
            'category'=>'required',
            'productimage'=>'required',
        ]);

        $product=new products();
        //taking thr input from form
        $product->productId=rand();
        $product->name=strip_tags($request->input('product_name'));
        $product->description=strip_tags($request->input('product_description'));
        $product->price=strip_tags($request->input('product_price'));
        $product->category=strip_tags($request->input('category'));

        $photoName=$request->file('productimage')->getClientOriginalName();
        $product->productsImage=strip_tags($photoName);
        $request->file('productimage')->storeAs('public/img/',$photoName);
        //$request->file('productimage')->store('img', 'public');

        $product->save();
        return redirect()->route('products.index');  // or
        /* return redirect()->back(); */
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

        //$product=products::findOrFail($product);

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
        //  post

        $request->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>['required','integer'],
            'category'=>'required',
        ]);
        
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
        
        return redirect()->route('products.index');  // or
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  delete 
        $record=DB::table('products')
        ->where('productId','=',$id)
        ->delete();
        
        return redirect()->route('products.index');  // or

    }
}
