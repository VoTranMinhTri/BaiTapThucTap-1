@extends('admin.layouts.app-admin')
@section('content')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Cập nhật sự kiện</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="/eventadmin">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý sự kiện
                                </button>
                            </a>
                            <hr>
                            <form
                                action="{{ route('suKien.update', ['suKien' => $suKien]) }}"
                                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">THÔNG TIN SỰ KIỆN</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-12">Tên sự kiện <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="tensukien" type="text"
                                                            style="height: 40px;" id="" placeholder="Tên sự kiện"
                                                            value="{{ $suKien->ten_su_kien }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-12">Địa điểm <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="diadiem" type="text"
                                                            style="height: 40px;" id="" placeholder="Địa điểm"
                                                            value="{{ $suKien->dia_diem }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-12">Ngày bắt đầu <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="ngaybatdau" type="date"
                                                            style="height: 40px;" id="" placeholder="Ngày bắt đầu"
                                                            value="{{ $suKien->ngay_bat_dau }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-12">Ngày kết thúc <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="ngayketthuc" type="date"
                                                            style="height: 40px;" id="" placeholder="Ngày kết thúc"
                                                            value="{{ $suKien->ngay_ket_thuc }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Giá <span
                                                            style="color:red">*</span></label>
                                                    <div>
                                                        <input class="form-control" name="gia" type="number"
                                                            style="height: 40px; width: 95%; float: left;" placeholder="0"
                                                            value="{{ $suKien->gia }}" min='0' required>
                                                        <div
                                                            style="background-color: #ebebeb;padding: 8.5px;text-align: center;border-radius: 3px;border: 1px solid #ccc;">
                                                            đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">MÔ TẢ</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>Hình ảnh</label>
                                                                <div class="col-sm-11 image-profile" align="center">
                                                                    <img class="profile-pic anhdaidien"
                                                                        src="{{ asset('storage/images/' . $suKien->hinh_anh) }}"
                                                                        name="filed">
                                                                    <div class="upload-herf cursor" id="anhdaidien"
                                                                        onclick="uploadpic(this.id)">Đổi hình ảnh</div>
                                                                    <input class="file-upload anhdaidien"
                                                                        name="hinhanhsukien" type="file"
                                                                        accept="image/x-png,image/gif,image/jpeg"
                                                                        id="store_logo"
                                                                        data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                                    <input hidden="hidden" name="old_logo" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">CHI TIẾT SỰ KIỆN</h4>
                                        <div class="event-detail-main">
                                            <img src="{{ asset('assets/images/event-detail-main.png') }}"
                                                class="bg-event-detail">
                                            <div class="evd-box-1">
                                                <div class="col-sm-12 image-profile" align="center">
                                                    <img class="profile-pic pic1"
                                                        src="{{ asset('storage/images/' . $hinhAnhSuKien[0]->hinh_anh) }}"
                                                        name="filed" style="width: 90%;height:280px">
                                                    <div class="upload-herf cursor" id="pic1" onclick="uploadpic(this.id)">
                                                        Đổi hình ảnh</div>
                                                    <input class="file-upload pic1" name="hinhanhsukien1" type="file"
                                                        accept="image/x-png,image/gif,image/jpeg" id="store_logo"
                                                        data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                    <input hidden="hidden" name="old_logo" value="">
                                                </div>
                                                <div class="info">
                                                    <div class="date">
                                                        <img class="icon-calendar"
                                                            src="{{ asset('assets/images/icon-calendar.png') }}">
                                                        <div class="text-date">{{ $suKien->ngay_bat_dau }} -
                                                            {{ $suKien->ngay_ket_thuc }}</div>
                                                    </div>
                                                    <div class="title-event-secondary">Đầm Sen Park</div>
                                                    <div class="price-event">{{ number_format($suKien->gia, 0) }} VNĐ
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="evd-box-2">
                                                <div class="col-sm-12 image-profile" align="center">
                                                    <img class="profile-pic pic2"
                                                        src="{{ asset('storage/images/' . $hinhAnhSuKien[1]->hinh_anh) }}"
                                                        name="filed" style="width: 100%">
                                                    <div class="upload-herf cursor" id="pic2" onclick="uploadpic(this.id)">
                                                        Đổi hình ảnh</div>
                                                    <input class="file-upload pic2" name="hinhanhsukien2" type="file"
                                                        accept="image/x-png,image/gif,image/jpeg" id="store_logo"
                                                        data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                    <input hidden="hidden" name="old_logo" value="">
                                                </div>
                                                <div class="event-detail-text">
                                                    <textarea name="noidung2">{{ $noiDungSuKien[1]->noi_dung }}</textarea>
                                                </div>
                                            </div>
                                            <div class="evd-box-3">
                                                <div class="event-detail-text">
                                                    <textarea name="noidung3">{{ $noiDungSuKien[2]->noi_dung }}</textarea>
                                                </div>
                                                <div class="col-sm-12 image-profile" align="center" style="margin-top: 5px">
                                                    <img class="profile-pic pic3"
                                                        src="{{ asset('storage/images/' . $hinhAnhSuKien[2]->hinh_anh) }}"
                                                        name="filed" style="width: 100%">
                                                    <div class="upload-herf cursor" id="pic3" onclick="uploadpic(this.id)">
                                                        Đổi hình ảnh</div>
                                                    <input class="file-upload pic3" name="hinhanhsukien3" type="file"
                                                        accept="image/x-png,image/gif,image/jpeg" id="store_logo"
                                                        data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                    <input hidden="hidden" name="old_logo" value="">
                                                </div>
                                            </div>
                                            <div class="evd-box-4">
                                                <div class="event-detail-text">
                                                    <textarea name="noidung1" style="height: 410px">{{ $noiDungSuKien[0]->noi_dung }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center; margin-top:20px">
                                        <button type="submit" class="btn btn-primary">Cập nhật sự kiện</button>
                                    </div>
                                </div>
                            </form>
                            @if (Session::has('thongbao'))
                                <div class="popup-thongbao active">
                                    <a onclick="closepopup()" class="close" data-dismiss="alert"
                                        aria-label="close">&times;</a>
                                    <div class="bg-thongbao"></div>
                                    <div class="thongbao">
                                        <div class="thongbaoketqua">
                                            <p>{{ Session::get('thongbao') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{-- <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a
                href="https://www.wrappixel.com">WrapPixel</a>.
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    {{-- <div class="col-sm-11 image-profile" align="center">
        <img class="profile-pic"
            src="{{ asset('assets/admin/images/damsen-logo.png') }}"
            name="filed">
        <div class="upload-herf cursor">Đổi hình ảnh</div>
        <input class="file-upload" name="store_logo"
            type="file"
            accept="image/x-png,image/gif,image/jpeg"
            id="store_logo"
            data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
        <input hidden="hidden" name="old_logo" value="">
    </div> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            var readURL = function(input, id) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.profile-pic '.id).attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            // $(".file-upload").on('change', function() {
            //     readURL(this);
            // });

            // $(".upload-herf").on('click', function() {
            //     $(".file-upload").click();
            // });

            $('.bootstrap-tagsinput input').keydown(function(event) {
                if (event.which == 13) {
                    $(this).blur();
                    $(this).focus();
                    return false;
                }
            })
        });



        var readURL = function(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic.' + id).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        };

        function uploadpic(id) {
            $(".file-upload." + id).click();

            $(".file-upload." + id).on('change', function() {
                readURL(this, id);
            });
        }

        $('.bootstrap-tagsinput input').keydown(function(event) {
            if (event.which == 13) {
                $(this).blur();
                $(this).focus();
                return false;
            }
        })
    </script>
    <script>
        function closepopup() {
            var popup = document.querySelector('.popup-thongbao');
            popup.className = popup.className.replace(' active', '');
            var bo = document.querySelector('body');
            bo.className = bo.className.replace('hidden-y', '');
        }
    </script>
@endsection
