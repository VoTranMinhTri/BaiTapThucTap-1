<?php

namespace App\Http\Controllers;

use App\Models\SuKien;
use App\Models\NoiDungSuKien;
use App\Models\HinhAnhSuKien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

class SuKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sukien = SuKien::all();

        //Định dạng lại ngày
        foreach ($sukien as $tp) {

            $tp->ngay_bat_dau = Carbon::createFromFormat('Y-m-d', $tp->ngay_bat_dau)->format('d/m/Y');
            $tp->ngay_ket_thuc = Carbon::createFromFormat('Y-m-d', $tp->ngay_ket_thuc)->format('d/m/Y');
        }
        return view('user/event', ['sukien' => $sukien]);
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
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tensukienformat = trim($request->input('tensukien'));
        $tontai = SuKien::where('ten_su_kien', 'like', $tensukienformat)->first();
        if (empty($tontai)) {
            $ktten = str_replace(' ', '', $tensukienformat);
            $tontai = SuKien::where('ten_su_kien', 'like', $ktten)->first();
            if (empty($tontai)) {
                $sukien = new SuKien;
                $sukien->fill([
                    'ten_su_kien' => $request->input('tensukien'),
                    'dia_diem' => $request->input('diadiem'),
                    'ngay_bat_dau' => $request->input('ngaybatdau'),
                    'ngay_ket_thuc' => $request->input('ngayketthuc'),
                    'gia' => $request->input('gia'),
                    'hinh_anh' => '',
                ]);

                if ($sukien->save() == true) {
                    //Tao liên kết đến file storage bằng câu lệnh: php artisan storage:link
                    //Kiểm tra người có chọn hình ảnh nếu không sẽ gán hình ảnh mặc định
                    if ($request->hasFile('hinhanhsukien')) {
                        $request->file('hinhanhsukien')->storeAs('public/images', $request->file('hinhanhsukien')->getClientOriginalName());
                        $sukien->hinh_anh = $request->file('hinhanhsukien')->getClientOriginalName();
                    } else {
                        $sukien->hinh_anh = 'default.png';
                    }
                    $sukien->save();
                    for ($i = 0; $i < 3; $i++) {
                        //Nội dung mặc định
                        $noidungsukien = new NoiDungSuKien;
                        $noidungsukien->fill([
                            'su_kien_id' => $sukien->id,
                            'noi_dung' => 'Trống',
                        ]);
                        $noidungsukien->save();

                        //Hình ảnh mặc định
                        $hinhanhsukien = new HinhAnhSuKien;
                        $hinhanhsukien->fill([
                            'su_kien_id' => $sukien->id,
                            'hinh_anh' => 'default.png',
                        ]);
                        $hinhanhsukien->save();
                    }
                    return redirect()->back()->with('thongbao', 'Thêm sự kiện thành công !');
                }
                return redirect()->back()->with('thongbao', 'Thêm sự kiện không thành công ! Kiểm tra lại thông tin');
            }
        }
        return redirect()->back()->with('thongbao', 'Thêm sự kiện không thành công ! Tên sự kiện đã tồn tại');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function show(SuKien $suKien)
    {
        $noiDungSuKien = NoiDungSuKien::where('su_kien_id', '=', $suKien->id)->get();
        $hinhAnhSuKien = HinhAnhSuKien::where('su_kien_id', '=', $suKien->id)->get();

        //Định dạng lại ngày
        $suKien->ngay_bat_dau = Carbon::createFromFormat('Y-m-d', $suKien->ngay_bat_dau)->format('d/m/Y');
        $suKien->ngay_ket_thuc = Carbon::createFromFormat('Y-m-d', $suKien->ngay_ket_thuc)->format('d/m/Y');
        return view('user/event-detail', ['sukien' => $suKien, 'noiDungSuKien' => $noiDungSuKien, 'hinhAnhSuKien' => $hinhAnhSuKien]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function edit(SuKien $suKien)
    {
        $noiDungSuKien = NoiDungSuKien::where('su_kien_id', '=', $suKien->id)->get();
        $hinhAnhSuKien = HinhAnhSuKien::where('su_kien_id', '=', $suKien->id)->get();

        return view('admin/edit-page/edit-event', ['suKien' => $suKien, 'noiDungSuKien' => $noiDungSuKien, 'hinhAnhSuKien' => $hinhAnhSuKien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuKien $suKien)
    {
        $tensukienformat = trim($request->input('tensukien'));
        $tontai = SuKien::where('ten_su_kien', 'like', $tensukienformat)->where('id','!=',$suKien->id)->first();
        if (empty($tontai)) {
            $ktten = str_replace(' ', '', $tensukienformat);
            $tontai = SuKien::where('ten_su_kien', 'like', $ktten)->where('id','!=',$suKien->id)->first();
            if (empty($tontai)) {
                $flag = 1;

                //Tiến hành cập nhật sự kiện
                $suKien->fill([
                    'ten_su_kien' => $request->input('tensukien'),
                    'dia_diem' => $request->input('diadiem'),
                    'ngay_bat_dau' => $request->input('ngaybatdau'),
                    'ngay_ket_thuc' => $request->input('ngayketthuc'),
                    'gia' => $request->input('gia'),
                ]);

                if ($suKien->save() == true) {
                    if ($request->hasFile('hinhanhsukien')) {
                        $request->file('hinhanhsukien')->storeAs('public/images', $request->file('hinhanhsukien')->getClientOriginalName());
                        $suKien->hinh_anh = $request->file('hinhanhsukien')->getClientOriginalName();
                        $suKien->save();
                    }
                } else {
                    $flag = 0;
                }

                $noiDungSuKien = NoiDungSuKien::where('su_kien_id', '=', $suKien->id)->get();
                $hinhAnhSuKien = HinhAnhSuKien::where('su_kien_id', '=', $suKien->id)->get();
                //Tiến hành cập nhật chi tiết sự kiện
                $i = 1;
                foreach ($noiDungSuKien as $tp) {
                    $tp->fill([
                        'noi_dung' => $request->input('noidung' . $i),
                    ]);
                    if ($tp->save() == false) {
                        $flag = 0;
                    }
                    $i++;
                }
                $i = 1;
                foreach ($hinhAnhSuKien as $tp) {
                    if ($request->hasFile('hinhanhsukien' . $i)) {
                        $request->file('hinhanhsukien' . $i)->storeAs('public/images', $request->file('hinhanhsukien' . $i)->getClientOriginalName());
                        $tp->hinh_anh = $request->file('hinhanhsukien' . $i)->getClientOriginalName();
                        $tp->save();
                        if ($tp->save() == false) {
                            $flag = 0;
                        }
                    }
                    $i++;
                }

                if ($flag == 1) {
                    return redirect()->back()->with('thongbao', 'Cập nhật sự kiện thành công');
                }
                return redirect()->back()->with('thongbao', 'Cập nhật sự kiện không thành công ! Kiểm tra lại thông tin');
            }
        }
        return redirect()->back()->with('thongbao', 'Cập nhật sự kiện không thành công ! Tên sự kiện đã tồn tại');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuKien $suKien)
    {
        if ($suKien->delete()) {
            return redirect()->back()->with('thongbao', 'Xóa sự kiện thành công');
        }
        return redirect()->back()->with('thongbao', 'Xóa sự kiện không thành công');
    }
}
