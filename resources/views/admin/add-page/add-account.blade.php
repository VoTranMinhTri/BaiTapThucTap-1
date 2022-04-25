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
                    <h4 class="page-title">Thêm tài khoản</h4>
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
                            <a href="/accountadmin">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý tài khoản
                                </button>
                            </a>
                            <hr>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">TÀI KHOẢN MỚI</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Username<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="Username" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Password<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="Password" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Họ tên<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="Họ tên" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Ngày sinh<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="date"
                                                            style="height: 40px;" id=""
                                                            placeholder="Ngày sinh" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Địa chỉ<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="Địa chỉ" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">SĐT<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="SĐT" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Loại tài khoản <span style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            {{-- <option value="">Lựa chọn loại tài khoản</option> --}}
                                                            <option value="1">Admin</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary add-account-type"
                                                        style="width: 40px;">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center; margin-top: 20px">
                                        <button type="button" class="btn btn-primary">Thêm tài khoản</button>
                                    </div>
                                </div>
                            </form>
                            <div class="popup">
                                <div class="bg-popup"></div>
                                <div class="form-popup">
                                    <div class="row-popup">
                                        <strong>Thêm loại tài khoản</strong>
                                        <a href="javascript:">Đóng</a>
                                    </div>
                                    <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Tên loại tài khoản<span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="" type="text"
                                                                    style="height: 40px;" id=""
                                                                    placeholder="Tên loại tài khoản" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center; margin-top:20px">
                                                <button type="button" class="btn btn-primary">Thêm loại tài khoản</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
    <script>
        const a = this.document.querySelector('.add-account-type');
        const popup = this.document.querySelector('.popup');
        const html = this.document.querySelector('html');
        const btnclose = this.document.querySelector('.form-popup .row-popup a');

        //Hiển thị form thêm loại tài khoản
        a.onclick = function() {
            popup.className += " active";
            html.style = "overflow: hidden;";
        };

        //Đóng form
        btnclose.onclick = function() {
            popup.className = popup.className.replace(" active", "");
            html.style = "overflow: auto;";
        };
    </script>
@endsection
