<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SellerProductAPIController;
use App\Http\Controllers\RegistrationAPIController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\UserAPIController;

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

Route::get('/product/list',[SellerProductAPIController::class,'list'])->middleware('APIAuth');
Route::post('/register',[RegistrationAPIController::class,'register']);
Route::post('/login',[LoginAPIController::class,'login']);
Route::post('/mail',[RegistrationAPIController::class,'mail']);
Route::post('/logout',[LoginAPIController::class,'logout']);


// Route::post("/user-signup",[UserAPIController::class,'userSignup']);

// Route::post("/user-login", [UserAPIController::class,'userLogin']);

// Route::get("/user/{email}", [UserAPIController::class,'userDetail']);
