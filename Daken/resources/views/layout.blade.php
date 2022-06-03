<!DOCTYPE html>
<html lang="zxx">

<!-- shift + alt + A  -->


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daken</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/style.css')}}" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
  
  <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
          <a href="#"><img data-setbg="img/dakenLogo.png" ></a>
      </div>
      <div class="humberger__menu__cart">
          <ul>
              <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
              <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>{{$cartNumber}}</span></a></li>
          </ul>
          <div class="header__cart__price">item: <span>${{$total}}</span></div>
      </div>
      <div class="humberger__menu__widget">
          <div class="header__top__right__language">
              <img src="img/language.png" alt="">
              <div>English</div>
          </div>
          <div class="header__top__right__auth">
              <a href="#"><i class="fa fa-user"></i> logout</a>
          </div>
      </div>
      <nav class="humberger__menu__nav mobile-menu">
          <ul>
              <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
              <li><a href="{{ route('products.index') }}">Shop</a></li>
              <li><a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                      <li><a href="{{ route('shoppingCart') }}">Shopping Cart</a></li>
                      <li><a href="{{ route('checkout.index') }}">Check Out</a></li>
                  </ul>
              </li>
              <li><a href="{{ route('contact.index') }}">Contact</a></li>
          </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
          <a href=" https://www.facebook.com/DakenEG"><i class="fa fa-facebook"></i></a>
           <a href="https://instagram.com/dakeneg?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
      </div>
      <div class="humberger__menu__contact">
          <ul>
              <li><i class="fa fa-envelope"></i> DakenEG@outlook.com</li>
              
          </ul>
      </div>
  </div>
  
 
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-user"></i> welcome {{$user->name}} </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href=" https://www.facebook.com/DakenEG"><i class="fa fa-facebook"></i></a>
                                <a href="https://instagram.com/dakeneg?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <!-- <span class="arrow_carrot-down"></span> -->
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home.index') }}"><img data-setbg="img/dakenLogo.png" ></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li><a href="{{ route('products.index') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('shoppingCart') }}">Shopping Cart</a></li>
                                    <li><a href="{{ route('checkout.index') }}">Check Out</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="{{ route('contact.index') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>{{$cartNumber}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>${{$total}}</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
       
    </header>
    <!-- Header Section End -->

     <!-- Hero Section Begin -->
 <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categories</span>
                    </div>
                    <ul>
                        <li><a href="{{ route('home.categoryWestern') }}">Western itemes</a></li>
                        <li><a href="{{ route('home.categoryOriental') }}">Oriental items</a></li>
                        <li><a href="{{ route('home.categorySingle') }}">Single items</a></li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ url('/search') }}">
                            <div class="hero__search__categories">
                                All Categories
                                <!-- <span class="arrow_carrot-down"></span> -->
                            </div>
                            <input type="search" name="query" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <!--  -->
                        <div class="hero__search__phone__text">
                            <h5>01050070076</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>  
<!-- Hero Section End -->

<div align="center" style="padding-top:1em;">
        <div>
            @if(session()->has('errorMessage'))
                <div class="alert alert-danger" id="alert">
                    {{session()->get('errorMessage')}}
                </div>
            @endif
            
            @if(session()->has('sucMessage'))
                <div class="alert alert-success" id="alert">
                    {{session()->get('sucMessage')}}
                </div>
            @endif
        </div>
      </div>

        @yield('content')


<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 5 شارع محمد المهدي متفرع من نبيل الوقاد ارض الجولف , القاهره</li>
                        <li>Phone: 01050070076</li>
                        <li>Email: DakenEG@outlook.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="{{ route('home.aboutus') }}">About Us</a></li>
                        <li><a href="{{ route('home.aboutOurShop') }}">About Our Shop</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        <li><a href="{{ route('contact.index') }}">Our location</a></li>
                    </ul>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our community Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href=" https://www.facebook.com/DakenEG"><i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com/dakeneg?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
            </div>
        </div>
     
    </div>
</footer>
<!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src={{ url('js/jquery-3.3.1.min.js')}}></script>
    <script src={{ url('js/bootstrap.min.js')}}></script>
    <script src={{ url('js/jquery.nice-select.min.js')}}></script>
    <script src={{ url('js/jquery-ui.min.js')}}></script>
    <script src={{ url('js/jquery.slicknav.js')}}></script>
    <script src={{ url('js/mixitup.min.js')}}></script>
    <script src={{ url('js/owl.carousel.min.js')}}></script>
    <script src={{ url('js/main.js')}}></script>
    <script src={{ url('js/admin.js')}}></script>

    <script type="text/javascript">
        $("document").ready(function()
        {
            setTimeout(function()
            {
                $("div.alert").remove();
            },5000);
        }
        );
    </script>
</body>

</html>