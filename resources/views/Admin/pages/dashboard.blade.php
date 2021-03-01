@extends("adminLte.Layout.layout")

@section('title')
  {{ config('app.name', 'mon genico') }}
@endsection

@section('content')
	@include('adminLte.otherViews.statistic')
@endsection