
@extends('layout')

@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Offer Form</h3>

            <form method="POST" action="{{route('adminOfferConrtroller.store') }} " enctype="multipart/form-data">
                @csrf
              <div class="row">

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="product_id" name="product_id" class="form-control form-control-lg " value="{{ old('product_id')}}" />
                            <label class="form-label" for="product_id"> Product ID</label>
                            @error('product_id')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline datepicker w-100">
                        <input type="text" class="form-control form-control-lg" id="offer_ratio" name="offer_ratio" value="{{ old('offer_ratio')}}"/>
                        <label for="offer_ratio" class="form-label">Offer Ratio</label>
                        @error('offer_ratio')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                    </div>
                    
              </div>
              
              <div class="mt-4 pt-2">
                <button class="btn btn-primary btn-lg" type="submit" >Submit</button> 
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection()