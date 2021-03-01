@extends('layouts/adminMaster')
@section('titre', 'Liste complet des inscrits')
@section('main')
    	@if($inscriptionsListe->isNotEmpty())
			    <div class="card" id="line">
			      <div class="card-body card-content">
				        <section>
								<h1 class="text-center" style="">Liste de tous les inscrits</h1>
							<center>
							<table>
								<tr>
									<th>Numéro </th>
									<th>Nom </th>
									<th>Prénnoms </th>
									<th>Phone</th>
									<th>Email</th>
									<th>Date Inscription</th>
									<th>Formation</th>
								</tr>
                                    @php
                                        $color=0;
                                        $i=0;
                                    @endphp
									@foreach($inscriptionsListe as $insListe)
										@php $couleur = ($color%2 == 0) ?  "cyan": "white";  @endphp 
										<tr style="background-color:{{$couleur}}">
										<td>{{$i}}</td>
										<td>{{$insListe->nom}}</td>
										<td>{{$insListe->prenom}}</td>
										<td>{{$insListe->tel}}</td>
										<td>{{$insListe->mail}}</td>
										<td>{{$insListe->created_at}}</td>
										<td>{{$insListe->libelle}}</td>
										</tr>
                                        @php
                                            $color++;
                                            $i++;
                                        @endphp
									@endforeach
								</table>
								<br>
							</center>
						</section> 
					
			      </div>              
			    </div>
	@else
		<div class="card blue" >
			<div class="card-content white-text">
				<center>Aucun inscrit pour le moment </center>
			</div>              
		</div>
	@endif
@endsection