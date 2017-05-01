@extends('dashboard')

@section('content')
  <div class="row">
    <!-- @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif -->

    <div class="panel panel-body">
      <h1>Revenues for {{$motor->owner_name}} ,{{$motor->motorbike_reg}}</h1>
      <table class="table table-striped table-positive table-hover">

                <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Id.</th>
                    <th><i class="fa fa-user"></i> Amount</th>
                    <th><i class="fa fa-user"></i> Month</th>

                </tr>
                </thead>
                <tbody>

                    @foreach($revenues as $rev)
                        <tr>
                            <td>{{$rev->id}}</td>
                            <td>{{$rev->amount}}</td>
                            <td>{{$rev->month}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
    </div>

  </div>
@endsection
