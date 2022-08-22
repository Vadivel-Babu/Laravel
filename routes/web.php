<?php

use App\Http\Controllers\customer;
use App\Http\Controllers\customercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\First;
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

use Illuminate\Http\Request;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('form',[customercontroller::class,'login']);
Route::post('form-save',[customercontroller::class,'save']);
Route::get('/user/{id}', [customercontroller::class,'Edit']);
Route::post('form-update',[customercontroller::class,'update']);
Route::get('/delete/{$id}',[customercontroller::class,'delete']);
