@extends('dashboard')

@section('content')
<h3><i class="fa fa-angle-right"></i> Update Motorcycle Detail</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Motocycle Detail</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="/motor/{{$motor->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Owner Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="owner_name" value="{{ $motor->owner_name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ $motor->phone }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /col-lg-12 -->
    </div><!-- /row -->
@endsection
