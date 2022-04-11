@extends('layouts.app')
@section('content')
    <div class="frame">
        <div class="content-wraper">
            <div class="main-contact">
                <div class="khung-lienhe-1">
                    <div class="text-contact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac
                        mollis
                        justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</div>
                    <form>
                        <div class="group-input-contact">
                            <div class="group-input-contact-inside-1">
                                <input type="text" class="input-contact-ten" placeholder="Tên">
                                <input type="text" class="input-contact-sdt" placeholder="Số điện thoại">
                            </div>
                            <div class="group-input-contact-inside-2">
                                <input type="text" class="input-contact-email" placeholder="Email">
                                <input type="text" class="input-contact-diachi" placeholder="Địa chỉ">
                            </div>
                        </div>
                        <textarea class="input-loinhan" placeholder="Lời nhắn"></textarea>
                        <button class="btn-guilienhe"></button>
                    </form>
                </div>
                <div class="khung-lienhe-2">
                    <img class="icon-address" src="{{ asset('assets/images/icon-address.png') }}">
                    <div class="text-khung-nho">
                        <div class="text-khung-nho-title">Địa chỉ:</div>
                        <div class="text-khung-nho-content">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                    </div>
                </div>
                <div class="khung-lienhe-3">
                    <img class="icon-address" src="{{ asset('assets/images/icon-mail.png') }}">
                    <div class="text-khung-nho">
                        <div class="text-khung-nho-title">Email:</div>
                        <div class="text-khung-nho-content" style="top:10%">investigate@your-site.com</div>
                    </div>
                </div>
                <div class="khung-lienhe-4">
                    <img class="icon-address" src="{{ asset('assets/images/icon-phone.png') }}">
                    <div class="text-khung-nho">
                        <div class="text-khung-nho-title">Điện thoại:</div>
                        <div class="text-khung-nho-content" style="top:10%">+84 145 689 798</div>
                    </div>
                </div>
                <img src="{{ asset('assets/images/alex.png') }}" class="alex-picture">
            </div>
        </div>
        <img src="{{ asset('assets/images/lienhe-text.png') }}" class="lienhe-text">
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
                <div class="item active"><a href="/contact" style="color: #FFFFFF">Liên hệ</a></div>
            </div>
        </div>
        <a href="/">
            <div class="logo"></div>
        </a>
    </div>
@endsection
