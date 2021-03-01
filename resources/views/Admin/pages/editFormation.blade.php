
@extends('layouts/adminMaster')
            <!-- Navigation -->
             @section('titre','Modifier une Formation')
            
            @section('main')
<div class="card">
    <div class="card-content mx-5">
        <form action="/admin/updateFormation/{{$formation->id}}" method="POST" enctype="multipart/form-data" >
          {{ csrf_field() }}
          {{method_field('PUT')}}
            <h3 class="text-center my-3">Modifier une Formation</h3>
            @if ($errors->any())
                <div class="card red">
                    <div class="card-content white-text">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            @endif

            @if (session('status'))
                 <div class="card green">
                    <div class="card-content white-text">
                    {{ session('status') }}
                 </div>
                </div>
            @endif
            {{-- {{dd($formation)}} --}}
            <div class="form-wrapper">
                <div class="row">
                <div style="font-weight:bold" class="col-lg-3 mt-2 input-title">Titre de la formation</div>
                <div class="col-lg-9">
                    <input type="text" placeholder="Nom de la Formation" name="nom" class="form-control" value="{{ $formation->libelle}}">
                </div>
                </div>
            </div>
            <br>
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-2 input-title">Image de couverture</div>
                <div class="col-lg-9">
                <input type="file" name="image" placeholder=""  class="form-control" value="{{ $formation->image}}">
               </div>
            </div>
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-2 input-title">prix d'inscription</div>
                <div class="col-lg-9">
                    <input type="number" placeholder="Prix d'inscription" name="insPrice"class="form-control" value="{{$formation->inscription_price }}">
                </div>
            </div>
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-2 input-title">Prix de la formation</div>
                <div class="col-lg-9">
                <input type="number" placeholder="Prix de la formation" name="formPrice"class="form-control" value="{{ $formation->formation_price}}">
                </div>
            </div>
            <br>
            <br>
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-2 input-title"> Activer la formation</div>
                <div class="col-lg-9">
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="active" value="1" {{ $formation->active == '1' ? 'checked ' :''}}>
							<span class="lever"></span>
							oui
						</label>
                    </div>
                </div>
            </div>
            <br>
           
            
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-3 input-title"> Prix Promo</div>
                <div class="col-lg-9">
                    <input type="number" placeholder="Prix promo"name="promoPrice" class="form-control" value="{{ $formation->promo_price }}">
                </div>
            </div>
            <br>
            <br>
            <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-3 input-title">Activer le mode promotion ?</div>
                <div class="col-lg-9">
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="promo" {{ $formation->promo == '1' ? 'checked ' :''}} >
							<span class="lever"></span>
							oui
						</label>
                    </div>
                </div>
            </div>
            <br>
            <br>
             <div class="form-wrapper">
                <div style="font-weight:bold" class="col-lg-3 mt-3 input-title">Description de la formation</div>
                <div class="col-lg-9">
                    <textarea  name="description" id="content" name="description" class="materialize-textarea"> {{$formation->description}}</textarea>
                </div>
            </div>         
            
            <br>
            <div class="text-right mx-2">
             <a href="/admin/showFormations" class="btn btn-warning">Annuler</a>
             <button type="submit" name="submit" class="btn btn-success" style="font-family:'Poppins-Regular'">Modifier</button>
            </a>
            <br>
            </div>
            </br>
        </form> 


    </div>
</div>
@stop