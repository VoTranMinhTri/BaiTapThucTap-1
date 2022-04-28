<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuKienController;
use App\Http\Controllers\TheThanhToanController;
use App\Http\Controllers\VeController;
use App\Http\Controllers\LoaiVeController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\LoaiTaiKhoanController;
use App\Models\LoaiTaiKhoan;
use App\Models\SuKien;
use App\Models\NoiDungSuKien;
use App\Models\HinhAnhSuKien;
use App\Models\Ve;
use App\Models\LoaiVe;
use App\Models\TaiKhoan;
use Carbon\Carbon;

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
Route::get('/', [HomeController::class, 'index']);
//Đặt vé
Route::get('/datve', [HomeController::class, 'datve']);
//Trang sự kiện
Route::get('/event', [SuKienController::class, 'index']);
//Thanh toán
Route::post('/thanhtoan', [TheThanhToanController::class, 'thanhtoan']);
//Danh sách vé
Route::resource('ve', VeController::class);
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
    return redirect()->back()->with('thongbao', 'thongbao');
});
//Resource
Route::resource('suKien', SuKienController::class);


//Admin
//Kiểm tra chưa đăng nhập
Route::middleware('checklogout')->group(function () {
    //Resource
    Route::resource('loaiVe', LoaiVeController::class);
    Route::resource('loaiTaiKhoan', LoaiTaiKhoanController::class);
    Route::resource('taiKhoan', TaiKhoanController::class);


    //Bảng điều khiển
    Route::get('/dashboard', function () {
        return view('admin/index');
    });

    //Quản lý sự kiện
    Route::get('/eventadmin', function () {
        $sukien = SuKien::all();
        //Định dạng lại ngày
        foreach ($sukien as $tp) {
            $tp->ngay_bat_dau = Carbon::createFromFormat('Y-m-d', $tp->ngay_bat_dau)->format('d/m/Y');
            $tp->ngay_ket_thuc = Carbon::createFromFormat('Y-m-d', $tp->ngay_ket_thuc)->format('d/m/Y');
        }
        return view('admin/management-page/event', ['sukien' => $sukien]);
    });

    //Quản lý vé
    Route::get('/ticketadmin', function () {
        $ve = Ve::join('loai_ves', 'loai_ves.id', '=', 'ves.loai_ve_id')
            ->select('ves.idve', 'loai_ves.ten_loai_ve', 'ves.ngay_su_dung', 'ves.hinh_anh_ma_qr', 'ves.ho_ten', 'ves.sdt', 'ves.email')
            ->get();
        foreach ($ve as $tp) {
            $tp->ngay_su_dung = Carbon::createFromFormat('Y-m-d', $tp->ngay_su_dung)->format('d/m/Y');
        }
        return view('admin/management-page/ticket', ['ve' => $ve]);
    });

    //Quản lý loại vé
    Route::get('/tickettypeadmin', function () {
        $loaive = LoaiVe::all();
        return view('admin/management-page/ticket-type', ['loaive' => $loaive]);
    });

    //Thêm
    Route::get('/add-event', function () {
        return view('admin/add-page/add-event');
    });
    Route::get('/add-ticket-type', function () {
        return view('admin/add-page/add-ticket-type');
    });


    //Cập nhật
    Route::get('/edit-event', function () {
        return view('admin/edit-page/edit-event');
    });
    Route::get('/edit-ticket-type', function () {
        return view('admin/edit-page/edit-ticket-type');
    });
    Route::get('/edit-account', function () {
        return view('admin/edit-page/edit-account');
    });

    //Kiểm tra quyền
    Route::middleware('checkpermission')->group(function () {
        //Quản lý tài khoản
        Route::get('/accountadmin', function () {
            $taikhoan = TaiKhoan::join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
                ->select('tai_khoans.username', 'loai_tai_khoans.ten_loai_tai_khoan', 'tai_khoans.ho_ten', 'tai_khoans.ngay_sinh', 'tai_khoans.dia_chi', 'tai_khoans.sdt')
                ->get();

            //Định dạng lại ngày
            foreach ($taikhoan as $tp) {
                $tp->ngay_sinh = Carbon::createFromFormat('Y-m-d', $tp->ngay_sinh)->format('d/m/Y');
            }
            return view('admin/management-page/account', ['taikhoan' => $taikhoan]);
        });

        //Quản lý loại tài khoản
        Route::get('/accounttypeadmin', function () {
            $loaitaikhoan = LoaiTaiKhoan::all();

            return view('admin/management-page/account-type', ['loaitaikhoan' => $loaitaikhoan]);
        });

        //Thêm
        Route::get('/add-account-type', function () {
            return view('admin/add-page/add-account-type');
        });

        //Sửa
        Route::get('/edit-account-type', function () {
            return view('admin/edit-page/edit-account-type');
        });
    });

    //Đổi mật khẩu
    Route::get('/change-pass', function () {
        return view('admin/management-page/change-pass');
    });
    Route::post('/change-pass', [TaiKhoanController::class, 'changepassword']);

});

//Kiểm tra đã đăng nhập
Route::middleware('checkuser')->group(function () {
    //Trang đăng nhập
    Route::get('/login', [TaiKhoanController::class, 'login']);
});

//Xác thực
Route::post('/login', [TaiKhoanController::class, 'authenticate']);

//Đăng xuất
Route::get('/logout', [TaiKhoanController::class, 'logout']);
