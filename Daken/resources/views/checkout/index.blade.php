@extends('layout')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> -->
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form method="POST" action="{{route('checkout.store') }} ">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label class="form-label" for="first_name"> First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg " value="{{ old('first_name')}}" />
                                        @error('first_name')
                                            <div class="form-error">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label class="form-label" for="last_name"> Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg " value="{{ old('last_name')}}" />
                                        @error('last_name')
                                            <div class="form-error">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label class="form-label" for="phone">  Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control form-control-lg " value="{{ old('phone')}}" />
                                        @error('phone')
                                            <div class="form-error">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label class="form-label" for="email">  Email</label>
                                    <input type="text" id="email" name="email" class="form-control form-control-lg " value="{{ old('email')}}" />
                                        @error('email')
                                            <div class="form-error">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <label class="form-label" for="order_notes">  Order Notes</label>
                                <input type="text" id="order_notes" name="order_notes" class="form-control form-control-lg "  placeholder="Notes about your order, e.g. special notes for delivery." />
                                    @error('order_notes')
                                        <div class="form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                @foreach($products as $product)
                                <ul>
                                    <li>{{$product->productName}} <span>${{$product->productPrice}}</span></li>
                                </ul>
                                @endforeach
                                <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
                                <div class="checkout__order__total">Total <span>${{$totalPrice}}</span></div>
                               
                                <button type="submit" class="site-btn">PLACE RESERVATION</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

 @endsection()