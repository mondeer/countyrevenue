@extends('home')

@section('content')
  <div class="row">
    <div class="panel panel-body">
      <h1>Monthly Audit</h1>
      <form class="form-horizontal" action="/revenue/filter" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <div>
            <select class="col-md-2" name="month">
              <option>january</option>
              <option>february</option>
              <option>march</option>
            </select>
          </div>
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>



      </form>

    </div>
    @yield('audit')
  </div>
@endsection
