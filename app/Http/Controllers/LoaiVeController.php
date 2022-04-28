<?php

namespace App\Http\Controllers;

use App\Models\LoaiVe;
use Illuminate\Http\Request;

class LoaiVeController extends Controller
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
     * @param  \App\Http\Requests\StoreLoaiVeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaiVe = new LoaiVe;
        $loaiVe->fill([
            'ten_loai_ve' => $request->input('tenloaive'),
            'gia' => $request->input('gia'),
        ]);
        if ($loaiVe->save() == true){
            return redirect()->back()->with('thongbao', 'Thêm loại vé thành công !');
        }
        return redirect()->back()->with('thongbao', 'Thêm loại vé không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiVe  $loaiVe
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiVe $loaiVe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiVe  $loaiVe
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiVe $loaiVe)
    {
        return view('admin/edit-page/edit-ticket-type', ['loaiVe' => $loaiVe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiVeRequest  $request
     * @param  \App\Models\LoaiVe  $loaiVe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiVe $loaiVe)
    {
        $loaiVe->fill([
            'ten_loai_ve' => $request->input('tenloaive'),
            'gia' => $request->input('gia'),
        ]);
        if ($loaiVe->save() == true){
            return redirect()->back()->with('thongbao', 'Cập nhật loại vé thành công !');
        }
        return redirect()->back()->with('thongbao', 'Cập nhật loại vé không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiVe  $loaiVe
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiVe $loaiVe)
    {
        if($loaiVe->delete()){
            return redirect()->back()->with('thongbao', 'Xóa loại vé thành công');
        }
        return redirect()->back()->with('thongbao', 'Xóa loại vé không thành công');
    }
}
