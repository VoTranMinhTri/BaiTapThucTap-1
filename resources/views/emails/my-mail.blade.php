<!DOCTYPE html>
<html>
<head>
    <title>Khách hàng gửi liên hệ</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>Tên khách hàng: {{ $details['hoten'] }}</p>
    <p>Email khách hàng: {{ $details['email'] }}</p>
    <p>Số điện thoại khách hàng: {{ $details['sdt'] }}</p>
    <p>Địa chỉ khách hàng: {{ $details['diachi'] }}</p>
    <p>Lời nhắn: {{ $details['loinhan'] }}</p>
</body>
</html>
