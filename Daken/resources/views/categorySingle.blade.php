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
   
    
      <!-- single category Section Begin -->
      <h2>Single Items</h2>

      <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <?php
                      $db_conn=mysqli_connect("localhost","root","","daken");
                       if(!$db_conn){ echo '<h5 style="color:red;margin-left:200px;">Could not Connect To Database</h5><br>';}

                       $result=$db_conn->query("SELECT* FROM products where category='single'");
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="'.$image_path.'">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$product_name.'</a></h6>
                                    <h5>$'.$product_price.'</h5>
                                </div>
                            </div>
                        </div>';
                       }
                      ?>
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

         

      <!--  western category  Section End -->
      
@endsection()