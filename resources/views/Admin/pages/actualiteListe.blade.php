

@extends('layouts/adminMaster')
            <!-- Navigation -->
 @section('titre','Liste des actualités')
            
    @section('main')
            @if($actualites->isEmpty())
                <div class="card blue">
                    <div class="card-content white-text">
                    Aucune actualité n'est disponible pour le moment 
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
                                    <th>Titre</th>
                                    <th>Contenu</th>
                                    <th>Image</th>
                                    <th>Date de publication</th>
                                    <th>Actions</th>
                                </tr>
                           </thead>
                           <tbody class="text-center">
                            @php
                             $i=1
                            @endphp
                           @foreach($actualites as $actualite)
                               <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$actualite->titre}}<?php if($actualite->public == 0)
                                     {echo '<i class="fa fa-fw" >&#xf23e</i>';}?></td>
                                    <td>{{substr(nl2br($actualite->content), 0, 50)}} ...</td>
                                    <td><img src="{{asset('storage/'.$actualite->image)}}" alt="{{$actualite->titre}}" 
                                    height="100" width="auto"></td>
                                    <td>{{$actualite->created_at}}</td>
                                    <td>
                                        <div class="col-sm-2">
                                       
                                            <a href="/admin/editActualite/{{$actualite->id}}" class="  btn-floating btn-small waves-effect waves-light orange" >
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil">&#xf040</i>
                                            </a >
                                      </div>
                                         <div  class="col-sm-2">
                                          <a href="/admin/deleteActualite/{{$actualite->id}}" class="btn-floating btn-small waves-effect waves-light red"> <i class="fa fa-fw" aria-hidden="true" title="supprimer">&#xf1f8</i></a>
                                        </div>
                                      
                                        <div class="col-sm-2" >
                                            <button type="button" class="btn-floating btn-small waves-effect waves-light blue" data-toggle="modal" data-target="#Modal_{{$actualite->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="detail">&#xf142</i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal_{{$actualite->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal_{{$actualite->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h5 class="modal-title" id="Modal_{{$actualite->id }}Title" style="font-weight:bold;">{{$actualite->titre }}</h5>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                    <div class="text-left" style="color:gray;"> Titre : <span style=" font-weight:bold; color:black" >
                                                    {{$actualite->titre}}</span></div>                                               
                                                    <div class="text-left" style="color:gray"> Statut : <span style=" font-weight:bold; color:black" >
                                                   {{  ($actualite->public == 1)? "publiée":"Non publiée"}}</span></div>
                                                    <div class="text-left" style="color:gray;"> publiée le : <span style=" font-weight:bold; color:black" >
                                                    {{$actualite->created_at}}</span></div>
                                                    <div class="text-left" style="color:gray;"> Modifiée le : <span style=" font-weight:bold; color:black" >
                                                    {{$actualite->updated_at}}</span></div>
                                                    <div class="text-left" style="color:gray;">Contenu<br><span style="text-align:left;"><span style=" font-weight:bold; color:black" >
                                                    {{(!empty($actualite->content))? $actualite->content :'Pas de description' }}</span></div> 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <?php  if($actualite->public== 0) { ?>
                                        
                                        <div  class="col-sm-2">
                                           <a href="/admin/publishActualite/{{$actualite->id}}" class="btn-floating btn-small waves-effect waves-light green"><i class="fa fa-fw" aria-hidden="true" title="Copy to use send">&#xf1d8</i></a>
                                        </div>
                                       <?php }?>
                                       
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