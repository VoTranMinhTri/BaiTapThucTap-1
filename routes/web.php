<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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
//Liên hệ
Route::get('/contact', function () {
    return view('user/contact');
});
//Mail
Route::get('/guimaillienhe', function (Request $request) {
    $details = [
        'title' => 'Khách hàng gửi liên hệ',
        'hoten' => $request->input('hoten'),
        'email' => $request->input('email'),
        'sdt' => $request->input('sdt'),
        'diachi' => $request->input('diachi'),
        'loinhan' => $request->input('loinhan'),
    ];
    Mail::to('damsenpark2022@gmail.com')->send(new \App\Mail\MyMail($details));

    //Quay trở lại trang
    return redirect()->back()->with('success','thongbao');
});

//Admin
//Login
Route::get('/login', function () {
    return view('admin/login');
});



