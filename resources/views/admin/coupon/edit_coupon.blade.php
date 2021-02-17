@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Coupon Update</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Coupon Update</h6>
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
                <form method="POST" action="{{ url('update/coupon/'.$coupon->id) }}">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="from-group">
                            <label for="">Coupon Code</label>
                            <input type="text" value="{{ $coupon->coupon }}" class="form-control" name="coupon" placeholder="coupon code">
                        </div>
                    </div>
                    <div class="modal-body pd-20">
                        <div class="from-group">
                            <label for="">Coupon Discount</label>
                            <input type="text" value="{{ $coupon->discount }}" class="form-control" name="discount" placeholder="coupon discount">
                        </div>
                    </div>
                    <!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Update</button>
                    </div>
                </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
    @endsection
