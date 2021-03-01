@extends('layouts/master')
@section('title','payement')
@section('main')
<style>
       body{
           font-family: 'Montserrat';
       }
      table{
            font-family:'Montserrat';
            padding:5%;
            position:relative;
            left:20%;
        }
        .pay-title{
            font-style:italic;
            font-family:'century gothic';


        }
        .contain{
            margin: 2% 5%;
            padding: 5%;
           border: 6px double black;
        }

        .pay-data{
            padding-left:4%;
             width: 50%
            color:gray;
        }
        .table-title{
            font-family:'Montserrat';
            text-decoration: underline;
            margin : 2% 0;
        }

    </style>
@include('layouts/partials/_header_formation')
<div class="main-content">
    <p class="carte alert alert-success">Payement effectué avec succès</p>
    <div class="text-center">
    <p class="text-danger">Veuillez telecharger le réçu de payement !</p>
    </div>
    <div class="container">
    <div class="text-right">
       <a href="/recuPayement/pdf" class="btn btn-primary " >Telecharger le réçu </a>
    </div>
    <div class="contain">
    <table id="insTable">
        <div class="text-center">
        <div class="logo"><img src="{{asset('assets/img/logo.jpeg')}}" height="auto" width="100"></div>
        <h3 class="table-title">CABINET 3A</h3>
        <h5 class="table-title">RECU DE PAYEMENT DU CABINET 3A</h5>
        </div>
            <thead>
            <tr>
               <th><th>
                <th></th>
            </tr>
        </thead>
        <tbody>


         <tr>
            <td class="pay-title">Identifiant  :</td>
            <td class="pay-data">{{$payement->identifier}}</td>
          </tr>

         <tr>
            <td class="pay-title">ID Transaction :</td>
            <td class="pay-data">{{$payement->tx_reference}}</td>
          </tr>
        <tr>
            <td class="pay-title">ID de Payment :</td>
            <td class="pay-data">{{$payement->payment_reference}}</td>
          </tr>
          <tr>
            <td class="pay-title">Nom :</td>
            <td class="pay-data">{{$payement->nom}}</td>
          </tr>

          <tr>
            <td class="pay-title">Prénoms :</td>
            <td class="pay-data">{{$payement->prenom}}</td>
          </tr>

          <tr>
            <td class="pay-title">Montant :</td>
            <td class="pay-data">{{$payement->amount}}</td>
          </tr>

          <tr>
            <td class="pay-title">Date de payment :</td>
            <td class="pay-data">{{$payement->updated_at}}</td>
          </tr>

          <tr>
            <td class="pay-title">Numero de payment :</td>
            <td class="pay-data">{{$payement->phone_number}}</td>
          </tr>

        <tr>
            <td class="pay-title">Service du payment :</td>
            <td class="pay-data">{{$payement->payment_method}}</td>
          </tr>
        </tbody>
    </table>
    </div>
    </div>
</div>
@endsection
