@extends('layouts.app')
@section('content')
     <section>
          <div class="card">
            <div class="card-header">

              <h4 class="card-title">Diagnóstico general</h4>
            </div>
            <div class="card-body">

              <form action="/institutions" method="POST">
                   <input type="hidden" name="_method" value="POST">
                   <input type="hidden" name="_exam_type" value="manager">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la escuela:</label>
                        <input type="text" class="form-control" name="school_name"  placeholder="Escriba el nombre de la escuela">
                        <small id="emailHelp" class="form-text text-muted">Escriba el nombre completo de su escuela.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tipo de la escuela:</label>
                        <input type="text" class="form-control" name="school_type"  placeholder="Escriba el tipo de la escuela">
                        <small id="emailHelp" class="form-text text-muted">Escriba el tipo completo de su escuela.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad de docentes:</label>
                        <input type="number" class="form-control" name="teachers_qty"  placeholder="Escriba la cantidad de docentes">
                        <small id="emailHelp" class="form-text text-muted">Solo se aceptan números.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad de estudiantes:</label>
                        <input type="number" class="form-control" name="student_qty"  placeholder="Escriba la cantidad de estudiantes">
                        <small id="emailHelp" class="form-text text-muted">Solo se aceptan números.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Ubicación:</label>
                        <select class="form-control" name="location">
                             <option value="Urbana">Urbana</option>
                             <option value="Rural">Rural</option>
                             <option value="Semiurbana">Semiurbana</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Elige una opción de la lista.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Condición económica de los estudiantes:</label>
                        <select class="form-control" name="economic_condition">
                             <option value="Muy baja">Muy baja</option>
                             <option value="Baja">Baja</option>
                             <option value="Aceptable">Aceptable</option>
                             <option value="Buena">Buena</option>
                             <option value="Excelente">Excelente</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Elige una opción de la lista.</small>
                   </div>
                   <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12">Enviar respuestas</button>
                        </div>
                   </div>
               </form>

            </div>
          </div>

     </section>

@endsection
