@extends('user/layouts.app')
@section('content')
    <div class="frame">
        <div class="content-wraper">
            <img src="{{ asset('assets/images/content-bg.png') }}" width="100%" height="100%">
            <div class="khungchuave">
                <div class="list-ve">
                    <div class="owl-stage-outer" data-box-id='boxscroll'>
                        <div class="owl-stage">
                            @foreach ($dsve as $ve)
                            <div class="owl-item-ve">
                                <div class="box-ve">
                                    <img src="{{ asset('assets/images/'.$ve->hinh_anh_ma_qr) }}" class="maqr">
                                    <div class="idve">{{ $ve->idve }}</div>
                                    <div class="vecong">VÉ CỔNG</div>
                                    <div class="gach">---</div>
                                    <div class="ngaysudung">Ngày sử dụng: {{ $ve->ngay_su_dung }}</div>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="tick">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="button" role="presentation" class="previous-btn disabled" style="top:40%;left:3%"></button>
                <button type="button" role="presentation" class="next-btn" style="top:40%;right:3%"></button>
                <div class="text-soluongve">Số lượng: <?php echo count($dsve) ?></div>
                <div class="text-trang">Trang 1/
                <?php
                    if(count($dsve)<=4){
                        echo 1;
                    }
                    else{
                        echo(ceil(count($dsve)/4));
                    }
                 ?></div>
                <img src="{{ asset('assets/images/alvin.png') }}" class="alvin-picture">
            </div>
            <button class="btn-taive"></button>
            <button class="btn-guiemail"></button>
        </div>
        <img src="{{ asset('assets/images/thanhtoanthanhcong-text.png') }}" class="thanhtoanthanhcong-text">
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
                <div class="item"><a href="/">Trang chủ</a></div>
                <div class="item"><a href="/event" >Sự kiện</a></div>
                <div class="item"><a href="/contact">Liên hệ</a></div>
            </div>
        </div>
        <a href="/">
            <img class="logo" src="{{ asset('assets/images/logo.png') }}" style="width: 10%">
        </a>
    </div>
    <script src="{{ asset('assets/js/pay-success.js') }}"></script>
@endsection
