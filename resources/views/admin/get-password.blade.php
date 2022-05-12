<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" type="text/css">
    <link href="{{ asset('assets/admin/dist/css/style.min.css') }}" rel="stylesheet">
</head>

<body class="bg">
    <div class="main">
        <div class="box" style="border-radius: 32px">
            <h1 class="title-dangnhap"><img class="img-logodangnhap" src="{{ asset('assets/images/damsen-logo.png') }}">
            </h1>
            <h1 class="title-dangnhap">Lấy lại mật khẩu</h1>
            <form class="form-dangnhap" method="post" action="/getpassword">
                @csrf
                <input placeholder="Tên đăng nhập" class="input-normal" name="username" type="text">
                @if ($errors->has('error'))
                    <div style="margin-bottom: 2%;margin-left: 13%; color:red">
                        <span>{{ $errors->first('error') }}</span>
                    </div>
                @endif
                <div style="position: relative;text-align:center"><a href="/login">Quay lại trang đăng nhập</a></div>
                <button type="submit" class="btn-dangnhap" style="margin-top: 3%">Gửi yêu cầu</button>
            </form>
        </div>
    </div>
    {{-- Thông báo kết quả --}}
    @if (Session::has('thongbao'))
        <div class="popup-thongbao active" style="left: 37%;top:30%">
            <a onclick="closepopup()" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <div class="bg-thongbao"></div>
            <div class="thongbao">
                <div class="thongbaoketqua" style="height: unset">
                    <h3 style="text-align: center;color:red;margin-top:5px;">Thông báo</h3>
                    <p>{{ Session::get('thongbao') }}</p>
                </div>
            </div>
        </div>
    @endif
    {{-- Thông báo của validate --}}
    @if ($errors->any())
        <div class="popup-thongbao active" style="left: 37%;top:30%">
            <a onclick="closepopup()" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <div class="bg-thongbao"></div>
            <div class="thongbao">
                <div class="thongbaoketqua" style="height: unset">
                    <h3 style="text-align: center;color:red;margin-top:5px;">Thông báo</h3>
                    @foreach ($errors->all() as $error)
                        <p style="position: unset">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</body>
<script>
    function togglepass() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function closepopup() {
        var popup = document.querySelector('.popup-thongbao');
        popup.className = popup.className.replace(' active', '');
        var bo = document.querySelector('body');
        bo.className = bo.className.replace('hidden-y', '');
    }
</script>

</html>
