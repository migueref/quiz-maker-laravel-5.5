<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.4/dist/css/bootstrap-material-design.min.css" integrity="sha384-R80DC0KVBO4GSTw+wZ5x2zn2pu4POSErBkf8/fSFhPXHxvHJydT0CSgAP2Yo2r4I" crossorigin="anonymous">
    <style media="screen">
      .image-background {
         background-image: url("{{ asset('img/background.jpg') }}")!important;
         background-repeat: no-repeat;
         background-size: cover;
      }
    </style>
</head>
<body class="image-background">
     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">SOCME</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Completar encuesta como director
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{url('/forms')}}">Diagnóstico general</a>
                      <a class="dropdown-item" href="{{url('/forms/create')}}">Docente</a>
                   </div>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="{{url('/forms/create')}}">Completar encuesta como docente</a>
                  </li>
               </ul>

              </div>
        </nav>
     </header>
    <main>
         <br>
         <div class="container">

              @yield('content')
         </div>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
