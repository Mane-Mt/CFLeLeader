

@extends('layouts/adminMaster')
            <!-- Navigation -->
 @section('titre','Liste des formations')
            
    @section('main')
            @if($formations->isEmpty())
                <div class="card blue">
                    <div class="card-content white-text">
                    Aucune n'est formation n'est mise en ligne
                 </div>
                </div>
            @else
            @if ($errors->any())
                <div class="card red">
                    <div class="card-content white-text">
                    <ul>
                        {{$error}}
                    </ul>
                    </div>
                </div>
            @endif
            
            @if (session('delMsg'))
                 <div class="card red">
                    <div class="card-content white-text">
                    {{ session('delMsg') }}
                 </div>
                </div>
            @endif
            @if (session('status'))
                 <div class="card green">
                    <div class="card-content white-text">
                    {{ session('status')}}
                 </div>
                </div>
            @endif
                <div class="table-responsive" style="font-family: 'Poppins-Regular'">
                        <table class="table table-striped table-bordered table-hover" i="dataTables-example">
                            <thead style="font-weight: bold;" class="text-center">
                                <tr>
                                    <th>N°</th>
                                    <th>Nom</th>
                                    <th>Affiche</th>
                                    <th>Prix</th>
                                    <th>Date de publication</th>
                                    <th>Actions</th>
                                </tr>
                           </thead>
                           <tbody class="text-center">
                            @php
                             $i=1
                            @endphp
                           @foreach($formations as $formation)
                               <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$formation->libelle}}</td>
                                    <td><img src="{{asset('storage/'.$formation->image)}}" alt="{{$formation->libelle}}" 
                                    height="100" width="auto"></td>
                                    <td>{{$formation->promo == '0'?  $formation->inscription_price + $formation->formation_price :  $formation->inscription_price + $formation->promo_price}} F CFA</td>
                                    <td>{{$formation->created_at}}</td>
                                    <td>
                                        <div class="col-sm-2">
                                       
                                            <a href="/admin/editFormation/{{$formation->id}}" class="  btn-floating btn-small waves-effect waves-light orange" >
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil">&#xf040</i>
                                            </a >
                                      </div>
                                        <div  class="col-sm-2">
                                            <button type="button" class="btn-floating btn-small waves-effect waves-light red" data-toggle="modal" data-target="#Modal{{$formation->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="supprimer">&#xf1f8</i></a>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{$formation->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$formation->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="Modal_{{$formation->id }}Title" style="font-weight:bold;">{{$formation->libelle }}</h4>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                    <div class="center">
                                                        <h1 class="red-text">Attention !</h1>
                                                        <h3>Voulez vous réellement supprimer cette Formation ?</h3>
                                                        <h4 class="red-text">Cette suppression entrainera la supression complète de toutes les inscriptions et payements liée à cette formation</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                         <a href="/admin/deleteFormation/{{$formation->id}}"  class="btn btn-danger">Supprimer</a>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                                                       
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                      </div>
                                        <div class="col-sm-2" >
                                            <button type="button" class="btn-floating btn-small waves-effect waves-light blue" data-toggle="modal" data-target="#Modal_{{$formation->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="detail">&#xf142</i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal_{{$formation->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal_{{$formation->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="Modal_{{$formation->id }}Title" style="font-weight:bold;">{{$formation->libelle }}</h4>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                   
                                                    <div class="text-left pl-2" style="color:gray">Le {{date('(d/m/Y H:i)',strtotime($formation->date_post))}}</div>
                                                    <div class="text-left" style="color:gray"> Statut : <span style=" font-weight:bold; color:black" >
                                                   {{  ($formation->activé == 1)? "Active":"Non active"}}</span></div>
                                                    <div class="text-left" style="color:gray;"> Prix d'iscription: <span style=" font-weight:bold; color:black" >
                                                    {{$formation->inscription_price }}</span></div>
                                                    <div class="text-left" style="color:gray;"> Prix de formation : <span style=" font-weight:bold; color:black" >
                                                    {{$formation->formation_price}}$</span></div>
                                                     <div class="text-left" style="color:gray"> Promotion : <span style=" font-weight:bold; color:black" >
                                                   {{  ($formation->promo == 1)? "Activée":"Desctivée"}}</span></div>
                                                    <div class="text-left" style="color:gray;"> publiée le : <span style=" font-weight:bold; color:black" >
                                                    {{$formation->created_at}}</span></div>
                                                    <div class="text-left" style="color:gray;"> Modifiée le : <span style=" font-weight:bold; color:black" >
                                                    {{$formation->updated_at}}</span></div>
                                                    <div class=" card-content" >Descritpion<br><span style="text-align:left;"><span style=" font-weight:bold; color:black" >
                                                    {{(!empty($formation->description))? $formation->description :'Pas de description' }}</span></div> 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                           @endforeach

                                </tbody>
                            </table>
                </div>
                @endif
        @stop