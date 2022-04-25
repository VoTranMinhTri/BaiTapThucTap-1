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
                    <h4 class="page-title">Quản lý vé</h4>
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
                            {{-- <a href="#"><button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-plus-circle"></i> THÊM VÉ
                                </button><a>
                                    <hr> --}}
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Id vé</th>
                                            <th>Loại vé</th>
                                            <th class='thNormal'>Hình ảnh mã QR</th>
                                            <th>Ngày sử dụng</th>
                                            <th>Họ tên khách hàng</th>
                                            <th>SĐT khách hàng</th>
                                            <th>Email khách hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($ve as $tp)
                                            <tr>
                                                <td><?php echo ++$i ?></td>
                                                <td>{{ $tp->idve }}</td>
                                                <td>{{ $tp->ten_loai_ve }}</td>
                                                <td><img src="{{ asset('assets/images/'.$tp->hinh_anh_ma_qr) }}"
                                                        class="no-text"></td>
                                                <td>{{ $tp->ngay_su_dung }}</td>
                                                <td>{{ $tp->ho_ten }}</td>
                                                <td>{{ $tp->sdt }}</td>
                                                <td>{{ $tp->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Id vé</th>
                                            <th>Loại vé</th>
                                            <th class='thNormal'>Hình ảnh mã QR</th>
                                            <th>Ngày sử dụng</th>
                                            <th>Họ tên khách hàng</th>
                                            <th>SĐT khách hàng</th>
                                            <th>Email khách hàng</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
@endsection
