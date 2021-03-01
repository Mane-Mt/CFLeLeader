@extends('layouts/master')
@section('title','payement')
@section('main')

@include('layouts/partials/_header_formation')
<div style="margin-top:15%; margin-bottom:10%">

    <p class="carte alert {{$code == 2 ? 'alert-warning' : 'alert-danger'}} ">{{ payementStatus($code)}}</p>

</div>
@endsection
