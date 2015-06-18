<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use View;

class orderController extends Controller
{

    public function placedOrder($name , $size)
    {
        $data = array(
            'name' => $name ,
            'size' => $size 
        );
        return View::make( 'orders.placedorder' )->with( "coffeeInfo" , $data );
    }
    public function confirmOrder()
    {
        return view( 'orders.confirmorder' );
    }
    public function processPayment() {
        return view( 'orders.processpayment' );
    }
    public function paymentSuccess() {
        return view( 'orders.successpage' );
    }

}
