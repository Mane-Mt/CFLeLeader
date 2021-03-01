
@extends('layouts/adminMaster')
            <!-- Navigation -->
    @section('titre','Publier une nouvelle actualité')
            
    @section('main')
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
            @if(session('status'))
                <div class="card green">
                    <div class="card-content white-text">
                       {{session('status')}}
                   
                    </div>
                </div>
            @endif
    <div class="card">
        <div class="card-content mx-5">
         <form action="/admin/storeActualite" method="post" enctype="multipart/form-data">
            @csrf
                
                    <div class="input-field col-12">
                        <input type="text" name="titre" id="titre" >
                        <label for="titre">Titre de l'article</label>
                    </div>
                
                    <div class="input-field col-12">
                            <textarea  name="content" id="content" class="materialize-textarea" ></textarea>
                            <label for="content">contenu</label>
                    </div>
                   
                    <div class="col-12">
                        <div class="input-field file-field">
                            <div class="mat-btn col-sm-4">
                                <span>Image de l'article</span>             
                                <input type="file" name="image" class="">  
                            </div>
                            <input type="text" class="file-path col-sm-8" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <p> Publier directement sur le site ?</p>
                        <div class="switch">
                            <label>
                                Non
                                <input type="checkbox" name="public" checked>
                                <span class="lever"></span>
                                oui
                            </label>
                        </div>
                    </div>

                     <div class=" right-align">
                        <br>
                        
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" >Publier</button>
                     </div>
                
                </form>
            </div>
         </div>
       
     @endsection