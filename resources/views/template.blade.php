<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attestations Dérogatoires de Déplacements</title>

     <!-- Scripts -->
     <script src="{{asset('js/app.js')}}"></script>
     <!-- CSS -->
     <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @stack('css')

</head>
<body>
    
    @yield('content')

    <div class="container-fluid">
        <div class="row fixed-bottom">
            <div class="col-sm-12 p-2 text-center">
                <a href="https://github.com/tom-shelby/AttestationsDeplacement" target="_blank">Github</a>
                |
                <span>Developped by <span class="text-secondary">tom-shelby</span></span>
            </div>
        </div>
    </div>
   

    @stack('js')
</body>
</html>