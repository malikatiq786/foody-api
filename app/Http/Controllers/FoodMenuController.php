<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;

class FoodMenuController extends Controller
{
    //

    public function FoodCategory(){
        $foodMenu =FoodMenu::all();
        return response()->json([
            'satus'=>200,
            'message'=>'Success',
            'data'=>$foodMenu
        ]);
    }
}
