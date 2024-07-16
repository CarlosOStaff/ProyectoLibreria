<?php

use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteControllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('/home-admin', [AdminController::class,'index2']);
    Route::get('/home-cliente',[ClienteController::class,'newindex']);
    Route::get('/auth/logout',[AuthController::class,'newlogout']);
});
Route::post('login', [AuthController::class, 'newindex']);
Route::get('/prueba-url',[ClienteController::class,'url']);
