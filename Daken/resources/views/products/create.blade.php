<!-- <input type="file" name="image"> 

edit and create are the same -->
@extends('layout')

@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Product Form</h3>

            <form method="POST" action="{{route('products.store') }}">
                @csrf
              <div class="row">
                    <!-- <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="productId" class="form-control form-control-lg" />
                        <label class="form-label" for="productId">product id</label>
                    </div>
                    </div> -->

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="product_name" name="product_name" class="form-control form-control-lg" />
                            <label class="form-label" for="product_name"> Name</label>
                            @error('product_name')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
              </div>

              <div class="row">

                    <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                            <textarea class="form-control form-control-lg" id="product_description" name="product_description"> </textarea>
                            <label for="product_description" class="form-label">Description</label>
                            @error('product_description')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="file" id="productimage" name="productimage" class="form-control form-control-lg" />
                    <label class="form-label" for="productimage">Product image</label>
                  </div>

                </div>

                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline datepicker w-100">
                        <input type="text" class="form-control form-control-lg" id="product_price" name="product_price"/>
                        <label for="product_price" class="form-label">Price</label>
                        @error('product_price')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                </div>
                
              </div>

              <div class="row">

                <div class="col-12">
                  <select class="select form-control-lg" id="category" name="category">
                    <option value="1" disabled>Choose option</option>
                    <option value="western">western</option>
                    <option value="oriental">oriental</option>
                    <option value="single">single</option>
                  </select>
                  <label class="form-label select-label" for="category">Choose option</label>
                    @error('category')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection()