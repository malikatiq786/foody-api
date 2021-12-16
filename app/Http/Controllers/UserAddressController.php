<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Useraddress;
use DB;
use Carbon\Carbon;

class UserAddressController extends Controller
{
    //
    public function UserAdress(Request $request){
        $userAddress=new Useraddress;
        $userAddress->userId=$request->userId;
        $userAddress->title=$request->title;
        $userAddress->address=$request->address;
        $userAddress->latitude=$request->latitude;
        $userAddress->longitude=$request->longitude;
        $date = Carbon::now();
        //Get date and time
        $date->toDateTimeString();
        $current_date_time=$date->toDateTimeString();
        $userAddress->datetime=$current_date_time;
        $userAddress->save();
        return response()->json([
            'status'=>200,
            "message" => "Created"
        ], 200);
    }
}
