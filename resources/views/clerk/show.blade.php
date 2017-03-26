@extends('home')

@section('content')
  <div class="row">
    <!-- @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif -->

    <div class="panel panel-body">
      <h1>Registered Motorcycles in the county</h1>
      <table class="table table-striped table-positive table-hover">

                <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Id.</th>
                    <th><i class="fa fa-user"></i> Owner Name</th>
                    <th><i class="fa fa-user"></i> Month</th>
                    <th><i class="fa fa-user"></i> Motorbike Reg</th>

                </tr>
                </thead>
                <tbody>

                    @foreach($motorevs as $motorev)
                        @foreach($motorev->revenues as $revenue)
                            <tr>
                              <td>
                                {{$motorev->id}}
                              </td>
                              <td>
                                {{ $motorev->owner_name }}
                              </td>
                              <td>
                                {{$revenue->month}}
                              </td>
                              <td>
                                {{$motorev->motorbike_reg}}
                              </td>
                            </tr>
                        @endforeach
                    @endforeach
                  
              </table>
    </div>

  </div>
@endsection
