@extends('layouts.app')
@section('content')
<div class="frame">
    <div class="content-wraper">
        <div class="title-text-event-detail">Sự kiện 1</div>
        <img class="hoagiay-1" src="{{ asset('assets/images/hoagiay-1.png') }}">
        <div class="event-detail-main">
            <div class="event-detail-box-inside">
                <div class="evd-box-1">
                    <img class="evd-box-1-edp1" src="{{ asset('assets/images/ed1.png') }}">
                    <div class="info">
                        <div class="date">
                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                        </div>
                        <div class="title-event-secondary">Đầm sen Park</div>
                        <div class="price-event">25.000 VNĐ</div>
                    </div>
                </div>
                <div class="evd-box-2">
                    <img class="evd-box-2-edp2" src="{{ asset('assets/images/ed2.png') }}">
                    <div class="text event-detail-text">Lorem Ipsum is not simply random text. It has roots in a
                        piece
                        of classical Latin literature from 45 BC, making it over 2000 years old. words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature,</div>
                </div>
                <div class="evd-box-3">
                    <div class="text event-detail-text">Lorem Ipsum is not simply random text. It has roots in a
                        piece
                        of classical Latin literature from 45 BC, making it over 2000 years old. words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature,</div>
                    <img class="evd-box-3-edp3" src="{{ asset('assets/images/ed2.png') }}">
                </div>
                <div class="evd-box-4">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem
                    Ipsum.
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
