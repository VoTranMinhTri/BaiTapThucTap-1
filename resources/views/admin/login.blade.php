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
            <img class="img-logodangnhap" src="{{ asset('assets/images/damsen-logo.png') }}">
            <h1 class="title-dangnhap">Đăng nhập</h1>
            <form class="form-dangnhap">
                <input placeholder="Tên đăng nhập" class="input-normal" name="username" type="text">
                <input placeholder="Mật khẩu" class="input-normal" name="password" type="password" id="pass">
                <div class="check-box">
                    <input type="checkbox" onclick="togglepass()">Hiển thị mật khẩu
                </div>
                <button type="submit" class="btn-dangnhap">Đăng nhập</button>
            </form>
        </div>
    </div>
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
</script>

</html>
