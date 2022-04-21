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
                                                <a href="#" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ $product['image_path'] }}" >
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>{{ $product['name'] }}</h6>
                                                    <span>{{ $product['price'] }}</span>
                                                </div>
                                                </a>
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
                                <?php
                                    $db_conn=mysqli_connect("localhost","root","","dakennn");
                                    if(!$db_conn){ echo '<h5 style="color:red;margin-left:200px;">Could not Connect To Database</h5><br>';}

                                    $result=$db_conn->query("SELECT* FROM products,offers where products.productId=offers.productID");
                                    if(!$result){ echo '<h5 style="color:red;margin-left:200px;">NO RESULTS</h5><br>';}
                                    $records_array=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                    for($i=0;$i<count($records_array);$i++){
                                        $product_id=$records_array[$i]["productId"];
                                        $product_name=$records_array[$i]["name"];
                                        $product_price=$records_array[$i]["price"];
                                        $product_offerratio=$records_array[$i]["offerRatio"];
                                        $product_category=$records_array[$i]["category"];
                                        $group_image=$records_array[$i]["productsImage"];
                                        $image_path="img/".$group_image;

                                        $offer_int=0;
                                        echo'
                                        <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                data-setbg="'.$image_path.'">
                                                <div class="product__discount__percent">-'.$product_offerratio.'</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>'.$product_category.'</span>
                                                <h5><a href="#">'.$product_name.'</a></h5>
                                                <div class="product__item__price">$20.00 <span>$'.$product_price.'</span></div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                        ?>
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
                                <div class="product__item__pic set-bg" data-setbg="{{ $product['image_path'] }}">
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
                      #endforeach
                    </div>
                    
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span><?php echo $productNo ;?></span> Products found</h6>
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

