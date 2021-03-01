
@extends('layouts/adminMaster')
            <!-- Navigation -->
             @section('titre','Formation')
            
            @section('main')
<div class="wrapper" style="background-image: url('../images/bg-registration-form-1.jpg');">
    <div class="inner">
        <div class="image-holder " style="padding-top:3rem">
            <img src="../images/registration-form-1.jpg" alt="" width="300" style="padding-top:10rem">
        </div>
        <form action="/admin/storeFormation" method="POST" enctype="multipart/form-data" >
         {{ csrf_field() }}
            <h3>Nouvelle Formation</h3>
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
                <input type="text" placeholder="Nom de la Formation" name="nom" class="form-control" value="{{ old('nom') }}">
            </div>
            <br>
            <p> Image ou affiche de la foramtion</p>
            <div class="form-wrapper">
                <input type="file" name="image" placeholder=""  class="form-control">
                {{-- <i class="zmdi zmdi-email"></i> --}}
            </div>
            <div class="form-wrapper">
                <input type="number" placeholder="Prix d'inscription" name="insPrice"class="form-control" value="{{ old('insPrice') }}">
            </div>
            <div class="form-wrapper">
                <input type="number" placeholder="Prix de la formation" name="formPrice"class="form-control" value="{{ old('formPrice') }}">
            </div>
            <br>
            <div class="col-sm-12 mt-2">
                    <p> Activer la formation ?</p>
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="active" value="1" checked value="{{ old('active') }}">
							<span class="lever"></span>
							oui
						</label>
                    </div>
            </div>
            <div class="form-wrapper">
                <input type="number" placeholder="Prix promo"name="promoPrice" class="form-control" value="{{ old('promoPrice') }}">
            </div>
            <br>
            <div class="col-sm-12">
                    <p> Activer le mode promotion de la formation ?</p>
                    <div class="switch">
                        <label>
							Non
							<input type="checkbox" name="promo" >
							<span class="lever"></span>
							oui
						</label>
                    </div>
            </div>
            <br>
            <div class="form-wrapper">
                <label class="black-text">Description de la formation </label>
                <textarea  name="description" id="content" name="description" class="materialize-textarea"> {{ old('description')}}</textarea>
            </div>
           
            <button type="submit" name="submit" class="button">
                            Ajouter
						<i class="zmdi zmdi-arrow-right"></i>
			</button>
            <br>
        </form>
    </div>
</div>
@stop