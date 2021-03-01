

@extends('layouts/adminMaster')
            <!-- Navigation -->
 @section('titre','Liste des formateurs')
            
    @section('main')
            @if($formateurs->isEmpty())
                <div class="card blue">
                    <div class="card-content white-text">
                    Aucun formateur n'est mise en ligne pour le moment 
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
                <div class="table-responsive" style="font-family: 'century gothic'">
                        <table class="table table-striped table-bordered table-hover" i="dataTables-example">
                            <thead style="font-weight: bold;" class="text-center">
                                <tr>
                                    <th>N°</th>
                                    <th>Nom et Prenoms</th>
                                    <th>Photo</th>
                                    <th>Proffession</th>
                                    <th>Telephone</th>
                                    <th>Emailn</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                           </thead>
                           <tbody class="text-center">
                            @php
                             $i=1
                            @endphp
                           @foreach($formateurs as $formateur)
                               <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$formateur->nom.' '.$formateur->prenoms}}</td>
                                    <td><img src="{{ !empty($formateur->image) ? asset('storage/'.$formateur->image) : asset('assets\img\default-profile.png')}}" alt="{{$formateur->libelle}}" 
                                    height="100" width="auto"></td>
                                    <td>{{$formateur->matiere}}</td>
                                    <td>{{$formateur->telephone}}</td>
                                    <td>{{$formateur->email}}</td>
                                    <td>{{$formateur->created_at}}</td>
                                    <td>
                                        <div class="col-sm-2">
                                       
                                            <a href="/admin/editFormateur/{{$formateur->id}}" class="  btn-floating btn-small waves-effect waves-light orange" >
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil">&#xf040</i>
                                            </a >
                                      </div>
                                         <div  class="col-sm-2">
                                         <button type="button" class="btn-floating btn-small waves-effect waves-light red" data-toggle="modal" data-target="#Modal{{$formateur->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="supprimer">&#xf1f8</i></a>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{$formateur->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$formateur->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="Modal_{{$formateur->id }}Title" style="font-weight:bold;">{{$formateur->nom }}</h4>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                    <div class="center">
                                                        <h1 class="red-text">Attention !</h1>
                                                        <h3>Voulez vous réellement supprimer cet Formateur ?</h3>
                                                      
                                                    </div>
                                                    <div class="modal-footer">
                                                         <a href="/admin/deleteFormateur/{{$formateur->id}}"  class="btn btn-danger">Supprimer</a>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                                                       
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-2" >
                                            <button type="button" class="btn-floating btn-small waves-effect waves-light blue" data-toggle="modal" data-target="#Modal_{{$formateur->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="detail">&#xf142</i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal_{{$formateur->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal_{{$formateur->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="Modal_{{$formateur->id }}Title" >Info des Formateurs</h4>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                   
                                
                                                    <div class="text-left" style="color:gray;"> Modifiée le : <span style=" font-weight:bold; color:black" >
                                                    {{$formateur->updated_at}}</span></div>
                                                    <div class=" card-content" >Mots du formateur<br><span style="text-align:left;"><span style=" font-weight:bold; color:black" >
                                                    {{(!empty($formateur->motDuFormateur))? $formateur->motDuFormateur :'Pas de mot de Formateur' }}</span></div> 
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