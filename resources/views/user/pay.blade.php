@extends('user/layouts.app')
@section('content')
    <div class="frame">
        <div class="content-wraper">
            <div class="group-content-pay">
                <form action="/thanhtoan" method="post">
                    @csrf
                    <div class="khung-1-to">
                        <div class="box-sotienthanhtoan">
                            <div class="title-box">Số tiền thanh toán</div>
                            <input class="input-sotienthanhtoan" value="{{ $tongtien }}" name="tongtien" readonly>
                            <input type="hidden" value="{{ $loaive }}" name="loaive">
                        </div>
                        <div class="box-sove">
                            <div class="title-box">Số lượng vé</div>
                            <div class="group-sove">
                                <input class="input-sove" value="{{ $sove }}" name="sove" readonly>
                                <div class="text-ve">vé</div>
                            </div>
                        </div>
                        <div class="box-ngaysudung">
                            <div class="title-box">Ngày sử dụng</div>
                            <p> Ngay su dung: {{ $ngaysudung }}</p>
                            <input class="input-pay-ngaysudung" value='{{ $ngaysudung }}' name="ngaysudung" readonly>
                        </div>
                        <div class="box-thongtinlienhe">
                            <div class="title-box">Thông tin liên hệ</div>
                            <input class="input-thongtinlienhe" value='{{ $hoten }}' name="hoten" readonly>
                        </div>
                        <div class="box-dienthoai">
                            <div class="title-box">Điện thoại</div>
                            <input class="input-pay-dienthoai" value='{{ $sdt }}' name="sdt" readonly>
                        </div>
                        <div class="box-email">
                            <div class="title-box">Email</div>
                            <input class="input-pay-email" value='{{ $email }}' name="email" readonly>
                        </div>
                    </div>
                    <div class="khung-3-to">
                        <div class="group-information-pay">
                            <div class="box-sothe">
                                <div class="title-box">Số thẻ</div>
                                <input class="input-sothe-hoten" maxlength="16" name="sothe">
                            </div>
                            <div class="box-hotenchuthe">
                                <div class="title-box">Họ tên chủ thẻ</div>
                                <input class="input-sothe-hoten" style="text-transform:uppercase" name="hotenchuthe">
                            </div>
                            <div class="box-ngayhethan">
                                <div class="title-box">Ngày hết hạn</div>
                                <date-picker format="DD/MM/YYYY" class="input-ngayhethan"></date-picker>
                                <input type='text' style='display:none' id='input-date' name="ngayhethan">
                                <button type="button" class="btn-date" style="top: 37px;left: 350px;"></button>
                            </div>
                            <div class="box-cvc">
                                <div class="title-box">CVV/CVC</div>
                                <input class="input-cvc" type="password" maxlength="4" name="cvv">
                            </div>
                        </div>
                        <button type="submit" class="btn-thanhtoan"></button>
                    </div>
                    <div class="khung-2-to"></div>

                    {{-- Thông báo lỗi --}}
                    {{-- @if ($errors->any())
                        <div class="alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                </form>
                @if ($error != null || $errors->any())
                    <div class="popup-thongbao active">
                        <a onclick="closepopup()" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <div class="bg-thongbao"></div>
                        <div class="thongbao">
                            <img src="{{ asset('assets/images/thongbaoloi.png') }}">
                        </div>
                    </div>
                @endif
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
    <script>
        function closepopup() {
            var popup = document.querySelector('.popup-thongbao');
            popup.className = popup.className.replace(' active', '');
        }
    </script>
    <script src="{{ asset('assets/js/date-picker.js') }}"></script>
@endsection
