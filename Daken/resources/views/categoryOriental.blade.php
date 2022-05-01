@extends('layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
      <!-- Oriental category Section Begin -->
      <h2>Oriental Items</h2>

            <div class="filter__item">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="filter__found"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">name</a></h6>
                            <h5> price</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter__item">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="filter__found">
                            <h6><span></span> Products found</h6>
                        </div>
                    </div>
                </div>
            </div>


      <!--  western category  Section End -->
      
@endsection()