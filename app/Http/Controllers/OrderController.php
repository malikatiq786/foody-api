<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;
use Hash;

class OrderController extends Controller
{
    public function Order(){
        $order=Order::all();
        return response()->json([
            'status'=>200,
            'message'=>'success',
            'orderDate'=>$order
        ]);
    }

    
}
