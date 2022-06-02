@extends('layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/pic7.JPG">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home.index') }}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('/img/'.$product->image) }}" width="20%" height="20%">
                                        <h5>{{$product->productName}}</h5>
                                    </td>

                                    <td class="shoping__cart__price">
                                    {{$product->productPrice}}
                                    </td>
                                    
                                    <!-- <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td> -->
                                    <!-- <td class="shoping__cart__total">
                                        $110.00
                                    </td> -->
                                    <td class="shoping__cart__item__close">
                                    <form action="{{ url('shoppingCart', $product->productId ) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a class="delete" > <button  class="addToCart"  type="submit" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>  </a>
                                    </form>
                                       
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('products.index')}}" class="primary-btn ">CONTINUE SHOPPING</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                    
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span>${{$total}}</span></li>
                        </ul>
                        <a href="{{route('checkout.index')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection()