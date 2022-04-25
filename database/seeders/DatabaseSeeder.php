<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuKien;
use App\Models\NoiDungSuKien;
use App\Models\HinhAnhSuKien;
use App\Models\LoaiVe;
use App\Models\TheThanhToan;
use App\Models\LoaiTaiKhoan;
use App\Models\TaiKhoan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Sự kiện
        SuKien::create([
            'ten_su_kien' => 'Sự kiện 1',
            'dia_diem' => 'Đầm Sen Park',
            'hinh_anh' => 'sukien-1.png',
            'ngay_bat_dau' => '2022-04-13',
            'ngay_ket_thuc' => '2022-04-30',
            'gia' => 25000,
        ]);
        SuKien::create([
            'ten_su_kien' => 'Sự kiện 2',
            'dia_diem' => 'Đầm Sen Park',
            'hinh_anh' => 'sukien-2.png',
            'ngay_bat_dau' => '2022-04-13',
            'ngay_ket_thuc' => '2022-04-30',
            'gia' => 30000,
        ]);
        SuKien::create([
            'ten_su_kien' => 'Sự kiện 3',
            'dia_diem' => 'Đầm Sen Park',
            'hinh_anh' => 'sukien-3.png',
            'ngay_bat_dau' => '2022-04-13',
            'ngay_ket_thuc' => '2022-04-30',
            'gia' => 35000,
        ]);
        SuKien::create([
            'ten_su_kien' => 'Sự kiện 4',
            'dia_diem' => 'Đầm Sen Park',
            'hinh_anh' => 'sukien-4.png',
            'ngay_bat_dau' => '2022-04-13',
            'ngay_ket_thuc' => '2022-04-30',
            'gia' => 40000,
        ]);
        SuKien::create([
            'ten_su_kien' => 'Sự kiện 5',
            'dia_diem' => 'Đầm Sen Park',
            'hinh_anh' => 'sukien-1.png',
            'ngay_bat_dau' => '2022-04-13',
            'ngay_ket_thuc' => '2022-04-30',
            'gia' => 45000,
        ]);

        //Nội dung sự kiện
        NoiDungSuKien::create([
            'su_kien_id' => 1,
            'noi_dung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 1,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 1,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);

        NoiDungSuKien::create([
            'su_kien_id' => 2,
            'noi_dung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 2,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 2,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);

        NoiDungSuKien::create([
            'su_kien_id' => 3,
            'noi_dung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 3,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 3,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);

        NoiDungSuKien::create([
            'su_kien_id' => 4,
            'noi_dung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 4,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 4,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);

        NoiDungSuKien::create([
            'su_kien_id' => 5,
            'noi_dung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 5,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);
        NoiDungSuKien::create([
            'su_kien_id' => 5,
            'noi_dung' => "Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,",
        ]);

        //Hình ảnh sự kiện
        HinhAnhSuKien::create([
            'su_kien_id' => 1,
            'hinh_anh' => "ed1.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 1,
            'hinh_anh' => "ed2.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 1,
            'hinh_anh' => "ed2.png",
        ]);

        HinhAnhSuKien::create([
            'su_kien_id' => 2,
            'hinh_anh' => "ed1.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 2,
            'hinh_anh' => "ed2.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 2,
            'hinh_anh' => "ed2.png",
        ]);

        HinhAnhSuKien::create([
            'su_kien_id' => 3,
            'hinh_anh' => "ed1.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 3,
            'hinh_anh' => "ed2.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 3,
            'hinh_anh' => "ed2.png",
        ]);

        HinhAnhSuKien::create([
            'su_kien_id' => 4,
            'hinh_anh' => "ed1.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 4,
            'hinh_anh' => "ed2.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 4,
            'hinh_anh' => "ed2.png",
        ]);

        HinhAnhSuKien::create([
            'su_kien_id' => 5,
            'hinh_anh' => "ed1.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 5,
            'hinh_anh' => "ed2.png",
        ]);
        HinhAnhSuKien::create([
            'su_kien_id' => 5,
            'hinh_anh' => "ed2.png",
        ]);

        //Loại vé
        LoaiVe::create([
            'ten_loai_ve' => 'Vé cơ bản',
            'gia' => 80000,
        ]);
        LoaiVe::create([
            'ten_loai_ve' => 'Vé trọn gói',
            'gia' => 100000,
        ]);

        //Thẻ thanh toán
        TheThanhToan::create([
            'id' => '3641451343697895',
            'ho_ten' => 'VO TRAN MINH TRI',
            'ngay_het_han' => '2023-01-01',
            'cvv_cvc' => '1234',
        ]);

        //Loại tài khoản
        LoaiTaiKhoan::create([
            'ten_loai_tai_khoan' => 'Admin',
        ]);

        //Tài khoản
        TaiKhoan::create([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'loai_tai_khoan_id' => 1,
            'ho_ten' => 'Nguyễn Văn Test',
            'ngay_sinh' => '2000-01-01',
            'dia_chi' => '111 Lũy Bán Bích, Hồ Chí Minh',
            'sdt' => '0123456789',
        ]);

    }
}
