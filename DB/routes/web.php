<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membersController;
use App\Http\Controllers\getControlller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('add',[membersController::class,'addData']);
Route::get('list',[getControlller::class,'list']);
Route::get('delete/{id}',[getControlller::class,'delete']);
Route::get('edit/{id}',[getControlller::class,'showData']);
Route::post('edit',[getControlller::class,'update']);
Route::view('add','addmember');
