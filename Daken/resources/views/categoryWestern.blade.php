@extends('layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/pic7.JPG">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home.index') }}">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
      <!-- Oriental category Section Begin -->
      <h2>western Items</h2>

            <div class="filter__item">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="filter__found"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($record as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('/img/'.$product->productsImage ) }}">
                                <ul class="product__item__pic__hover">
                                <form action="{{ url('addToCart', $product->productId ) }}" method="post">
                                    @csrf
                                    <button type="submit" class="addToCart"> <li><a ><i class="fa fa-shopping-cart"></i></a></li> </button>
                                </form>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('products.show', ['product'=>$product->productId] ) }}">{{ $product->name }}</a></h6>
                                <h5>{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
           

          


      <!--  western category  Section End -->
      
@endsection()