@extends('layout')

@section('content')

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

@endsection()