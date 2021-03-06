<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" type="text/css">
</head>

<body class="bg">
    <div class="main">
        <div class="box">
            <h1 class="title-dangnhap"><img class="img-logodangnhap" src="{{ asset('assets/images/damsen-logo.png') }}">
            </h1>
            <h1 class="title-dangnhap">Đăng nhập</h1>
            <form class="form-dangnhap" method="post" action="/login">
                @csrf
                <input placeholder="Tên đăng nhập" class="input-normal" name="username" type="text">
                <input placeholder="Mật khẩu" class="input-normal" name="password" type="password" id="pass">
                @if ($errors->has('error'))
                    <div style="margin-bottom: 2%;margin-left: 13%; color:red">
                        <span>{{ $errors->first('error') }}</span>
                    </div>
                @endif
                <div class="check-box" style="display: inline">
                    <input type="checkbox" onclick="togglepass()">Hiển thị mật khẩu
                </div>
                <div style="position: relative;right: 16%; float: right;"><a href="/getpassword" style="text-decoration:none;color: #2962FF;">Quên mật khẩu ?</a></div>
                <button type="submit" class="btn-dangnhap" style="margin-top: 3%">Đăng nhập</button>
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
