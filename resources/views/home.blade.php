@extends('layouts.dashboard')

@section('main_container')
<div class="right_col" role="main">
  @yield('content')
</div>
<footer>
  <div class="pull-right">
    EMC Revenue Management System. Designed by <a href="#">Ever</a>
  </div>
</footer>
@endsection
