@extends('user/layouts.app')
@section('content')
    <div>
        <div class="content-wraper">
            <img src="{{ asset('assets/images/content-bg.png') }}" width="100%" height="100%">
            <img class="khinhkhicau-1" src="{{ asset('assets/images/khinhkhicau-1.png') }}" width="5%">
            <img class="khinhkhicau-2" src="{{ asset('assets/images/khinhkhicau-2.png') }}" width="7%">
            <img class="khinhkhicau-3" src="{{ asset('assets/images/khinhkhicau-3.png') }}" width="9%">
            <img class="khinhkhicau-4" src="{{ asset('assets/images/khinhkhicau-4.png') }}" width="5%">
            <img class="khinhkhicau-5" src="{{ asset('assets/images/khinhkhicau-5.png') }}" width="7%">
            <img class="khinhkhicau-6" src="{{ asset('assets/images/khinhkhicau-6.png') }}" width="7%">
            <img class="hinhanh4nhanvat" src="{{ asset('assets/images/hinhanh4nhanvat.png') }}" width="35%">
            <img class="damsen-logo" src="{{ asset('assets/images/damsen-logo.png') }}" width="8%">
            <img class="tb-1" src="{{ asset('assets/images/damsen-text-1.png') }}" width="15%">
            <img class="tb-2" src="{{ asset('assets/images/park-text-1.png') }}" width="10%">

            <div class="group-content">
                <img class="khung-1" src="{{ asset('assets/images/khung-1.png') }}" height="100%">
                <img class="khung-3" src="{{ asset('assets/images/khung-3.png') }}" height="100%">
                <img class="khung-2" src="{{ asset('assets/images/khung-2.png') }}" height="97%">
                <img class="vecuaban" src="{{ asset('assets/images/vecuaban.png') }}" width="20%">
                <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac
                    mollis
                    justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. Suspendisse iaculis
                    libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus
                    consequat
                    a.</p>
                <div class="text-item1">
                    <img class="star" src="{{ asset('assets/images/star.png') }}" width="5%">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text-item2">
                    <img class="star" src="{{ asset('assets/images/star.png') }}" width="5%">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text-item3">
                    <img class="star" src="{{ asset('assets/images/star.png') }}" width="5%">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text-item4">
                    <img class="star" src="{{ asset('assets/images/star.png') }}" width="5%">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <form class="form-datve" action="/datve" method="get">
                    <div class="dropdown">
                        <input type="text" class="textbox" placeholder="Lựa chọn loại vé" readonly>
                        <input name="loaive" type="text" class="idve" style="display: none">
                        <div class="option">
                            @foreach ($loaive as $loai)
                                <div onclick="show('{{ $loai->ten_loai_ve }}','{{ $loai->id }}')">
                                    {{ $loai->ten_loai_ve }}</div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-dropdown"></button>
                    <input name="sove" class="input-soluongve" type="number" placeholder="Số lượng vé" min='1'>
                    {{-- <input class="input-ngaysudung" type="date" placeholder="Ngày sử dụng"> --}}
                    <date-picker format="DD/MM/YYYY" class="input-ngaysudung"></date-picker>
                    <input type='text' style='display:none' id='input-date' name="ngaysudung">
                    <button type="button" class="btn-date" title="Ngày sử dụng"></button>
                    <input name="hoten" class="input-hoten" type="text" placeholder="Họ và tên">
                    <input name="sdt" class="input-sdt" type="text" placeholder="Số điện thoại">
                    <input name="email" class="input-email" type="email" placeholder="Địa chỉ email">
                    <button type="submit" class="btn-datve"></button>

                    {{-- Thông báo lỗi --}}
                    @if ($errors->any())
                        <div class="alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
            <img class="lisa-picture" src="{{ asset('assets/images/lisa.png') }}" width="15%">
        </div>
    </div>
    <div class="navigation">
        <img class="navigation-bg" src="{{ asset('assets/images/navigation-bg.png') }}" style="width: 100vw; height: 15vh;">
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
                <div class="item active"><a href="/" style="color: #FFFFFF">Trang chủ</a></div>
                <div class="item"><a href="/event">Sự kiện</a></div>
                <div class="item"><a href="/contact">Liên hệ</a></div>
            </div>
        </div>
        <a href="/">
            <img class="logo" src="{{ asset('assets/images/logo.png') }}" style="width: 10%">
        </a>
    </div>

    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/date-picker.js') }}"></script>
@endsection
