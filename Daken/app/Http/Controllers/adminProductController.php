<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class adminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('adminProducts.index',[
            'products' => products::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminProducts.create');
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

        $product->save();
        return redirect()->route('adminProducts.index')->with('sucMessage','product added successfully');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        
        $product2=DB::table('products')
        ->where('productId','=',$product)
        ->get();

        return view('adminProducts.edit',[
            'product'=>$product2
        ]);
    }

 
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $cartRecord=DB::table('carts')
        ->where('productId','=',$id)
        ->delete();

        $offerRecord=DB::table('offers')
        ->where('productId','=',$id)
        ->delete();

        $record=DB::table('products')
        ->where('productId','=',$id)
        ->delete();
        
        return redirect()->route('adminProducts.index')->with('sucMessage','product deleted successfully'); 
    }
}
