<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        #insTable{
            font-family:"Poppins-Regular";
            border-collapse: collapse;
            width:100%;
            margin:1% auto;
        }
        #insTable td, #insTable tr, #insTable th{
            border:1px solid #333;
            padding: 2px;
        }
        #insTable tr:nth-child(even){
            background-color:#0bfdfd;
        }
        #insTable th{
            padding-top:12px;
            padding-bottom:12px;
            text-align:left;

        }
    </style>
</head>
<body>
    <h1 style="text-align:center">{{$titre}}</h1>
    {{--  {{dd($inscriptions)}}  --}}
    <h5 style="text-align:center">Effectif : {{$nbreInscrit}} </h1>
    <table id="insTable">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Telephone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($inscriptions as $inscrit)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$inscrit->nom}}</td>
                    <td>{{$inscrit->prenom}}</td>
                    <td>{{$inscrit->tel}}</td>
                    <td>{{$inscrit->mail}}</td>
                </tr>
                @php($i++)
            @endforeach
        </tbody>
    </table>
</body>
</html>
