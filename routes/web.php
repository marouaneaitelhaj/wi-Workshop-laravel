<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogs;
use App\Http\Controllers\ControllerUser;

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
Route::get('blogs',[blogs::class,'index']);
Route::get('create',[blogs::class,'create']);
Route::post('store',[blogs::class,'store']);
Route::get('show',[blogs::class,'show']);
Route::post('edit',[blogs::class,'edit']);
Route::get('login',[ControllerUser::class,'login']);
Route::post('check',[ControllerUser::class,'check']);