@extends('user/layouts.app')
@section('content')
<div class="frame">
    <div class="content-wraper">
        <div class="title-text-event-detail">{{ $sukien->ten_su_kien }}</div>
        <img class="hoagiay-1" src="{{ asset('assets/images/hoagiay-1.png') }}">
        <div class="event-detail-main">
            <div class="event-detail-box-inside">
                <div class="evd-box-1">
                    <img class="evd-box-1-edp1" src="{{ asset('assets/images/'.$hinhanhsukien[0]->hinh_anh) }}">
                    <div class="info">
                        <div class="date">
                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                            <div class="text-date">{{ $sukien->ngay_bat_dau }} - {{ $sukien->ngay_ket_thuc }}</div>
                        </div>
                        <div class="title-event-secondary">{{ $sukien->dia_diem }}</div>
                        <div class="price-event">{{ number_format($sukien->gia,0) }} VNĐ</div>
                    </div>
                </div>
                <div class="evd-box-2">
                    <img class="evd-box-2-edp2" src="{{ asset('assets/images/'.$hinhanhsukien[1]->hinh_anh) }}">
                    <div class="text event-detail-text">{{ $noidungsukien[1]->noi_dung }}</div>
                </div>
                <div class="evd-box-3">
                    <div class="text event-detail-text">{{ $noidungsukien[2]->noi_dung }}</div>
                    <img class="evd-box-3-edp3" src="{{ asset('assets/images/'.$hinhanhsukien[2]->hinh_anh) }}">
                </div>
                <div class="evd-box-4">
                    {{ $noidungsukien[0]->noi_dung }}
                </div>
            </div>
        </div>
    </div>
    <img class="flag-trai" src="{{ asset('assets/images/flag-trai.png') }}">
    <img class="flag-phai" src="{{ asset('assets/images/flag-phai.png') }}">
</div>
<div class="navigation">
    <img class="navigation-bg" src="{{ asset('assets/images/navigation-bg.png') }}">
    <div class="group2">
        <div class="frame22">
            <div class="phone">
                <div class="frame21">
                    <div class="vectorstroke"><img src="{{ asset('assets/images/phone.svg') }}"></div>
                </div>
            </div>
            <div class="textnumber">0123456789</div>
        </div>
        <div class="frame20">
            <div class="item"><a href="/">Trang chủ</a></div>
            <div class="item active"><a href="/event" style="color: #FFFFFF">Sự kiện</a></div>
            <div class="item"><a href="/contact">Liên hệ</a></div>
        </div>
    </div>
    <a href="/">
        <div class="logo"></div>
    </a>
</div>
@endsection
