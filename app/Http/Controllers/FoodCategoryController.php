<?php

namespace App\Http\Controllers;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoryController extends Controller
{
    public function FoodCategory(){ 

        $foodCategory= FoodCategory::all();
        
        return response()->json([
            'status'=>200,
        'message'=>'success',
        'data'=>$foodCategory
        ]);
        
        
    }
}
