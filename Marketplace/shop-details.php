<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    
      <!-- Header Section Begin -->
      <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> DakenEG@outlook.com </li>
    
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
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                         <!--   <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>  -->
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
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
                              <li><a href="./categoryWestern.php">Western itemes</a></li>
                              <li><a href="./categoryOriental.php">Oriental items</a></li>
                              <li><a href="./categorySingle.php">Single items</a></li>
  
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-9">
                      <div class="hero__search">
                          <div class="hero__search__form">
                              <form action="#">
                                  <div class="hero__search__categories">
                                      All Categories
                                      <span class="arrow_carrot-down"></span>
                                  </div>
                                  <input type="text" placeholder="What do yo u need?">
                                  <button type="submit" class="site-btn">SEARCH</button>
                              </form>
                          </div>
                          <div class="hero__search__phone">
                              <div class="hero__search__phone__icon">
                                  <i class="fa fa-phone"></i>
                              </div>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/pic10.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>More Information</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Our Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <?php
                      $db_conn=mysqli_connect("localhost","root","","dakennn");
                       if(!$db_conn){ echo '<h5 style="color:red;margin-left:200px;">Could not Connect To Database</h5><br>';}

                       $result=$db_conn->query("SELECT* FROM products");
                       $records_array=mysqli_fetch_all($result,MYSQLI_ASSOC);
                        $productNo=0;
                       for($i=0;$i<count($records_array);$i++){
                           $productNo+=1;
                        $product_id=$records_array[$i]["productId"];
                        $product_name=$records_array[$i]["name"];
                        $product_desc=$records_array[$i]["description"];
                        $product_price=$records_array[$i]["price"];
                        $product_category=$records_array[$i]["category"];
                        $group_image=$records_array[$i]["productsImage"];
                        $image_path="img/".$group_image;

                        echo '
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__pic">
                                    <div class="product__details__pic__item">
                                        <img class="product__details__pic__item--large"
                                            src="'.$image_path.'" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__text">
                                    <h3>'.$product_name.'</h3>
                                   <!--  <div class="product__details__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <span>(18 reviews)</span>
                                    </div> -->
                                    <div class="product__details__price">$'.$product_price.'</div>
                                    <p>'.$product_desc.'</p>
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
                                        <li><b>Category</b> <span>'.$product_category.'</span></li>
                                        <li><b>Share on</b>
                                            <div class="share">
                                                <a href=" https://www.facebook.com/DakenEG"><i class="fa fa-facebook"></i></a>
                                                <a href="https://instagram.com/dakeneg?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                        ';
                       } ?>
                       
       
    </section>
    <!-- Product Details Section End -->


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
                        <li><a href="./aboutus.html">About Us</a></li>
                        <li><a href="./aboutOurShop.html">About Our Shop</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="./contact.html">Our location</a></li>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>