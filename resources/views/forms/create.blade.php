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
                   @foreach($questions as $question)
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{$question->name}}:</label>
                            <input type="hidden" name="question{{$question->id}}" value="{{$question->id}}">
                            <div class="form-group">
                                  <label for="exampleFormControlSelect1">Selecciona una respuesta</label>
                                  <select class="form-control" name="answer{{$question->id}}">
                                       @foreach($question->options as $option)
                                          <option value="{!! $option->id !!}">{!! $option->name !!}</option>
                                      @endforeach
                                  </select>
                            </div>


                             <small id="emailHelp" class="form-text text-muted">Elige una opción de la lista.</small>
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
