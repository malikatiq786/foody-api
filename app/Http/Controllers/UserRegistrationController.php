<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserRegistrationController extends Controller
{
    public function UserRegistration(Request $request){
        $userRegis=new User;
        $userRegis->user_id=$request->user_id;
        $userRegis->phone=$request->phone;
        $userRegis->role="customer";
        $userRegis->save();

        return response()->json([
            'status'=>200,
            "message" => "Created"
        ], 200);
    }




}
