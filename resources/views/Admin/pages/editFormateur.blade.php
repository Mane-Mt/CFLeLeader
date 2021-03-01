
@extends('layouts/adminMaster')
            <!-- Navigation -->
             @section('titre','Modifier une Formation')
            
            @section('main')
<div class="card">
    <div class="card-content mx-5">
        <form action="/admin/updateFormateur/{{$formateur->id}}" method="POST" enctype="multipart/form-data" >
          {{ csrf_field() }}
          {{method_field('PUT')}}
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
            {{-- {{dd($formateur)}} --}}
            <div class="form-wrapper">
                <div class="row">
                <label class="col-lg-3 mt-2 input-title">Nom</label>
                <div class="col-lg-9">
                    <input type="text" placeholder="Nom " name="nom" class="form-control" value="{{ $formateur->nom}}">
                </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="row">
                <label class="col-lg-3 mt-2 input-title">Prénoms</label>
                <div class="col-lg-9">
                    <input type="text" placeholder="Prix d'inscription" name="prenom" class="form-control" value="{{$formateur->prenoms }}">
                </div>
                </div>
            </div>
           
            <div class="form-wrapper">
            <div class="row">
                <label class="col-lg-3 mt-2 input-title">Image de couverture</label>
                <div class="col-lg-9">
                <div class="col-12">
                        <div class="input-field file-field">
                            <div class="mat-btn col-sm-4">
                                <span>PHOTO</span>             
                                <input type="file" name="image" class="" >  
                            </div>
                            <input type="text" class="file-path col-sm-8" value="{{$formateur->image}}" readonly>
                        </div>
                    </div>
               </div>
            </div>
            </div>
            <div class="form-wrapper">
                <div class="row">
                <label class="col-lg-3 mt-2 input-title">Profession</label>
                <div class="col-lg-9">
                    <input type="text" name="profession" class="form-control" value="{{$formateur->matiere}}">
                </div>
                </div>
            </div>

            <div class="form-wrapper">
            <div class="row">
                <label class="col-lg-3 mt-2 input-title">Email</label>
                <div class="col-lg-9">
                <input type="email" name="email" class="form-control" value="{{ $formateur->email}}">
                </div>
            </div>
            </div>
             <div class="form-wrapper">
             <div class="row">
                <label class="col-lg-3 mt-3 input-title">Telephone</label>
                <div class="col-lg-9">
                    <input type="tel" name="telephone" class="form-control" value="{{ $formateur->telephone }}">
                </div>
            </div>
            </div>
            <div class="form-wrapper">
            <div class="row">
                <label class="col-lg-3 mt-2 input-title"> Formateur actif</label>
                <div class="col-lg-9">
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="active" value="1" {{ $formateur->active == '1' ? 'checked ' :''}}>
							<span class="lever"></span>
							oui
						</label>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <br>

             <div class="form-wrapper">
             <div class="row">
                <label class="col-lg-3 mt-3 input-title">Mots du formateur</label>
                <div class="col-lg-9">
                    <textarea  id="content" name="motDuFormateur" class="materialize-textarea"> {{$formateur->motDuFormateur}}</textarea>
                </div>
            </div>
            </div>         
            <br>
            <div class="text-right mx-2">
             <a href="/admin/ListeDesFormateurs" class="btn btn-warning">Annuler</a>
             <button type="submit" name="submit" class="btn btn-success" style="font-family:'Poppins-Regular'">Modifier</button>
            </a>
            <br>
            </div>
            </br>
        </form> 


    </div>
</div>
@stop