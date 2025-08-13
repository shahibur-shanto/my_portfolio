<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/create',[MenuController::class,'create_menu']);

Route::get('/',[MenuController::class,'welcome']);


