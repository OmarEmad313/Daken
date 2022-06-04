@extends('layout')

@section('content')

    <div class="row">
        @foreach ($product as $product)
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset('/img/'.$product->productsImage) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $product->name }}</h3>
                   
                        <div class="product__details__price">${{ $product->price }}</div>
                        <p>'{{ $product->description }}'</p>
                        
                        <form action="{{ url('addToCart', $product->productId ) }}" method="post">
                        @csrf
                        <button type="submit" class="addToCart"><a class="primary-btn">ADD TO CART</a></button>
                        </form>
                        
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Category</b> <span>{{ $product->category }}</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href=" https://www.facebook.com/DakenEG"><i class="fa fa-facebook"></i></a>
                                    <a href="https://instagram.com/dakeneg?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

           
        @endforeach
    </div>

@endsection()
