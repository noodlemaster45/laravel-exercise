<?php

use App\Http\Controllers\inputController;
use App\Http\Controllers\test1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test1', function () {
    return view('test1');
});
Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/input',[inputController::class,'detail'])->name('input');
Route::get('/test1',[test1Controller::class,'detail'])->name('test1');
Route::get('/test1/{ngu}',[test1Controller::class,'detail']);
Route::resource('/post',PostController::class);
