<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuKienController;
use App\Http\Controllers\TheThanhToanController;
use App\Http\Controllers\VeController;

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

Route::get('/event-detail', function () {
    return view('event-detail');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pay', function () {
    return view('pay');
});

Route::get('/pay-success', function () {
    return view('pay-success');
});

//Home
Route::get('/',[HomeController::class,'index']);
//Đặt vé
Route::get('/datve',[HomeController::class,'datve']);
//Trang sự kiện
Route::get('/event',[SuKienController::class,'index']);
Route::resource('suKien',SuKienController::class);
//Thanh toán
Route::post('/thanhtoan',[TheThanhToanController::class,'thanhtoan']);
//Danh sách vé
Route::resource('ve',VeController::class);

