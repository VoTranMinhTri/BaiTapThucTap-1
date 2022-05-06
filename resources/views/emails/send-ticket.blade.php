<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vé Đầm Sen</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size:15px;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 5px;
        }

    </style>
</head>

<body>
    <h1 style="text-align: center; color:red">DANH SÁCH VÉ</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã vé</th>
                    <th>Loại vé</th>
                    <th>Hình ảnh mã QR</th>
                    <th>Ngày sử dụng</th>
                    <th>Họ tên khách hàng</th>
                    <th>SĐT khách hàng</th>
                    <th>Email khách hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($details as $tp)
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td>{{ $tp->idve }}</td>
                        <td>{{ $tp->ten_loai_ve }}</td>
                        <td><img src="{{ $message->embed(public_path('assets/images/'.$tp->hinh_anh_ma_qr)) }}" width="50px"></td>
                        <td>{{ $tp->ngay_su_dung }}</td>
                        <td>{{ $tp->ho_ten }}</td>
                        <td>{{ $tp->sdt }}</td>
                        <td>{{ $tp->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
