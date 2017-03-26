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
      @if($motors)
        @if(isset($update))
          <div class="alert alert-success">
            Updated Succesfully
          </div>
        @else
          <div class="alert alert-success">
            Created Succesfully
          </div>
        @endif
      <table class="table table-striped table-positive table-hover">

                <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Id.</th>
                    <th><i class="fa fa-user"></i> Owner Name</th>
                    <th><i class="fa fa-user"></i> Gender</th>
                    <th><i class="fa fa-user"></i> Motorcycle Reg. No.</th>
                    <th><i class="fa fa-user"></i> Date of Purchase</th>
                    <th><i class="fa fa-user"></i> Phone</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($motors as $motor)
                        <tr>
                            <td>{{$motor->id}}</td>
                            <td>{{$motor->owner_name}}</td>
                            <td>{{$motor->gender}}</td>
                            <td>{{$motor->motorbike_reg}}</td>
                            <td>{{$motor->dop}}</td>
                            <td>{{$motor->phone}}</td>
                            <td>
                              <a class="btn btn-primary" href="/motor/{{$motor->id}}/edit">Edit</a>
                            </td>
                            <td>
                              <a class="btn btn-primary" href="/revenue/create/{{$motor->id}}">Pay</a>
                            </td>
                            <td><form class="delete" action="/motor/{{ $motor->id }}" method="post">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="submit" value="Delete">
                            </form></td>
                        </tr>
                    @endforeach

                    
                </tbody>
              </table>
          @endif
    </div>

  </div>
@endsection
