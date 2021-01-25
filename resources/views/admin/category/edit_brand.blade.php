@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Brand Update</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Brand Update</h6>
                <div class="table-wrapper">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ url('update/brand/'.$brand->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="from-group">
                            <label>Brand Name</label>
                            <input type="text" value="{{ $brand->brand_name }}" class="form-control" name="brand_name" placeholder="brand">
                        </div>
                    </div>
                    <br>
                    <div class="modal-body pd-20">
                        <div class="from-group">
                            <label>Brand Logo</label>
                            <input type="file" value="{{ $brand->brand_logo }}" class="form-control" name="brand_logo" placeholder="logo">
                        </div>
                    </div>
                    <div class="modal-body pd-20">
                        <div class="from-group">
                            <label>old Brand Logo</label>
                            <img src="{{ URL::to ($brand->brand_logo) }}" height="70px;" width="90px;">
                            <input type="hidden" value="{{ $brand->brand_logo }}"name="old_logo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Update</button>
                    </div>
                </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
    @endsection
