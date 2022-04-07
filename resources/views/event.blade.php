<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>

<body class="home bg">
    <div class="main">
        <div class="frame">
            <div class="content-wraper">
                <img class="sukiennoibat-text" src="{{ asset('assets/images/sukiennoibat-text.png') }}">
                <img class="hoagiay-1" src="{{ asset('assets/images/hoagiay-1.png') }}">
                <div class="list-news">
                    <div class="owl-stage-outer" data-box-id='boxscroll'>
                        <div class="owl-stage">
                            <div class="owl-item">
                                <img class="image-event" src="{{ asset('assets/images/sukien-1.png') }}">
                                <div class="inside-event-box">
                                    <div class="title-date-event">
                                        <div class="title-event">
                                            <div class="title-event-main">Sự kiện 1</div>
                                            <div class="title-event-secondary">Đầm sen Park</div>
                                        </div>
                                        <div class="date-event">
                                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                                        </div>
                                    </div>
                                    <div class="price-event">25.000 VNĐ</div>
                                    <a href="/event-detail" class="btn-xemchitiet"></a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <img class="image-event" src="{{ asset('assets/images/sukien-1.png') }}">
                                <div class="inside-event-box">
                                    <div class="title-date-event">
                                        <div class="title-event">
                                            <div class="title-event-main">Sự kiện 1</div>
                                            <div class="title-event-secondary">Đầm sen Park</div>
                                        </div>
                                        <div class="date-event">
                                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                                        </div>
                                    </div>
                                    <div class="price-event">25.000 VNĐ</div>
                                    <a href="#" class="btn-xemchitiet"></a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <img class="image-event" src="{{ asset('assets/images/sukien-1.png') }}">
                                <div class="inside-event-box">
                                    <div class="title-date-event">
                                        <div class="title-event">
                                            <div class="title-event-main">Sự kiện 1</div>
                                            <div class="title-event-secondary">Đầm sen Park</div>
                                        </div>
                                        <div class="date-event">
                                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                                        </div>
                                    </div>
                                    <div class="price-event">25.000 VNĐ</div>
                                    <a href="#" class="btn-xemchitiet"></a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <img class="image-event" src="{{ asset('assets/images/sukien-1.png') }}">
                                <div class="inside-event-box">
                                    <div class="title-date-event">
                                        <div class="title-event">
                                            <div class="title-event-main">Sự kiện 1</div>
                                            <div class="title-event-secondary">Đầm sen Park</div>
                                        </div>
                                        <div class="date-event">
                                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                                        </div>
                                    </div>
                                    <div class="price-event">25.000 VNĐ</div>
                                    <a href="#" class="btn-xemchitiet"></a>
                                </div>
                            </div>
                            {{-- <div class="owl-item">
                                <img class="image-event" src="{{ asset('assets/images/sukien-1.png') }}">
                                <div class="inside-event-box">
                                    <div class="title-date-event">
                                        <div class="title-event">
                                            <div class="title-event-main">Sự kiện 1</div>
                                            <div class="title-event-secondary">Đầm sen Park</div>
                                        </div>
                                        <div class="date-event">
                                            <img class="icon-calendar" src="{{ asset('assets/images/icon-calendar.png') }}">
                                            <div class="text-date">30/05/2021 - 01/06/2021</div>
                                        </div>
                                    </div>
                                    <div class="price-event">25.000 VNĐ</div>
                                    <a href="#" class="btn-xemchitiet"></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <button type="button" role="presentation" class="previous-btn disabled"></button>
                <button type="button" role="presentation" class="next-btn"></button>
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
                    <div class="item"><a href="#">Liên hệ</a></div>
                </div>
            </div>
            <a href="/">
                <div class="logo"></div>
            </a>
        </div>
    </div>
    <script src="{{ asset('assets/js/event.js') }}"></script>
</body>

</html>
