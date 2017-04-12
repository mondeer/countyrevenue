@extends('home')

@section('content')
  <div class="row">

    <div class="panel panel-body">
      <h1>Revenue Defaulters</h1>
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
                  {{$now = Carbon\carbon::now()}}
                    @foreach($motorevs as $motorev)

                            <tr>
                              <td>
                                {{$motorev->id}}
                              </td>
                              <td>
                                {{ $motorev->owner_name }}
                              </td>
                              <td>
                                {{$now->month}}
                              </td>
                              <td>
                                {{$motorev->motorbike_reg}}
                              </td>
                            </tr>

                    @endforeach

              </table>
    </div>

  </div>
@endsection
