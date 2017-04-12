@extends('clerk.audit')

@section('audit')
<div class="row">

  <div class="panel panel-body">
    
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

                  @foreach($revenues as $revenue)

                          <tr>
                            <td>
                              {{$revenue->id}}
                            </td>
                            <td>
                              {{ $revenue->month }}
                            </td>
                          </tr>

                  @endforeach

            </table>
  </div>

</div>
@endsection
