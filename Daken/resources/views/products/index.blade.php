@extends('layout')

@section('content')

<!-- --------------------------------(SIDE PART)------------------------------------------------------------- -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                
                            <li><a href="./categoryWestern.php">Western itemes</a></li>
                            <li><a href="./categoryOriental.php">Oriental items</a></li>
                            <li><a href="./categorySingle.php">Single items</a></li>

                            </ul>
                        </div>

                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>

                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                           @foreach ($products as $product)
                                                @if($loop->index>$count -6)
                                                    <a href="#" class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="{{ asset('/img/'.$product['productsImage'] ) }}" width="70px" height="70px" alt="Image" >
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6>{{ $product['name'] }}</h6>
                                                        <span>{{ $product['price'] }}</span>
                                                    </div>
                                                    </a>
                                                @endif
                                            @endforeach                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <!------------------------- ---------------------------(SALES PART)------------------------------------------------------- -->
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <!--   EACH PRODUCT ON SALE IS IN A DIV   -->
                                @foreach ($offers as $offer)
                                        @php
                                        $offer_int=intval( substr($offer->offerRatio,0,2) );
                                        $temp=$offer->productPrice*($offer_int/100);
                                        $newPrice=$offer->productPrice-$temp;
                                        @endphp
                                        <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                data-setbg="{{ asset('/img/'.$offer->productImage) }}">
                                                <div class="product__discount__percent">-{{ $offer->offerRatio }}</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>{{ $offer->productCategory }}</span>
                                                <h5><a href="#">{{ $offer->productName }}</a></h5>
                                                <div class="product__item__price">${{$newPrice}} <span>${{ $offer->productPrice }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb Section Begin -->
                    <section class="breadcrumb-section set-bg" data-setbg="img/pic7.JPG">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="breadcrumb__text">
                                        <h2>Products</h2>
                                        <div class="breadcrumb__option">
                                            <a href="./index.html">Home</a>
                                            <span>Shop</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Breadcrumb Section End -->
                    <!--   ----------(REST OF THE PRODUCTS)-------------------   -->
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>Welcome to our store</span> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     
                     @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('/img/'.$product['productsImage'] ) }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $product['name'] }}</a></h6>
                                    <h5>{{ $product['price'] }}</h5>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection()

