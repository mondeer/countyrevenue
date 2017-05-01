@extends('dashboard')

@section('content')
<h3><i class="fa fa-angle-right"></i> Revenue Payments</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Fill in Revenue Details</div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="/revenue/create/{{$motor->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Amount</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amount" value="{{ old('amount') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">For The Month</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="month" value="{{ old('month') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- /col-lg-12 -->
    </div><!-- /row -->

@endsection
