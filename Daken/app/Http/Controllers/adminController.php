<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    
    public function reservation () {
        $reservationRecords=DB::table('orders')
        /* ->join('orderedproducts','orderedproducts.userId','=','orders.userId') */
        ->join('orderedproducts','orderedproducts.orderId','=','orders.userId')
        ->join('products','products.productId','=','orderedproducts.productId')
        ->select('orders.firstName as firstName','orders.lastName as lastName',
        'orders.phone as phone','orders.reservationMail as reservationMail',
        'orders.orderNotes as orderNotes','orders.created_at as time','products.name as name')
        ->get();

        return view('reservation',[
            'reservations'=>$reservationRecords,
        ]);
    }

    public function Feedback () {
        $reviewRecord=DB::table('reviews')
        ->join('users','users.id','=','reviews.reviewerId')
        ->select('users.name as userName','reviews.message as message',
        'reviews.reviewId as reviewId' )
        ->get();
        return view('feedback',[
            'reviews'=>$reviewRecord
        ]);
    }
}
