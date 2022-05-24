@extends('layout')

@section('content')

    <!-- Hero Section End -->
    <div class="hero__item set-bg" data-setbg="img/0J4A2349.jpg">
              <div class="hero__text">
               
                <h2>Count memories not calories</h2>
                <a href="#" class="primary-btn">Reserve Now for free</a>  
              </div>
            </div>

<!--testimonial-->
<div class="testimonial">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($reviews as $review) 
            <div class="carousel-item active">   
                <div class="carousel-caption">
                    <p>"{{$review->message}}"</p> <!-- <img src="{{ url('img/konafa.gif')}}"> -->
                    <div id="image-caption">{{$review->name}}</div>
                </div>
            </div>
          @endforeach
           
        </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i >< </i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i >></i> </a>
    </div>
</div>






    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-1.jpg"
              >
                <h5><a href="#">Fresh Fruit</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-2.jpg"
              >
                <h5><a href="#">Dried Fruit</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-3.jpg"
              >
                <h5><a href="#">Vegetables</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-4.jpg"
              >
                <h5><a href="#">drink fruits</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-5.jpg"
              >
                <h5><a href="#">drink fruits</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

 
    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="img/banner/banner-1.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="img/banner/banner-2.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    @endsection()