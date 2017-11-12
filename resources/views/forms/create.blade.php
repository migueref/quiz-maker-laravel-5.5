@extends('layouts.app')
@section('content')
     <section>
          <div class="card">
            <div class="card-header">

              <h4 class="card-title">Diagnóstico general</h4>
            </div>
            <div class="card-body">

              <form action="/forms" method="POST">
                   <input type="hidden" name="_method" value="POST">
                   <input type="hidden" name="_exam_type" value="teacher">
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
                        <label for="exampleInputEmail1">Cantidad de estudiantes:</label>
                        <input type="number" class="form-control" name="student_qty"  placeholder="Escriba la cantidad de estudiantes">
                        <small id="emailHelp" class="form-text text-muted">Solo se aceptan números.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Ubicación:</label>
                        <select class="form-control" name="location">
                             <option value="1">Urbana</option>
                             <option value="2">Rural</option>
                             <option value="3">Semiurbana</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Elige una opción de la lista.</small>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Condición económica de los estudiantes:</label>
                        <select class="form-control" name="student_condition">
                             <option value="4">Muy baja</option>
                             <option value="5">Baja</option>
                             <option value="6">Aceptable</option>
                             <option value="7">Buena</option>
                             <option value="8">Excelente</option>
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
