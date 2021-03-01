<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
          margin:10%;
          border: 6px double black;
          padding: 2%;
        }
        .pay-data{
             width: 50%
            color:gray;
        }
        td{
            margin:1% 2%;
        }
         .table-title{
            font-family:'Montserrat';
            text-decoration: underline;
        }

    </style>
</head>
<body>
  <div class="contain">
    <div style="text-align:center">
          <h4 class="table-title">CABINET 3A</h4>
          <h5 class="table-title">RECU DE PAYEMENT DU CABINET 3A</h5>
        </div>
    <table id="insTable">
        <thead>
            <tr>
               <th><th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($payement)}} --}}
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
</body>
</html>
