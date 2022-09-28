@extends('admin.layout')

@section('discounts-manage-selected')
selected
@endsection

@section('discounts-manage-link-active')
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
            <div class="col-5 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Discount List</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Discounts</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center d-flex justify-content-end align-items-center">
                <div class="customize-input float-right mr-4">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option value="1" selected>Newest</option>
                        <option value="2">Oldest</option>
                    </select>
                </div>
                <a class="btn btn-primary text-white pr-4 pl-4" href="{{route('discounts.create')}}">Create Discount</a>
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
        <div class="d-flex gap-15x mb-3">
            <div class="card-selected pr-3 pl-3 pt-2 pb-2 category-filter">
                <div class="d-flex">
                    <h6 class="m-0">Active</h6>
                </div>
            </div>
            <div class="card-not-selected pr-3 pl-3 pt-2 pb-2 category-filter">
                <div class="d-flex">
                    <h6 class="m-0">Upcoming</h6>
                </div>
            </div>
            <div class="card-not-selected pr-3 pl-3 pt-2 pb-2 category-filter">
                <div class="d-flex">
                    <h6 class="m-0">Ended</h6>
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <strong>Success - </strong> A simple success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
            <strong>Error - </strong> A simple danger alert—check it out!
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Discount</th>
                                        <th>Used</th>
                                        <th>Status & Period</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="/discountdet" class="a-normal d-flex flex-column justify-content-center">
                                                <h5 class="m-0">BIGVDISCOUNT40</h5>
                                                <small class="m-0">ID: <b>19</b></small>
                                            </a>
                                        </td>
                                        <td class="align-middle d-flex flex-column justify-content-center">
                                            <h5 class="m-0">Shipping</h5>
                                            <small class="m-0">(1 Product)</small>
                                        </td>
                                        <td class="align-middle">50%</td>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">
                                            <small class="badge bg-orange font-weight-medium badge-pill text-white m-0">Upcoming</small>
                                            <p class="m-0">13/08/2022 16:00 -<br>14/08/2022 18:00</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex" style="gap: 10px;">
                                                <a href="" class="a-normal text-info"><i data-feather="edit" class="feather-icon"></i></a>
                                                <a href="" class="a-normal text-danger"><i data-feather="trash" class="feather-icon"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="/discountdet" class="a-normal d-flex flex-column justify-content-center">
                                                <h5 class="m-0">BIGVDISCOUNT40</h5>
                                                <small class="m-0">ID: <b>19</b></small>
                                            </a>
                                        </td>
                                        <td class="align-middle d-flex flex-column justify-content-center">
                                            <h5 class="m-0">Product</h5>
                                            <small class="m-0">(All Product)</small>
                                        </td>
                                        <td class="align-middle">$5</td>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">
                                            <small class="badge bg-success font-weight-medium badge-pill text-white m-0">Active</small>
                                            <p class="m-0">12/08/2022 16:00 -<br>13/08/2022 18:00</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex" style="gap: 10px;">
                                                <a href="" class="a-normal text-info"><i data-feather="edit" class="feather-icon"></i></a>
                                                <a href="" class="a-normal text-danger"><i data-feather="trash" class="feather-icon"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="/discountdet" class="a-normal d-flex flex-column justify-content-center">
                                                <h5 class="m-0">BIGVDISCOUNT40</h5>
                                                <small class="m-0">ID: <b>19</b></small>
                                            </a>
                                        </td>
                                        <td class="align-middle d-flex flex-column justify-content-center">
                                            <h5 class="m-0">Product</h5>
                                            <small class="m-0">(5 Products)</small>
                                        </td>
                                        <td class="align-middle">$5</td>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">
                                            <small class="badge bg-secondary font-weight-medium badge-pill text-white m-0">Ended</small>
                                            <p class="m-0">9/08/2022 16:00 -<br>10/08/2022 18:00</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex" style="gap: 10px;">
                                                <a href="" class="a-normal text-info"><i data-feather="edit" class="feather-icon"></i></a>
                                                <a href="" class="a-normal text-danger"><i data-feather="trash" class="feather-icon"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection

@section('javascript-extra')
<script>
    $(".category-filter").on('click', function() {
        $(".category-filter").removeClass("card-selected");
        $(".category-filter").addClass("card-not-selected");
        $(this).removeClass("card-not-selected");
        $(this).addClass("card-selected");
    });
</script>

<!-- add refund status       V
payment pending -> order pending   V

bulk change status (like wordpress) V
add uncategorized (cateogry)
category (add photo)                  V

discount
incoming -> upcoming            V
add checkbox to the ssearch product apply voucher product      V      
default 0 to minimum order V
maximum quota make it like maximum discount amount V

create multiple vendor & category discount for 1 discount voucher V

shipping voucher fixed price   V
shipping voucher for vendor only ?
-->
@endsection