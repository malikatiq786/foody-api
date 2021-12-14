<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('food_menu_category',[App\Http\Controllers\FoodMenuController::class,'FoodCategory']);
Route::post('user_login',[App\Http\Controllers\UserLoginController::class,'UserLogin']);
Route::get('food_category',[App\Http\Controllers\FoodCategoryController::class,'FoodCategory']);

