@extends('admin.layout')

@section('vendors-manage-selected')
selected
@endsection

@section('vendors-manage-link-active')
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
            <div class="col align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Vendor</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/vendors')}}" class="text-muted">Vendors</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Create Vendor</li>
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="vendorName">Vendor Name</label>
                                <input type="text" class="form-control" id="vendorName" name="vendorName" required placeholder="Vendor Name">
                            </div>
                            <div class="form-group">
                                <label for="vendorDescription">Vendor Description</label>
                                <textarea class="form-control" id="vendorDescription" name="vendorDescription" required placeholder="Vendor Description" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vendorPhone">Phone Number</label>
                                <input type="number" class="form-control" id="vendorPhone" name="vendorPhone" required placeholder="Vendor Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="vendorEmail">Email</label>
                                <input type="email" class="form-control" id="vendorEmail" name="vendorEmail" required placeholder="Vendor Email">
                            </div>
                            <div class="form-group">
                                <label for="vendorLocation">Location</label>
                                <select class="custom-select" id="vendorLocation">
                                    <option selected value="1">North</option>
                                    <option value="2">South</option>
                                    <option value="3">West</option>
                                    <option value="4">East</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="productFeaturedImage">Profile Photo</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="vendorPhoto">
                                        <label class="custom-file-label" for="vendorPhoto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4 gap-15x">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{route('products.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
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