@extends('layouts/adminMaster')

    @section('titre', 'Liste des suggestions et messages')

    @section('main')
        <div class="row">
           <div class="col-12">
                @if(!$suggestions)
                         <div class="card blue">
                                <div class="card-content white-text">
                                  Vous n'avez aucun nouveau message
                                </div>
                           </div> 
                @else
			
				@foreach ($suggestions as $suggest)
			<div class="row" >
			<div class="col-lg-9 col-md-9 col-sm-12 col-md-offset-1">
				<div class="card white " >
					<div  style="padding: 1%;">
                                   <div class="text-left" style="color:gray;">Message de  <span style=" font-weight:bold;" > {{ $suggest->name}}</span>  Le {{date('(d/m/Y H:i)',strtotime($suggest->created_at))}} </div><br> 
                                   <div class="text-left pl-2" style="color:gray;">{{ $suggest->email}}</div><br>
							<div class=" card-content text-center" style=" font-size: 1.1rem">{{nl2br( $suggest->message)}}</div> 
					</div>
					 <div class="right">
                              <div class="col-xs-2 text-center" >
							
							<a href="/admin/seenSuggestions/{{$suggest->id}}" class="btn-floating btn-small waves-effect waves-light green"><i class="fa fa-fw" aria-hidden="true" title="vue">&#xf00c</i></a>
						</div>
                              <div class="col-xs-2 text-center"> 
                                  
                                   <a href="/admin/deleteSuggestions/{{$suggest->id}}" class=" btn-floating btn-small waves-effect waves-light red"> <i class="fa fa-fw" aria-hidden="true" title="supprimer">&#xf1f8</i></a>
                              </div>
						<a href="mailto:<?php echo $suggest->email ?>" class="blue-text col-xs-2 text-center" style="margin-top: 0.5%;"><i class="fa fa-fw" aria-hidden="true" title="Répondre">&#xf112</i>Répondre </a>
                              
                         </div> 
				</div>
			</div>
           </div>
			@endforeach
        @endif
@endsection
            