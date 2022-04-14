<?php

namespace App\Http\Controllers;

use App\Models\SuKien;
use App\Models\NoiDungSuKien;
use App\Models\HinhAnhSuKien;
use Illuminate\Http\Request;

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
        foreach($sukien as $tp){

            $tp->ngay_bat_dau = Carbon::createFromFormat('Y-m-d', $tp->ngay_bat_dau)->format('d/m/Y');
            $tp->ngay_ket_thuc = Carbon::createFromFormat('Y-m-d', $tp->ngay_ket_thuc)->format('d/m/Y');

        }
        return view('event',['sukien'=>$sukien]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function show(SuKien $suKien)
    {
        $noidungsukien = NoiDungSuKien::where('su_kien_id','=',$suKien->id)->get();
        $hinhanhsukien = HinhAnhSuKien::where('su_kien_id','=',$suKien->id)->get();

        //Định dạng lại ngày
        $suKien->ngay_bat_dau = Carbon::createFromFormat('Y-m-d', $suKien->ngay_bat_dau)->format('d/m/Y');
        $suKien->ngay_ket_thuc = Carbon::createFromFormat('Y-m-d', $suKien->ngay_ket_thuc)->format('d/m/Y');
        return view('event-detail',['sukien'=>$suKien,'noidungsukien'=>$noidungsukien,'hinhanhsukien'=>$hinhanhsukien]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function edit(SuKien $suKien)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuKien  $suKien
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuKien $suKien)
    {
        //
    }
}
