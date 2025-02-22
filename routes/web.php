<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',[AuthController::class,'login']);
Route::post('/',[AuthController::class,'auth_login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::group(['middleware'=>'common'],function(){
        Route::get('/panel/dashboard',[DashboardController::class,'dashboard']);
});