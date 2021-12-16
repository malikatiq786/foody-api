<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Saledetail;
use Hash;
use DB;
use App\Models\Customer;
use Carbon\Carbon;

class SaleController extends Controller
{
    //
    public function saleStore(Request $request){
        
        $sale=new Sale();
        $sale->customer_id=$request->customer_id;
        $sale->total_items=$request->total_items;
        $sale->sub_total=$request->sub_total;
        $sale->paid_amount=$request->paid_amount;
        $sale->total_payable=$request->total_payable;
        $sale->date_time=date('Y-m-d H:i');
        $current = Carbon::now();
        $sale->order_time=$current;
        $sale->outlet_id=$request->outlet_id;
        $sale->order_status=1;
        $sale->order_type=1;
        $sale->save();
        //get outlet_id 
        $getOutlet_id=$sale->outlet_id;
        $saleDetails=new Saledetail;
        $saleDetails->sales_id=$sale->id;
        $saleDetails->outlet_id=$getOutlet_id;
        $saleDetails->user_id=$request->user_id;
        $sale_status=$sale->order_status=1;
        $saleDetails->order_status=$sale_status;
        $saleDetails->save();

        return response()->json([
            'status'=>200,
            "message" => "Created"
        ], 200);
        
        
    }
}
