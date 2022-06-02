@extends('admin_layout')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

  
  <body>
      
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Offers</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('adminOffers.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New offer</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>offer ID</th>
                        <th>product ID</th>
                        <th>Offer Ratio</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->offerId }}</td>
                            <td>{{$offer->productId}}</td>
                            <td>{{$offer->offerRatio}} %</td>
                            <td>
                                <form action="{{ route('adminOffers.destroy', $offer->offerId ) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                   <a class="delete" > <button   class="addToCart" type="submit" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button> </a> 
                                </form>
                            </td>
                        </tr> 
                    @endforeach  
                    
                    
                </tbody>
            </table>
</body>
</html>

@endsection() 
<script type="text/javascript">

$("document").ready(function()
{
    setTimeout(function()
    {
        $("div.alert").remove();
    },3000);
}
);


</script>