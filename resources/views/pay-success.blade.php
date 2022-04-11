@extends('layouts.app')
@section('content')
    <div class="frame">
        <div class="content-wraper">
            <div class="khungchuave">
                <div class="list-ve">
                    <div class="owl-stage-outer" data-box-id='boxscroll'>
                        <div class="owl-stage">
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/maqr.png') }}" class="maqr">
                                    <div class="idve">ALT20210501</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: 31/05/2021</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/maqr.png') }}" class="maqr">
                                    <div class="idve">ALT20210501</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: 31/05/2021</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/maqr.png') }}" class="maqr">
                                    <div class="idve">ALT20210501</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: 31/05/2021</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/maqr.png') }}" class="maqr">
                                    <div class="idve">ALT20210501</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: 31/05/2021</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/maqr.png') }}" class="maqr">
                                    <div class="idve">ALT20210501</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: 31/05/2021</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" role="presentation" class="previous-btn disabled"></button>
                <button type="button" role="presentation" class="next-btn"></button>
                <div class="text-soluongve">Số lượng: 5 vé</div>
                <div class="text-trang">Trang 1/3</div>
                <img src="{{ asset('assets/images/alvin.png') }}" class="alvin-picture">
            </div>
            <button class="btn-taive"></button>
            <button class="btn-guiemail"></button>
        </div>
        <img src="{{ asset('assets/images/thanhtoanthanhcong-text.png') }}" class="thanhtoanthanhcong-text">
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
    <script src="{{ asset('assets/js/pay-success.js') }}"></script>
@endsection
