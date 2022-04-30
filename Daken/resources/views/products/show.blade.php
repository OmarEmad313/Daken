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
                    <!--  <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div> -->
                        <div class="product__details__price">${{ $product->price }}</div>
                        <p>'{{ $product->description }}'</p>
                        
                    <!--   <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div> -->
                        <a href="" class="primary-btn">ADD TO CART</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
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

           <!--  <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset('/img/'.$product->productsImage) }}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{ $product->name }}</a></h6>
                        <h5>{{ $product->price }}</h5>
                    </div>
                </div>
            </div> -->
        @endforeach
    </div>

@endsection()
