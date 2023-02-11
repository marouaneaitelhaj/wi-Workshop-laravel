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
Route::get('blogs',[controllerBlogs::class,'index']);
Route::get('create',[controllerBlogs::class,'create']);
Route::post('store',[controllerBlogs::class,'store']);
Route::get('show',[controllerBlogs::class,'show']);
Route::post('edit',[controllerBlogs::class,'edit']);
Route::get('login',[ControllerUser::class,'login']);
Route::get('create',[ControllerUser::class,'create']);
Route::post('storeuser',[ControllerUser::class,'store']);
Route::post('check',[ControllerUser::class,'check']);