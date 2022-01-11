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
Route::post('user_registration',[App\Http\Controllers\UserRegistrationController::class,'UserRegistration']);
Route::get('food_category',[App\Http\Controllers\FoodCategoryController::class,'FoodCategory']);
Route::get('food_order',[App\Http\Controllers\OrderController::class,'Order']);
Route::post('create_order',[App\Http\Controllers\OrderController::class,'StorOrder']);
Route::post('food_sale',[App\Http\Controllers\SaleController::class,'saleStore']);
Route::post('user_address',[App\Http\Controllers\UserAddressController::class,'UserAdress']);
