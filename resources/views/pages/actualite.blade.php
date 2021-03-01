@extends('layouts.master')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
@endsection
@section('title')
  Formation Details
@endsection

@section('main')
@include('layouts/partials/_header_formation')
<main id="main">
    	<div id="index-banner" class="parallax-container" style=" background-image: url('{{asset('storage/'.$actualite->image)}}'); background-size: cover;" >
        	<div class="section no-pad-bot">
			<br><br>
                <h1 class="header center teal-text text-lighten-2 text-center"><?= $actualite->titre ?></h1>
                
        	</div>
        	<div class="parallax"><img src="{{asset("storage/".$actualite->image)}}"></div>
			</div>
			<div class="container" style="font-family: 'century gothic'">
				<h2><?= $actualite->titre ?></h2>
				<p> {{nl2br($actualite->content)}}</p>
            </div>
        </div>
</main>
@endsection

@section('script')
    <script src="{{asset('/js/materialize.js')}}"></script>
     <script src="{{asset('/js/scripts.js')}}"></script>
@endsection