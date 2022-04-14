<?php

namespace App\Http\Controllers;

use App\Models\LoaiVe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $loaive = LoaiVe::all();
        return view('index', ['loaive' => $loaive]);
    }

    public function datve(Request $request)
    {
        //Kiểm tra các trường input
        $validated = Validator::make(
            $request->all(),
            [
                'loaive' => 'required',
                'sove' => 'required',
                'hoten' => 'required',
                'sdt' => 'required|max:11|min:10',
                'email' => 'required',
                'ngaysudung' => 'required'
            ],
            $messages = [
                'required' => ':attribute là bắt buộc',
                'max' => ':attribute không chính xác',
                'min' => ':attribute không chính xác',
            ],
            [
                'loaive' => 'Loại vé',
                'sove' => 'Số vé',
                'hoten' => 'Họ tên',
                'sdt' => 'Số điện thoại',
                'email' => 'Địa chỉ email',
                'ngaysudung' => 'Ngày sử dụng'
            ]
        )->validate();

        //Truy vấn giá của loại vé
        $giacualoaive = LoaiVe::where('id','=',$request->input('loaive'))->select('loai_ves.gia')->first();

        //Tính tổng tiền
        $tongtien = $request->input('sove') * $giacualoaive->gia;

        return view('pay',['loaive'=>$request->input('loaive'),'sove'=>$request->input('sove'),'hoten'=>$request->input('hoten'),'sdt'=>$request->input('sdt'),'email'=>$request->input('email'),'ngaysudung'=>$request->input('ngaysudung'),'tongtien'=>$tongtien]);
    }
}
