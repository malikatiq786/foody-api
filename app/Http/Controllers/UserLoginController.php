<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserLoginController extends Controller
{
    //
    public function UserLogin(Request $request){
        $email=$request->email_address;
        $pass=$request->password;
        $userLogin=User::where(['email_address'=>$email])->first();
       
        if($userLogin){
            if(md5($pass) == $userLogin->password){
                $userLoginData=User::all();
                
                return response()->json([
                    'status'=>200,
                    'message'=>'Success',
                    'UserData'=>$userLoginData
                ]);
            }
           
            else{
                return response()->json([
                    'status'=>404,
                    'message'=>'Password  Not Correct',
                ]);
            } 
        }
        
    }

    



}
