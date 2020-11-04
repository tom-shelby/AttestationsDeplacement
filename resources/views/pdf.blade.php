<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8mb4"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="{{public_path('img\attestation-de-deplacement-derogatoire.jpg')}}" style="width: 100%; position: absolute;">
    <p style="position: absolute; top:140px; left: 140px;">{{$data['input_nom']}}</p>
    
    <p style="position: absolute; top:167px; left: 140px;">{{$data['input_date_naissance']}}</p>
    <p style="position: absolute; top:167px; left: 350px;">{{$data['input_lieu_naissance']}}</p>

    <p style="position: absolute; top:193px; left: 155px;">{{$data['input_lieu_residence']}}</p>

    <p style="position: absolute; top:{{$pixmapMotif[$data['input_motif']]}}px; left: 98px; color: red; font-weight: bold;">X</p>

    <p style="position: absolute; top:756px; left: 125px;">{{$data['input_fait_a']}}</p>
    <p style="position: absolute; top:783px; left: 105px;">{{$data['input_fait_le']}}</p>
    <p style="position: absolute; top:783px; left: 300px;">{{$data['input_heure_sortie']}}</p>

    <p style="position: absolute; top:823px; left: 145px;">{{$data['input_nom']}}</p>

</body>
</html>