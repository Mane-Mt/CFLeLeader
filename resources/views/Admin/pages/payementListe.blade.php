@extends('layouts/adminMaster')
@section('titre', 'Liste complet des payements')
@section('main')
    	@if(!empty($payements))
			    <div class="card" id="line">
			      <div class="card-body card-content">
				        <section>
							 <div class="table-responsive">
                      			<table class="table table-striped table-bordered table-hover" i="dataTables-example">
								<tr>
									<th>N°</th>
                                    <th>Identifier</th>
									<th>ID de Transaction </th>
									<th>ID de Payement </th>
									<th>Montant</th>
									<th>Statut</th>
									<th>Moyen de payement</th>
									<th>Numero du payement</th>
									<th>Date</th>
									<th>Identité du payeur</th>
								</tr>
                                    @php
                                        $color=0;
                                        $i=0;
                                    @endphp
									@foreach($payements as $payement)
										@php $couleur = ($color%2 == 0) ?  "cyan": "white";  @endphp
										<tr style="background-color:{{$couleur}}">
										<td>{{$i}}</td>
                                        <td>{{$payement->identifier}}</td>
										<td>{{$payement->tx_reference}}</td>
										<td>{{$payement->payment_reference}}</td>
										<td>{{$payement->amount}}</td>
										<td>{{$payement->status}}</td>
										<td >{{$payement->payment_method}}</td>
										<td>{{$payement->phone_number}}</td>
										<td>{{$payement->updated_at}}</td>
										<td >{{$payement->nom.' '.$payement->prenom}}</td>
										</tr>
                                        @php
                                            $color++;
                                            $i++;
                                        @endphp
									@endforeach
								</table>
							</div>
						</section>

			      </div>
			    </div>
	@else
		<div class="card blue" >
			<div class="card-content white-text">
				<center>Aucun payement réçu pour le moment pour le moment </center>
			</div>
		</div>
	@endif
@endsection
