@extends('layouts/master')
@section('title','inscription')

@section('main')

@include('layouts/partials/_header_formation')
   <div class="py-12" style="margin-top:6%;margin-bottom:3%;">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body class="profile-page sidebar-collapse">
                    <div class="container col-md-9 col-offset-5 ">
                            <form action="/saveInscription" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="card">
                                    <!-- Main content -->
                                    <section class="content">
                                        <div class="col-md-12">
                                          <div class="card card-outline card-info">
                                            <div class="card-header">
                                              <h3 class="card-title">
                                                Vos informations personelles
                                              </h3>                                
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <br>
                                                
                                                @if ($errors->any())
                                                    <div class="carte alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                
                                                <div class="form-group row">
                                                <label for="nom" class="col-lg-2 text-lg-center">Nom</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="inputGroupSelect01" name="nom" required>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="prenom" class="col-lg-2 text-lg-center">Prénoms</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="inputGroupSelect01" name="prenom" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="tel" class="col-lg-2 text-lg-center">Téléphone</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="inputGroupSelect01" name="tel" required>
                                                </div>
                                            </div>
                                            <p class="text-danger " style="text-align:center;font-family:Montserrat">Attention! veullez saisir une addresse mail valide car un emplaire du réçu de payement vous sera envoyé par email </p>
                                            <div class="form-group row">
                                                
                                                <label for="mail" class="col-lg-2 text-lg-center">Email valide</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="inputGroupSelect01" name="mail" required>
                                                </div>
                                            </div>
                                            <!-- pour mentionner en quelque libne les caracteristiques de la chambre que l'on cherche -->                                              
                                                <br>
                                                  <div class="position- text-right" >
                                                    <a href="/" class="btn btn-danger">annuler</a>
                                                    <button type="submit" class="btn btn-primary">Suivant</button>
                                                </div>
                                                    
                                            </div>
                                          </div>
                                        </div>
                                        <!-- /.col-->
                                      </div>

                                      <!-- ./row -->
                                    </section>
                                    <!-- /.content -->
                                    <!-- /.content-wrapper -->


                              </form>                                                 
                    </div>
                </body>                    
            </div>
        </div>
    </div>

@endsection
