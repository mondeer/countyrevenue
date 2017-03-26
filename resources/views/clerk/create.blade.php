@extends('home')

@section('content')
<h3><i class="fa fa-angle-right"></i> Create A New Motorcycle Detail</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Fill in Motocycle Detail</div>
                @if(Session::has('message'))
                  {{Session::get('message')}}
                @endif
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="/motor">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Owner Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="owner_name" value="{{ old('owner_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Motorbike Registration</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" name="motorbike_reg" value="{{ old('motorbike_reg') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Logbook Number</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" name="logbook_no" value="{{ old('logbook_no') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Purchase</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="YYYY-MM-DD" name="dop" value="{{ old('dop') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
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
