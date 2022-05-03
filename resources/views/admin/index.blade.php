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
                    <h4 class="page-title">Bảng điều khiển</h4>
                    {{-- <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
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
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <a href="/dashboard">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Bảng điều khiển</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <a href="/eventadmin">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-star-circle"></i></h1>
                                <h6 class="text-white">Sự kiện</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <a onclick="eventclick()" style="cursor: pointer;">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-ticket"></i></h1>
                                <h6 class="text-white">Vé</h6>
                            </div>
                        </a>
                    </div>
                </div>
                @if (Auth::user()->loai_tai_khoan_id == 1)
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a onclick="accountclick()" style="cursor: pointer;">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-outline"></i></h1>
                                    <h6 class="text-white">Tài khoản</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                @endif
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Phân tích</h4>
                                    <h5 class="card-subtitle">Tổng quan về doanh thu năm {{ date("Y") }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fas fa-ticket-alt mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $tongve }}</h5>
                                                <small class="font-light">Tổng số vé</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="far fa-star mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $tongsukien }}</h5>
                                                <small class="font-light">Tổng sự kiện</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="far fa-money-bill-alt mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ number_format($tongdoanhthu, 0) }}</h5>
                                                <small class="font-light">
                                                    Tổng doanh thu trong năm {{ date("Y") }}</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        function eventclick() {
            var tabticket = document.querySelector('.tabticket');
            tabticket.click();
        }

        function accountclick() {
            var tabaccount = document.querySelector('.tabaccount');
            tabaccount.click();
        }
        $(function() {
            // we use an inline data source in the example, usually data would
            // be fetched from a server
            // ==============================================================
            // Real Time Visits
            // ==============================================================
            var data = [5, 10, 15, 20, 15, 30, 40],
                totalPoints = 100;

            function getRandomData() {
                if (data.length > 0) data = data.slice(1);
                // Do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 10,
                        y = prev + Math.random() * 10 - 5;
                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    data.push(y);
                }
                // Zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }
                return res;
            }
            // Set up the control widget
            var updateInterval = 1000;
            $("#updateInterval").val(updateInterval).change(function() {
                var v = $(this).val();
                if (v && !isNaN(+v)) {
                    updateInterval = +v;
                    if (updateInterval < 1) {
                        updateInterval = 1;
                    } else if (updateInterval > 1000) {
                        updateInterval = 1000;
                    }
                    $(this).val("" + updateInterval);
                }
            });
            var plot = $.plot("#real-time", [getRandomData()], {
                series: {
                    shadowSize: 1, // Drawing is faster without shadows
                    lines: {
                        fill: true,
                        fillColor: 'transparent'
                    },
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    show: true
                },
                xaxis: {
                    show: false
                },
                colors: ["#488c13"],
                grid: {
                    color: "#AFAFAF",
                    hoverable: true,
                    borderWidth: 0,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: "Visits: %x",
                    defaultTheme: false
                }
            });
            window.onresize = function(event) {
                $.plot($("#real-time"), [getRandomData()]);
            }

            function update() {
                plot.setData([getRandomData()]);
                // Since the axes don't change, we don't need to call plot.setupGrid()
                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();
            var offset = 0;
            plot1();

            function plot1() {
                var thang = 0;
                var doanhthutemp = <?php echo json_encode($doanhthutungthang); ?>;
                var doanhthucaonhat = doanhthutemp[0].doanhthu;
                doanhthutemp.forEach(element => {
                    if (element.doanhthu >= doanhthucaonhat) {
                        doanhthucaonhat = element.doanhthu;
                    }
                    thang++;
                });
                doanhthucaonhat = doanhthucaonhat + 100000;
                var temp = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                for (var i = 0; i < thang; i++) {
                    temp[i] = doanhthutemp[i].doanhthu;
                }
                var sin = [],
                    cos = [];
                for (var i = 0; i < 12; i += 1) {
                    sin.push([i + 1, temp[i]]);
                }
                var options = {
                    series: {
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    grid: {
                        hoverable: true //IMPORTANT! this is needed for tooltip to work
                    },
                    yaxis: {
                        min: 0,
                        max: doanhthucaonhat,
                    },
                    colors: ["#ee7951", "#4fb9f0"],
                    grid: {
                        color: "#AFAFAF",
                        hoverable: true,
                        borderWidth: 0,
                        backgroundColor: '#FFF'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "%s của tháng %x là %y VNĐ"
                    }
                };
                var plotObj = $.plot($("#flot-line-chart"), [{
                    data: sin,
                    label: "Doanh thu",
                }], options);
            }
        });
    </script>
@endsection
