@extends('admin_layout')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>

  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Products</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('adminProducts.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New product</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
						<th>Catagory</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->productId }}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}$</td>
                            <td>
                                <a href="{{ route('products.edit', ['product'=>$product->productId ] ) }}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <form action="{{ route('adminProducts.destroy', $product->productId ) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                   <a class="delete"> <button    type="submit" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>  </a>
                                </form>
                            </td>
                        </tr> 
                    @endforeach  
                    
                    
                </tbody>
            </table>
	
</body>
</html>

@endsection() 