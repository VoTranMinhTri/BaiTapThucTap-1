@extends('layouts.app')
@section('content')
    <div class="frame">
        <div class="content-wraper">
            <div class="group-content-pay">
                <form>
                    <div class="khung-1-to">
                        <div class="box-sotienthanhtoan">
                            <div class="title-box">Số tiền thanh toán</div>
                            <input class="input-sotienthanhtoan" value="360.000 vnd">
                        </div>
                        <div class="box-sove">
                            <div class="title-box">Số lượng vé</div>
                            <div class="group-sove">
                                <input class="input-sove" value="4">
                                <div class="text-ve">vé</div>
                            </div>
                        </div>
                        <div class="box-ngaysudung">
                            <div class="title-box">Ngày sử dụng</div>
                            <input class="input-pay-ngaysudung" value='15/8/2021'>
                        </div>
                        <div class="box-thongtinlienhe">
                            <div class="title-box">Thông tin liên hệ</div>
                            <input class="input-thongtinlienhe" value='Vo Tran Minh Tri'>
                        </div>
                        <div class="box-dienthoai">
                            <div class="title-box">Điện thoại</div>
                            <input class="input-pay-dienthoai" value='0123456789'>
                        </div>
                        <div class="box-email">
                            <div class="title-box">Email</div>
                            <input class="input-pay-email" value='trivtm2001@gmail.com'>
                        </div>
                    </div>
                    <div class="khung-3-to">
                        <div class="group-information-pay">
                            <div class="box-sothe">
                                <div class="title-box">Số thẻ</div>
                                <input class="input-sothe-hoten" value="3641 4513 4369 7895">
                            </div>
                            <div class="box-hotenchuthe">
                                <div class="title-box">Họ tên chủ thẻ</div>
                                <input class="input-sothe-hoten" value="Vo Tran Minh Tri">
                            </div>
                            <div class="box-ngayhethan">
                                <div class="title-box">Ngày hết hạn</div>
                                <input class="input-ngayhethan" type="date">
                                <button class="btn-date" style="top: 37px;left: 350px;"></button>
                            </div>
                            <div class="box-cvc">
                                <div class="title-box">CVV/CVC</div>
                                <input class="input-cvc">
                            </div>
                        </div>
                        <button class="btn-thanhtoan"></button>
                    </div>
                    <div class="khung-2-to"></div>
                </form>
                <img src="{{ asset('assets/images/trini.png') }}" class="trini-picture">
            </div>
        </div>
        <img class="vecongvegiadinh" src="{{ asset('assets/images/vecong-vegiadinh.png') }}">
        <img class="thongtinthanhtoan" src="{{ asset('assets/images/thongtinthanhtoan.png') }}">
        <img src="{{ asset('assets/images/thanhtoan-text.png') }}" class="thanhtoan-text">
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
                <div class="item"><a href="/event">Sự kiện</a></div>
                <div class="item"><a href="/contact">Liên hệ</a></div>
            </div>
        </div>
        <a href="/">
            <div class="logo"></div>
        </a>
    </div>
@endsection
