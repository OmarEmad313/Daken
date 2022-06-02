@extends('admin_layout')

@section('content')

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedbacks</title>
    <!--  -->
  </head>
  <body>
    <header class="header">   
        <h1>Feedbacks</h1>
    </header>

    <!-- Slider main container -->
    <div class="cards-slider">
    @foreach($reviews as $review)

      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->

        <div class="swiper-slide">
          <div class="card2">
            <div class="card-ID">
              <h2>Review Id: {{$review->reviewId}}</h2>
            </div>

            <div class="card-text-content">
              <h3>{{$review->userName}}</h3>
              <p>{{$review->message}}</p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
     
      </div>
    </div>
  </body>
</html>


@endsection() 