@extends('layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
   <!--  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>01050070076</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>5 شارع محمد المهدي متفرع من نبيل الوقاد ارض الجولف , القاهره</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>DakenEG@outlook.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/dir/30.006115,31.4570441/30.0822987,31.3385315/@30.0498761,31.3394429,12.46z/data=!4m4!4m3!1m1!4e1!1m0"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>cairo</h4>
                <ul>
                    <li>Phone: 01050070076</li>
                    <li>Address: 5 شارع محمد المهدي متفرع من نبيل الوقاد ارض الجولف , القاهره</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <label class="form-label" for="first_name"> First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg " value="{{ old('first_name')}}" />
                        @error('first_name')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <label class="form-label" for="email">  Email</label>
                        <input type="text" id="email" name="email" class="form-control form-control-lg " value="{{ old('email')}}" />
                            @error('email')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col-lg-12 text-center">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control form-control-lg" id="message" name="message" value="{{ old('message')}}"> </textarea>
                            @error('message')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

@endsection

 