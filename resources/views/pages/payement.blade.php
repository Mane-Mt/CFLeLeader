@extends('layouts/master')

@section('title','payement')

@section('main')

@include('layouts/partials/_header_formation')
   <div class="py-12" style="margin-top:6%;margin-bottom:3%;">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body class="profile-page sidebar-collapse">
                    <div class="container col-md-9 col-offset-5 ">
                            <form action="/savePayement" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="card">
                                    <!-- Main content -->
                                    <section class="content">
                                        <div class="col-md-12">
                                          <div class="card card-outline card-info">
                                            <div class="card-header">
                                              <h3 class="card-title">
                                                Vos informations de payement
                                              </h3>                                
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <br>
                                              
                                             <p class="card alert-info " style="text-align:center; font-weight:bold; font-family:Montserrat ; margin: 1% 4%; padding:1%">Mode de payement
                                                </p>
                                             <div class="form-group row">
                                                      <div class="radio " style="margin-left: 10%;font-family:'century gothic'">
                                                            <input type="radio" name="network" id="moov" value="MOOV" checked>
                                                            <label for="casting"><img src="assets/img/services/flooz.jpg" height="150" width="200"> </label>  
                                                        </div>
                                                        <div class="radio" style="margin-left: 5%; font-family:'century gothic'">
                                                            <input type="radio" name="network" id="togocel" value="TOGOCEL">
                                                        <label for="scenario"> <img src="assets/img/services/tmoney.png" height="150" width="200"></label>    
                                                        </div> 
                                                </div>
                                            </div>
                                            <div class="text-primary" style="text-align:center; font-weight:bold; font-family:Montserrat ; margin: 0 4%; padding:1%">Numero de flooz ou TMoney pour le payement
                                                </div>
                                          
                                            <div class="form-group row">
                                                <label for="quartier" class="col-md-3">Numéro de payement </label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="inputGroupSelect01" name="phone" placeholder="Ex: 90 00 00 00" required>
                                                </div>
                                            </div>
                                            
                                            <!-- pour mentionner en quelque libne les caracteristiques de la chambre que l'on cherche -->                                              
                                                <br>
                                                <div class="position- text-right" >
                                                    <a href="/" class="btn btn-danger">annuler</a>
                                                    <button type="submit" class="btn btn-primary">Valider</button>
                                                </div>
                                                    
                                                    <br>
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
