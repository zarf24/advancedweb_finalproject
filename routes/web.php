<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\fetchControl;
use App\Http\Controllers\projectControl;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/",[homeControl::class,"index"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::view("new",'manager.addproject');
Route::POST("add",[projectControl::class,"addData"]);
Route::POST("set",[homeControl::class,"setstatus"]);
Route::get('del/{projectid}',[homeControl::class,"deleteProject"]);
Route::get('upd/{projectid}',[homeControl::class,"showProject"]);

//Route::get("/redirect",[fetchControl::class,'show']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
