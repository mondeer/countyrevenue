@extends('home')

@section('content')
  <div class="row">
    <div class="panel panel-body">
      <form class="form-horizontal" action="/revenue/filter" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <div>
            input
          </div>
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>



      </form>
      <h1>Registered Motorcycles in the county</h1>
      <table class="table table-striped table-positive table-hover">

                <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Id.</th>
                    <th><i class="fa fa-user"></i> Owner Name</th>
                    <th><i class="fa fa-user"></i> Gender</th>
                    <th><i class="fa fa-user"></i> Motorcycle Reg. No.</th>
                    <th><i class="fa fa-user"></i> Date of Purchase</th>
                    <th><i class="fa fa-user"></i> Phone</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($motorbikes as $motorbike)
                        <tr>
                            <td>{{$motorbike->id}}</td>
                            <td>{{$motorbike->owner_name}}</td>
                            <td>{{$motorbike->gender}}</td>
                            <td>{{$motorbike->motorbike_reg}}</td>
                            <td>{{$motorbike->dop}}</td>
                            <td>{{$motorbike->phone}}</td>
                            <td><form class="delete" action="/motor/{{ $motorbike->id }}" method="post">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="submit" value="Delete">
                            </form></td>
                        </tr>
                    @endforeach


                </tbody>
              </table>
    </div>

  </div>
@endsection
