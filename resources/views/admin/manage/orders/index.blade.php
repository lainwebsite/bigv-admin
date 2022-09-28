@extends('admin.layout')

@section('orders-manage-selected')
selected
@endsection

@section('orders-manage-link-active')
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
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Order List</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center d-flex justify-content-end align-items-center">
                <p class="mr-4 mb-0">Sort By</p>
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Date Ascending</option>
                        <option value="1">Date Descending</option>
                    </select>
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="alert alert-success" role="alert">
            <strong>Success - </strong> A simple success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
            <strong>Error - </strong> A simple danger alert—check it out!
        </div>
        <div class="align-self-center d-flex align-items-center mb-3">
            <p class="mr-4 mb-0"><b>Bulk Action</b></p>
            <p class="mr-3 mb-0">Set Order Status</p>
            <div class="customize-input float-right mr-3">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected="">Order Pending</option>
                    <option value="1">Paid</option>
                    <option value="2">Delivered</option>
                    <option value="3">Success</option>
                    <option value="4">Refund</option>
                </select>
            </div>
            <button class="btn btn-primary text-white pr-4 pl-4">Apply</button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-13 col-xlg-2">
                                <div class="card card-hover">
                                    <div class="p-2 br-18 bg-danger text-center">
                                        <h1 class="font-light text-white">2,064</h1>
                                        <h6 class="text-white">Order Pending</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-13 col-xlg-2">
                                <div class="card card-hover">
                                    <div class="p-2 br-18 bg-primary text-center">
                                        <h1 class="font-light text-white">1,738</h1>
                                        <h6 class="text-white">Paid</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-13 col-xlg-2">
                                <div class="card card-hover">
                                    <div class="p-2 br-18 bg-cyan text-center">
                                        <h1 class="font-light text-white">1100</h1>
                                        <h6 class="text-white">Delivered</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-13 col-xlg-2">
                                <div class="card card-hover">
                                    <div class="p-2 br-18 bg-success text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Success</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-13 col-xlg-2">
                                <div class="card card-hover">
                                    <div class="p-2 br-18 bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Refund</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check form-check-inline m-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="checkOrder<?= $i ?>">
                                                            <label class="custom-control-label" for="checkOrder<?= $i ?>"></label>
                                                        </div>
                                                    </div>
                                                </div>
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
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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