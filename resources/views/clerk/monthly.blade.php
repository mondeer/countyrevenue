@extends('clerk.audit')

@section('audit')
@foreach($audits as $audit)
  {{$audit->amount}}
@endforeach
@endsection
