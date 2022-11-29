@extends('admin.layout')

@section('dashboard-selected')
selected
@endsection

@section('dashboard-link-active')
active
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
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
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <!-- Semua data disini di filter khusus hari ini saja kecuali yang total order pake all time -->
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Customers</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <!-- Total income pake total nominal order semua orderan hari ini -->
                        <div>
                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup>18,306</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Income</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Order</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Order</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Today Order(s) Report</h4>
                <!-- Filter buat hari ini saja -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-13 col-xlg-2">
                        <div class="card m-0 card-hover">
                            <div class="p-2 br-18 bg-danger text-center">
                                <h1 class="font-light text-white">2,064</h1>
                                <h6 class="text-white">Order Pending</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-13 col-xlg-2">
                        <div class="card m-0 card-hover">
                            <div class="p-2 br-18 bg-primary text-center">
                                <h1 class="font-light text-white">1,738</h1>
                                <h6 class="text-white">Paid</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-13 col-xlg-2">
                        <div class="card m-0 card-hover">
                            <div class="p-2 br-18 bg-cyan text-center">
                                <h1 class="font-light text-white">1100</h1>
                                <h6 class="text-white">Delivered</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-13 col-xlg-2">
                        <div class="card m-0 card-hover">
                            <div class="p-2 br-18 bg-success text-center">
                                <h1 class="font-light text-white">964</h1>
                                <h6 class="text-white">Success</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-13 col-xlg-2">
                        <div class="card m-0 card-hover">
                            <div class="p-2 br-18 bg-dark text-center">
                                <h1 class="font-light text-white">964</h1>
                                <h6 class="text-white">Refund</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- DIbuat sama kaya yang di order analytics (seminggu / 7 hari terakhir aja) -->
            <div class="card-body">
                <h4 class="card-title">Number of Orders</h4>
                <ul class="list-inline text-right">
                    <li class="list-inline-item">
                        <h5><i class="fa fa-circle mr-1 text-purple"></i>New Orders</h5>
                    </li>
                </ul>
                <div id="number-of-order"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- 5 orderan terakhir all time nggak harus hari ini -->
                <h4 class="card-title mb-4">Latest Order</h4>
                <div class="row">
                    <div class="col pt-0 pb-0 pr-4 pl-4">
                        <ul class="list-unstyled mb-5">
                            @for ($i = 0; $i < 5; $i++)
                            <li>
                                <div class="w-100 card custom-border my-3">
                                    <div class="card-header bg-danger d-flex justify-content-between flex-column">
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-white">Customer Name</p>
                                            <p class="m-0 text-white">Order Pending</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0 text-white">Trans ID</h6>
                                            <h6 class="m-0 text-white">30/10/2022</h6>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center" style="gap: 18px;">
                                        <a href="{{url('/orderdet')}}" class="w-100 a-normal">
                                            <div class="card-body p-0">
                                                <ul class="list-unstyled">
                                                    <li class="media align-items-center">
                                                        <img class="d-flex mr-3 br-18" src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58.jpeg" width="60" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-1"><b>Cute Tiger Aroma Stone Set”</b></h5> 
                                                            <h6 class="m-0">Color: white</h6>
                                                            <h6 class="m-0">$10</h6>
                                                        </div>
                                                        <p class="m-0">x3</p>
                                                    </li>
                                                </ul>
                                                <h6 class="text-right mt-1">+ 3 other products</h6>
                                                <div class="divider-dash"></div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="m-0"><b>Total Payment using Atome</b></p>
                                                    <p class="m-0"><b>$30</b></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary text-white pr-4 pl-4" href="#">See More</a> <!-- ke halaman manage order -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection

@section('javascript-extra')
<script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/libs/morris.js/morris.min.js')}}"></script>
<script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
<script>
    $(function() {
        "use strict";
        Morris.Area({
            element: 'number-of-order',
            data: [{
                    period: '2022-04-12',
                    order: 50,
                    itouch: 20
                }, {
                    period: '2022-04-13',
                    order: 10,
                    itouch: 80
                }, {
                    period: '2022-04-14',
                    order: 20,
                    itouch: 70
                }, {
                    period: '2022-04-15',
                    order: 25,
                    itouch: 140
                }, {
                    period: '2022-04-16',
                    order: 30,
                    itouch: 140
                }, {
                    period: '2022-04-17',
                    order: 40,
                    itouch: 80
                },
                {
                    period: '2022-04-18',
                    order: 15,
                    itouch: 200
                }
            ],
            xkey: 'period',
            ykeys: ['order'],
            labels: ['New Order'],
            xLabels: 'day',
            xLabelFormat: function(x) {
                return x.getDate() + "/" + (x.getMonth() + 1).toString().padStart(2, '0')
            },
            pointSize: 3,
            fillOpacity: 0,
            pointStrokeColors: ['#5f76e8'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 3,
            hideHover: 'auto',
            lineColors: ['#5f76e8'],
            resize: true,
        });
    });
</script>
@endsection