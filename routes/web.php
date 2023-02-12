<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerBlogs;
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
Route::get('',[controllerBlogs::class,'index']);
Route::get('blogs',[controllerBlogs::class,'index']);
Route::post('update/{id}',[controllerBlogs::class,'update']);
Route::get('edit/{id}',[controllerBlogs::class,'edit']);
Route::get('create',[controllerBlogs::class,'create']);
Route::post('store',[controllerBlogs::class,'store']);
Route::get('show/{id}',[controllerBlogs::class,'show']);
Route::get('login',[ControllerUser::class,'login']);
Route::get('create',[ControllerUser::class,'create']);
Route::post('storeuser',[ControllerUser::class,'store']);
Route::post('check',[ControllerUser::class,'check']);