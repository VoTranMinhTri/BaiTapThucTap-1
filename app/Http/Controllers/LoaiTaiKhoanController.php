<?php

namespace App\Http\Controllers;

use App\Models\LoaiTaiKhoan;
use Illuminate\Http\Request;

class LoaiTaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenloaitaikhoanformat = trim($request->input('tenloaitaikhoan'));
        $tontai = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'like', $tenloaitaikhoanformat)->first();
        if (empty($tontai)) {
            $ktten = str_replace(' ', '', $tenloaitaikhoanformat);
            $tontai = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'like', $ktten)->first();
            if (empty($tontai)) {
                $loaiTaiKhoan = new LoaiTaiKhoan;
                $loaiTaiKhoan->fill([
                    'ten_loai_tai_khoan' => $request->input('tenloaitaikhoan'),
                ]);
                if ($loaiTaiKhoan->save() == true){
                    return redirect()->back()->with('thongbao', 'Thêm loại tài khoản thành công !');
                }
                return redirect()->back()->with('thongbao', 'Thêm loại tài khoản không thành công !');
            }
        }
        return redirect()->back()->with('thongbao', 'Thêm loại tài khoản không thành công ! Tên loại tài khoản đã tồn tại');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiTaiKhoan $loaiTaiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiTaiKhoan $loaiTaiKhoan)
    {
        return view('admin/edit-page/edit-account-type', ['loaiTaiKhoan' => $loaiTaiKhoan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiTaiKhoanRequest  $request
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiTaiKhoan $loaiTaiKhoan)
    {
        $tenloaitaikhoanformat = trim($request->input('tenloaitaikhoan'));
        $tontai = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'like', $tenloaitaikhoanformat)->where('id','!=',$loaiTaiKhoan->id)->first();
        if (empty($tontai)) {
            $ktten = str_replace(' ', '', $tenloaitaikhoanformat);
            $tontai = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'like', $ktten)->where('id','!=',$loaiTaiKhoan->id)->first();
            if (empty($tontai)) {
                $loaiTaiKhoan->fill([
                    'ten_loai_tai_khoan' => $request->input('tenloaitaikhoan'),
                ]);
                if ($loaiTaiKhoan->save() == true){
                    return redirect()->back()->with('thongbao', 'Cập nhật loại tài khoản thành công !');
                }
                return redirect()->back()->with('thongbao', 'Cập nhật loại tài khoản không thành công !');
            }
        }
        return redirect()->back()->with('thongbao', 'Cập nhật loại tài khoản không thành công ! Tên loại tài khoản đã tồn tại');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiTaiKhoan $loaiTaiKhoan)
    {
        if($loaiTaiKhoan->delete()){
            return redirect()->back()->with('thongbao', 'Xóa loại tài khoản thành công');
        }
        return redirect()->back()->with('thongbao', 'Xóa loại tài khoản không thành công');
    }
}
