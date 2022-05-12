@extends('admin.layouts.app-admin')
@section('content')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Quản lý hóa đơn</h4>
                    {{-- <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div> --}}
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
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã hóa đơn</th>
                                                    <th>Họ tên khách hàng</th>
                                                    <th>SĐT khách hàng</th>
                                                    <th>Email khách hàng</th>
                                                    <th>Ngày lập</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                @foreach ($danhSachHoaDon as $tp)
                                                    <tr>
                                                        <td><?php echo ++$i; ?></td>
                                                        <td>{{ $tp->idhd }}</td>
                                                        <td>{{ $tp->ho_ten }}</td>
                                                        <td>{{ $tp->sdt }}</td>
                                                        <td>{{ $tp->email }}</td>
                                                        <td>{{ $tp->ngay_lap }}</td>
                                                        <td>
                                                            {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                            <a href="{{ route('detailbilladmin', ['id' => $tp->idhd]) }}"><button
                                                                    type="button" class="btn btn-outline-secondary"
                                                                    title="Xem chi tiết hóa đơn"><i
                                                                        class="fas fa-info"></i></button></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã hóa đơn</th>
                                                    <th>Họ tên khách hàng</th>
                                                    <th>SĐT khách hàng</th>
                                                    <th>Email khách hàng</th>
                                                    <th>Ngày lập</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="popup">
                                        <div class="bg-popup"></div>
                                        <div class="form-popup" style="width: 300px">
                                            <div class="row-popup">
                                                <h3>Xóa loại vé</h3>
                                            </div>
                                            <form method="post" action="#" id="formdelete">
                                                @csrf
                                                @method('DELETE')
                                                <strong style="display:block">Bạn có muốn xóa loại vé này không ?</strong>
                                                <p style="margin-top: 10px; text-align: center">
                                                    <button type="submit" class="btn btn-outline-danger">Có</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary formclose">Không</button>
                                                </p>

                                            </form>
                                        </div>
                                    </div>
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

    <script>
        const popup = this.document.querySelector('.popup');
        const html = this.document.querySelector('html');
        const btnclose = this.document.querySelector('.formclose');

        //Hiển thị
        function confirm($url) {
            popup.className += " active";
            html.style = "overflow: hidden;";
            $('#formdelete').attr('action', $url);
        };

        //Đóng form
        btnclose.onclick = function() {
            popup.className = popup.className.replace(" active", "");
            html.style = "overflow: auto;";
        };

        //Đóng thông báo kết quả
        function closepopup() {
            var popup = document.querySelector('.popup-thongbao');
            popup.className = popup.className.replace(' active', '');
            var bo = document.querySelector('body');
            bo.className = bo.className.replace('hidden-y', '');
        }
    </script>
@endsection
