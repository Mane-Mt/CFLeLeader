@extends('layouts/adminMaster')
<!-- Navigation -->
@section('titre','Ajouter des utilisateurs')

@section('main')
	<?php $formations = DB::select('SELECT DISTINCT id, libelle FROM formations ORDER BY id');
	$i=1;?>

	@if($formations)
		@foreach($formations as $formation)
	  		@if($formation != null)
			    <div class="card" id="line">
			      <div class="card-body card-content">
			       @php
					 $format=$formation->id;
					$libelle=$formation->libelle;
					@endphp
				        <section>
									<h1 class="text-center" style="">{{$libelle}} </h1>
							<center>
							<table>
								 <?php
									$nbreInscrit = DB::select('SELECT count(*) as nombre FROM inscriptions WHERE formation_id = ?',[$format])[0];

									?>
									<caption class="text-center"> Effectif : {{$nbreInscrit->nombre}}</caption>
									@if($nbreInscrit->nombre > 0)
										<div class=" text-right">
												<a href="listInscription/pdf/{{$format}}" class="btn btn-primary">Telecharger le PDF </a>
										</div>


									<tr>
									<th>Numéro </th>
									<th>Nom </th>
									<th>Prénnoms </th>
									<th>Phone</th>
									<th>Email</th>
                                    <th>Date</th>
									</tr>
								<?php
									$listeFonctions= DB::select('SELECT * FROM inscriptions WHERE formation_id = ?  AND valider=1 ORDER BY created_at DESC',[$format]);
									$color=0;
									$i=0;

									foreach($listeFonctions as $listeFonction ){
										$couleur = ($color%2 == 0) ?  "cyan": "white" ;
										echo"<tr style=\"background-color:$couleur\">";
										#echo "<tr>";
										echo "<td>".$i."</td>";
										echo "<td>".$listeFonction->nom."</td>";
										echo "<td>".$listeFonction->prenom."</td>";
										echo "<td>".$listeFonction->tel."</td>";
										echo "<td>".$listeFonction->mail."</td>";
                                        echo "<td>".$listeFonction->updated_at."</td>";
										echo "</tr>";
										$color++;
										$i++;
									}
								?>
								@endif
								</table>
								<br>
							</center>
						</section>

			      </div>
			    </div>
	       @else
			<div class="card" id="line">
			  <div class="card-body">
			    <h1>Formation en attente</h1>
			  </div>
			</div>
			@endif
		@endforeach
	@else
		<div class="card" id="line">
			<div class="card-body">
				<center><h1 style="color: blue;">Formation en attente</h1></center>
			</div>
		</div>
	@endif
@endsection
