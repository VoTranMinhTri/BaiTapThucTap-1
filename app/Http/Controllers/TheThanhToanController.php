<?php

namespace App\Http\Controllers;

use App\Models\ChiTietHoaDon;
use App\Models\TheThanhToan;
use App\Models\Ve;
use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Carbon\Carbon;

class TheThanhToanController extends Controller
{
    public function thanhtoan(Request $request)
    {
        //Kiểm tra các trường input
        $validated = Validator::make(
            $request->all(),
            [
                'sothe' => 'required|max:16',
                'hotenchuthe' => 'required',
                'ngayhethan' => 'required',
                'cvv' => 'required|max:4',
            ],
            $messages = [
                'required' => ':attribute là bắt buộc',
                'max' => ':attribute không chính xác',
                'min' => ':attribute không chính xác',
            ],
            [
                'sothe' => 'Số thẻ',
                'hotenchuthe' => 'Họ tên chủ thẻ',
                'ngayhethan' => 'Ngày hết hạn',
                'cvv' => 'CVV/CVC',
            ]
        )->validate();

        //Định dạng lại ngày
        $ngayhh = Carbon::createFromFormat('d/m/Y', $request->input('ngayhethan'))->format('Y-m-d');
        $ngaysd = Carbon::createFromFormat('d/m/Y', $request->input('ngaysudung'))->format('Y-m-d');
        $ktthongtin = TheThanhToan::where('id','=',$request->input('sothe'))
        ->where('ho_ten','=',$request->input('hotenchuthe'))
        ->where('ngay_het_han','=',$ngayhh)
        ->where('cvv_cvc','=',$request->input('cvv'))
        ->first();
        if(!empty($ktthongtin)){
            $thoigiantao = Carbon::now('Asia/Ho_Chi_Minh');

            //Tạo hóa đơn
            $hoaDon = new HoaDon;
            $hoaDon->fill([
                'idhd'=> 'HD'.Str::random(5).str_replace('-','',$ngaysd),
                'ho_ten'=>$request->input('hoten'),
                'sdt'=>$request->input('sdt'),
                'email'=>$request->input('email'),
                'ngay_lap'=> $ngaysd
            ]);
            $hoaDon->save();

            //Tạo vé
            for($i=0;$i<$request->input('sove');$i++){
                $ve = new Ve;
                $ve->fill([
                    'idve'=> Str::random(5).str_replace('-','',$ngaysd),
                    'loai_ve_id' =>$request->input('loaive'),
                    'ngay_su_dung'=>$ngaysd,
                    'hinh_anh_ma_qr'=>'maqr.png',
                    'ho_ten'=>$request->input('hoten'),
                    'sdt'=>$request->input('sdt'),
                    'email'=>$request->input('email'),
                    'created_at'=> $thoigiantao
                ]);
                $ve->save();

                //Tạo chi tiết hóa đơn
                $chiTietHoaDon = new ChiTietHoaDon;
                $chiTietHoaDon->fill([
                    'hoa_don_id'=> $hoaDon->idhd,
                    've_id'=> $ve->idve,
                ]);
                $chiTietHoaDon->save();
            }
            $dsve = Ve::join('loai_ves','loai_ves.id','=','ves.loai_ve_id')
            ->where('email','=',$request->input('email'))
            ->where('ves.created_at','=',$thoigiantao)
            ->select('ves.idve','loai_ves.ten_loai_ve','ves.ngay_su_dung','ves.ho_ten','ves.sdt','ves.email','ves.created_at','ves.loai_ve_id','ves.hinh_anh_ma_qr')
            ->get();

            //Định dạng lại ngày
            foreach($dsve as $ve){
                $ve->ngay_su_dung = Carbon::createFromFormat('Y-m-d', $ve->ngay_su_dung)->format('d/m/Y');
            }
            // dd($dsve);
            return redirect()->route('ve.index')->with(['dsve'=>$dsve]);
        }
        return view('user/pay',['error'=>'errorMessage','loaive'=>$request->input('loaive'),'sove'=>$request->input('sove'),'hoten'=>$request->input('hoten'),'sdt'=>$request->input('sdt'),'email'=>$request->input('email'),'ngaysudung'=>$request->input('ngaysudung'),'tongtien'=>$request->input('tongtien')]);
    }
}
