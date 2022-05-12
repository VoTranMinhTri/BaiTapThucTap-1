<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use App\Models\LoaiTaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaiTaiKhoan = LoaiTaiKhoan::all();
        return view('admin/add-page/add-account', ['loaiTaiKhoan' => $loaiTaiKhoan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Kiểm tra các trường input
        $validated = Validator::make(
            $request->all(),
            [
                'username' => 'required',
                'password' => 'required|min:6',
                'hoten' => 'required',
                'sdt' => 'required|max:11|min:10',
                'loaitaikhoan' => 'required',
                'ngaysinh' => 'required',
                'diachi' => 'required',
                'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
            ],
            $messages = [
                'required' => ':attribute là bắt buộc',
                'max' => ':attribute không chính xác',
                'min' => ':attribute không chính xác',
                'regex' => ':attribute không hợp lệ'
            ],
            [
                'loaitaikhoan' => 'Loại tài khoản',
                'username' => 'Tên tài khoản',
                'password' => 'Mật khẩu',
                'hoten' => 'Họ tên',
                'sdt' => 'Số điện thoại',
                'diachi' => 'Địa chỉ',
                'ngaysinh' => 'Ngày sinh',
                'email' => 'Email'
            ]
        )->validate();

        $kttontai = TaiKhoan::Where('username', '=', $request->input('username'))->first();
        if (empty($kttontai)) {
            $ktemailtontai = TaiKhoan::Where('email', '=', $request->input('email'))->first();
            if (empty($ktemailtontai)) {
                $taiKhoan = new TaiKhoan;
                $taiKhoan->fill([
                    'username' => $request->input('username'),
                    'password' => bcrypt($request->input('password')),
                    'loai_tai_khoan_id' => $request->input('loaitaikhoan'),
                    'ho_ten' => $request->input('hoten'),
                    'ngay_sinh' => $request->input('ngaysinh'),
                    'dia_chi' => $request->input('diachi'),
                    'sdt' => $request->input('sdt'),
                    'email' => $request->input('email'),
                    'token'=>Str::random(60)
                ]);
                if ($taiKhoan->save() == true) {
                    return redirect()->back()->with('thongbao', 'Thêm tài khoản thành công !');
                }
                return redirect()->back()->with('thongbao', 'Thêm tài khoản không thành công !');
            }
            return redirect()->back()->with('thongbao', 'Thêm tài khoản không thành công ! Email đã được tài khoản khác sử dụng !');
        }
        return redirect()->back()->with('thongbao', 'Thêm tài khoản không thành công ! Username đã tồn tại !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(TaiKhoan $taiKhoan)
    {
        $loaiTaiKhoan = LoaiTaiKhoan::all();
        return view('admin/edit-page/edit-account', ['taiKhoan' => $taiKhoan, 'loaiTaiKhoan' => $loaiTaiKhoan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaiKhoanRequest  $request
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taiKhoan)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'hoten' => 'required',
                'sdt' => 'required|max:11|min:10',
                'ngaysinh' => 'required',
                'diachi' => 'required',
                'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
            ],
            $messages = [
                'required' => ':attribute là bắt buộc',
                'max' => ':attribute không chính xác',
                'min' => ':attribute không chính xác',
                'regex' => ':attribute không hợp lệ'
            ],
            [
                'hoten' => 'Họ tên',
                'sdt' => 'Số điện thoại',
                'diachi' => 'Địa chỉ',
                'ngaysinh' => 'Ngày sinh',
                'email' => 'Email'
            ]
        )->validate();

        $ktemailtontai = TaiKhoan::Where('email', '=', $request->input('email'))
        ->where('username','!=',$taiKhoan->username)
        ->first();
        if (empty($ktemailtontai)) {
            $taiKhoan->fill([
                'ho_ten' => $request->input('hoten'),
                'ngay_sinh' => $request->input('ngaysinh'),
                'dia_chi' => $request->input('diachi'),
                'sdt' => $request->input('sdt'),
                'email' => $request->input('email')
            ]);
            if ($taiKhoan->save() == true) {
                return redirect()->back()->with('thongbao', 'Cập nhật thông tin tài khoản thành công !');
            }
            return redirect()->back()->with('thongbao', 'Cập nhật thông tin tài khoản không thành công !');
        }
        return redirect()->back()->with('thongbao', 'Cập nhật tài khoản không thành công ! Email đã được tài khoản khác sử dụng !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaiKhoan $taiKhoan)
    {
        //
    }

    public function login()
    {
        return view('admin/login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'error' => 'Tên đăng nhập hoặc mật khẩu không chính xác !',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function changepassword(Request $request)
    {
        //Kiểm tra các trường input
        $validated = Validator::make(
            $request->all(),
            [
                'matkhaucu' => 'required|min:6',
                'matkhaumoi' => 'required|min:6|different:matkhaucu',
                'matkhauxacnhan' => 'required|min:6|same:matkhaumoi',
            ],
            $messages = [
                'required' => ':attribute là bắt buộc !',
                'min' => ':attribute tối thiểu là 6 ký tự !',
                'same' => ':attribute không khớp với mật khẩu mới !',
                'different' => ':attribute không được giống với mật khẩu cũ !'
            ],
            [
                'matkhaucu' => 'Mật khẩu cũ',
                'matkhaumoi' => 'Mật khẩu mới',
                'matkhauxacnhan' => 'Mật khẩu xác nhận',
            ]
        )->validate();

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('matkhaucu')])) {
            $user = TaiKhoan::where('username', '=', $request->input('username'))->first();
            $user->fill([
                'password' => bcrypt($request->input('matkhaumoi')),
            ]);
            if ($user->save() == true) {
                return redirect()->back()->with('thongbao', 'Cập nhật mật khẩu thành công !');
            }
            return redirect()->back()->with('thongbao', 'Cập nhật mật khẩu không thành công ! Có lỗi đã xảy ra !');
        }
        return redirect()->back()->with('thongbao', 'Mật khẩu cũ không chính xác!');
    }
}
