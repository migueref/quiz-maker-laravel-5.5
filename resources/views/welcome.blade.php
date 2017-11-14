<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cuestionario de Prácticas Pedagógicas para Docentes </title>
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
                         <a class="dropdown-item" href="{{url('/institutions/create')}}">Diagnóstico general</a>
                         <a class="dropdown-item" href="#">Docente</a>
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
             <section>
                  <div class="container">
                       <article class="card text-center">
                           <div class="card-header">
                             <h1 class="card-title">Cuestionario de Prácticas Pedagógicas para Docentes</h1>
                           </div>
                           <div class="card-body text-left">
                               <p> El presente cuestionario busca determinar el grado de aplicación de un conjunto de acciones con los estudiantes durante el último semestre o ciclo escolar. Estas acciones se demuestran a través de actividades que se ponen en marcha para lograr determinadas metas de aprendizaje. </p>
                              <p>No es una evaluación de su desempeño, ni tampoco un test de inteligencia o de personalidad. Es solamente un diagnóstico de los tipos de acciones más comunes que se trabajan con los estudiantes. No existen respuestas correctas ni incorrectas. </p>
                              <p>Este diagnóstico es confidencial. En ninguna parte aparecerán sus datos personales.  </p>
                              <p>Si acepta participar, le invitamos a hacerlo con sinceridad, respondiendo todas las preguntas planteadas. </p>
                              <p>Solamente le tomará unos minutos. </p>
                              <p>Intrucciones</p>
                              <ul>
                                   <li>Son 10 preguntas.</li>
                                   <li>La duración promedio es de 15 minutos.</li>
                                   <li>En cada pregunta hay varios niveles que van desde 0 (NO LO HACE) hasta 4 (EXCELENTE). Para facilitar la selección del nivel, lea la descripción respectiva. Seleccione el nivel con una “X” o dando clic.  </li>
                                   <li>Solamente debe marcar un nivel en cada una de las 10 preguntas.</li>
                                   <li>Es necesario responder todas las preguntas.</li>
                              </ul>

                           </div>
                           <div class="card-footer text-muted">
                                <a href="{{url('/institutions/create')}}" class="btn btn-primary">Completar encuesta como director</a>
                                <a href="{{url('/forms/create')}}" class="btn btn-primary">Completar encuesta como docente</a>
                           </div>
                      </article>
                  </div>
             </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.4/dist/js/bootstrap-material-design.js" integrity="sha384-3xciOSDAlaXneEmyOo0ME/2grfpqzhhTcM4cE32Ce9+8DW/04AGoTACzQpphYGYe" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    </body>
</html>
