
@extends('layouts/adminMaster')
            <!-- Navigation -->
             @section('titre','Formation')
            
            @section('main')
<div class="wrapper" style="background-image: url('../images/bg-registration-form-1.jpg');">
    <div class="inner">
        <div class="image-holder " style="padding-top:3rem">
            <img src="../images/formateur.jpg" alt="" width="300" style="padding-top:10rem">
        </div>
        <form action="/admin/storeFormateur" method="POST" enctype="multipart/form-data" >
         {{ csrf_field() }}
            <h3>Nouveau Formateur</h3>
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
            <div class="form-wrapper">
                <input type="text" placeholder="Nom du Foramteur" name="nom" class="form-control" value="{{ old('nom') }}">
            </div>

            <div class="form-wrapper">
                <input type="text" placeholder="Prenom du Foramteur" name="prenom" class="form-control" value="{{ old('prenom') }}">
            </div>

            <br>
            <p> Photo</p>
            <div class="form-wrapper">
                <input type="file" name="photo" placeholder="photo du formateur"  class="form-control">
                {{-- <i class="zmdi zmdi-email"></i> --}}
            </div>

            <div class="form-wrapper">
                <input type="text" placeholder="Profession" name="profession" class="form-control" value="{{ old('matiere') }}">
            </div>
            
            <div class="form-wrapper">
                <input type="tel" placeholder="Telephone" name="telephone"class="form-control" value="{{ old('telephone') }}">
            </div>
           <div class="form-wrapper">
                <input type="email" placeholder="Email" name="email"class="form-control" value="{{ old('email') }}">
            </div>
            <div class="col-sm-12 mt-2">
                    <p> Le formateur est actif </p>
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="active"  {{ old('active') == 1 ? 'checked':''}}>
							<span class="lever"></span>
							oui
						</label>
                    </div>
            </div>
           
            <br>
            <div class="form-wrapper">
                <label >Mots du formateur</label>
                <textarea  id="content" name="motDuFormateur" class="materialize-textarea"></textarea>
            </div>
                        
            <br>
            <button type="submit" name="submit" class="button">
                 Ajouter
			<i class="zmdi zmdi-arrow-right"></i>
			</button>
            <br>
        </form>
    </div>
</div>
@stop