@extends('layouts.app')
@section('content')
     <section>
          <div class="card">
            <div class="card-header">

              <h2 class="card-title">Cuestionario de Prácticas Pedagógicas para Docentes </h2>
            </div>
            <div class="card-body">

              <form action="/forms" method="POST">
                   <input type="hidden" name="_method" value="POST">
                   <input type="hidden" name="_exam_type" value="teacher">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <label for="school_name">Nombre de la institución</label>
                   <select class="form-control" id="institution_id" name="institution_id">
                     @foreach($institutions as $institution)
                       <option value="{{$institution->id}}">{{$institution->name}}</option>
                     @endforeach
                   </select>
                   @foreach($questions as $question)
                        <div class="form-group">
                            <h5 for="exampleInputEmail1">{{$question->name}}:</h5>
                            <input type="hidden" name="question{{$question->id}}" value="{{$question->id}}">
                            <div class="form-group">
                                  <label for="exampleFormControlSelect1">Selecciona una respuesta</label>
                                  <div class="row">
                                  @foreach($question->options as $option)

                                      <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">

                                                <input type="checkbox" name="answer{{$question->id}}" value="{!! $option->id !!}" />{!! $option->name !!}
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">{!! $option->description !!}</div>
                                           </div>

                                   @endforeach
                                   </div>
                        </div>
                   @endforeach
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
