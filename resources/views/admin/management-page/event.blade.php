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
                    <h4 class="page-title">Quản lý sự kiện</h4>
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
                            <a href="/add-event"><button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-plus-circle"></i> THÊM SỰ KIỆN
                                </button><a>
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sự kiện</th>
                                                    <th>Địa điểm</th>
                                                    <th class='thNormal'>Hình ảnh</th>
                                                    <th>Ngày bắt đầu</th>
                                                    <th>Ngày kết thúc</th>
                                                    <th>Giá</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0 ?>
                                                @foreach ($sukien as $tp)
                                                    <tr>
                                                        <td><?php echo ++$i ?></td>
                                                        <td>{{ $tp->ten_su_kien }}</td>
                                                        <td>{{ $tp->dia_diem }}</td>
                                                        <td><img src="{{ asset('storage/images/'.$tp->hinh_anh) }}" style="width: 70%; height:160px"
                                                                class="no-text"></td>
                                                        <td>{{ $tp->ngay_bat_dau }}</td>
                                                        <td>{{ $tp->ngay_ket_thuc }}</td>
                                                        <td>{{ number_format($tp->gia,0) }} VNĐ</td>
                                                        <td>
                                                            <a href="{{ route('suKien.edit', ['suKien'=> $tp]) }}"><button type="button"
                                                                    class="btn btn-outline-secondary"
                                                                    title="Chỉnh sửa thông tin sự kiện"><i
                                                                        class="far fa-edit"></i></button></a>
                                                            <button type="button" class="btn btn-outline-danger"
                                                                title="Xóa sự kiện"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sự kiện</th>
                                                    <th>Địa điểm</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Ngày bắt đầu</th>
                                                    <th>Ngày kết thúc</th>
                                                    <th>Giá</th>
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
