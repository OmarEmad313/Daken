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
						<h2>Manage <b>Reservations</b></h2>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table__row">

                      <th>Reservation ID</th><th>Product Name</th>
                        <th>User Name</th>
						<th>User Email</th>
                        <th>Notes</th>
                        <th>Order date</th>
						  <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr class="table__row">
                        <td>{{$reservation->orderId}}</td>
                        <td>{{$reservation->productName}}</td>
						<td>{{$reservation->firstName}} </td>
                        <td>{{$reservation->reservationMail}}</td>
                        <td>{{$reservation->orderNotes}}</td>
						<td>{{$reservation->time}}</td>
                        <td>
                            <!-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                        </td>
                    </tr> 
                    @endforeach


					    
                </tbody>
            </table>
		
</body>
</html>

@endsection() 