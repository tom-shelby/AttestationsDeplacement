<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Justificatif de déplacement professionnel</title>

    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .required{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center">Générateur d'Attestation de Déplacement Dérogatoire</h1>
            <h5>Téléchargez et/ou recevez par mail vottre attestation (si vous renseignez votre adresse mail)</h5>
        </div>
        <hr>
        <form action="{{route('makePDF')}}" method="POST">
            @csrf
            <!-- Identité -->
            <div class="form-group row">
                <label for="input_mail" class="col-form-label col-sm-2 text-right">Adresse mail</label>
                <div class="col-sm-10">
                    @error('input_mail')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="email" name="input_mail" class="form-control" value="{{@old('input_mail')}}">
                </div>
            </div>


            <div class="form-group row">
                <label for="input_nom" class="col-form-label col-sm-2 text-right">Nom<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_nom')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="text" name="input_nom" class="form-control" value="{{@old('input_nom')}}">
                </div>
            </div>
            <!-- FIN Identité -->
            <!-- Date de Naissance -->
            <div class="form-group row">
                <label for="input_date_naissance" class="col-form-label col-sm-2 text-right">Né le<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_date_naissance')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="date" class="form-control" name="input_date_naissance" value="{{@old('input_date_naissance')}}">
                </div>
            </div>
            <!-- FIN Date de Naissance -->
            <!-- Lieu de Naissance -->
            <div class="form-group row">
                <label for="input_lieu_naissance" class="col-form-label col-sm-2 text-right">Né à<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_lieu_naissance')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="text" class="form-control" name="input_lieu_naissance" value="{{@old('input_lieu_naissance')}}">
                </div>
            </div>
            <!-- FIN Lieu de Naissance -->
            <!-- Adresse -->
            <div class="form-group row">
                <label for="input_lieu_residence" class="col-form-label col-sm-2 text-right">Demeurant à<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_lieu_residence')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input name="input_lieu_residence" type="text" class="form-control" value="{{@old('input_lieu_residence')}}">
                </div>
            </div>
            <!-- FIN Adresse-->
            <!-- Motif de Déplacement -->
            <div class="form-group row">
                <label for="input_motif" class="col-form-label col-sm-2 text-right">Motif de déplacement<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_motif')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <select name="input_motif" class="form-control">
                        <option value="" selected>Choisir un motif</option>
                        <option value="1">Déplacements entre le domicile et le lieu d'exercice de l'activité professionnelle ou un établissement d'enseignement ou de formation, déplacements professionnels ne pouvant $etre différés, déplacements pour un concours ou un examen.</option>
                        <option value="2">Déplacements pour effectuer des achats de fournitures nécessaires à l'activité professionnelle, des achats de première nécessité dans des établissements dont les activités demeurent autorisées, le retrait de commande et les livraisons à domicile.</option>
                        <option value="3">Consultations, examens et soins ne pouvant être ni assurés à distance ni différés et l'achat de médicaments.</option>
                        <option value="4">Déplacements pour motif familial impérieux, pour l'assistance aux personnes vulnérables et précaires ou la gardes d'enfants.</option>
                        <option value="5">Déplacement des personnes en situation de handicap et leur accompagnant.</option>
                        <option value="6">Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un kilomètre autour du domicile, liés soit à l'activité physique individuelle des personnes, à l'exclusion de toute pratique sportive collective et de toute proximité avec d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie.</option>
                        <option value="7">Convocation judiciaire ou administrative et pour se rendre dans un service public.</option>
                        <option value="8">Participation à des missions d'intérêt général sur demande de l'autorité administrative.</option>
                        <option value="9">Déplacement pour chercher les enfants à l'école et à l'occasion de leurs activités périscolaires.</option>
                    </select>
                </div>
            </div>
            <!-- FIN Motif de Déplacement -->
            <!-- Fait à -->
            <div class="form-group row">
                <div class="col-sm-2 text-right">
                    <label for="input_fait_a">Fait à<span class="required">*</span></label>
                </div>
                <div class="col-sm-10">
                    @error('input_fait_a')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input name="input_fait_a" type="text" class="form-control" value="{{@old('input_fait_a')}}">
                </div>
            </div>
            <!-- FIN Fait à -->
            <!-- Fait le -->
            <div class="form-group row">
                <label for="input_fait_le" class="col-form-label col-sm-2 text-right">Le<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_fait_le')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="date" class="form-control" name="input_fait_le" value="{{
                        transform(today() , function($v){
                            $matches = array();
                            preg_match('/\d+-\d+-\d+/', today(), $matches);
                            return $matches[0];
                        })}}">
                </div>
            </div>
            <!-- FIN Fait le-->
            <!-- Heure de sortie -->
            <div class="form-group row">
                <label for="input_heure_sortie" class="col-form-label col-sm-2 text-right">Heure de sortie<span class="required">*</span></label>
                <div class="col-sm-10">
                    @error('input_heure_sortie')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                <input type="time" class="form-control" name="input_heure_sortie" value="{{@old('input_heure_sortie')}}">
                </div> 
            </div>
            <!-- FIN Heure de sortie -->
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <p class="text-center">En validant, vous allez être redirigé vers le document et si le champs mail est renseigné vous le recevrez également par mail.</p>
                </div>
                
                <div class="col-sm-6">
                    <input type="submit" class="btn btn-block btn-outline-primary text-center" value="Générer l'attestation">
                </div>
                
            </div>
        </form>
    
    </div>
</body>
</html>
