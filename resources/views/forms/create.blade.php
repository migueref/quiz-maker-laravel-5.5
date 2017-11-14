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
                   <label for="school_name">Nombre de la institución</label>
                   <select class="form-control" id="school_name" name="school_name">
                     @foreach($institutions as $institution)
                       <option value="{{$institution->school}}">{{$institution->school}}</option>
                     @endforeach
                   </select>
                   @foreach($questions as $question)
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{$question->name}}:</label>
                            <input type="hidden" name="question{{$question->id}}" value="{{$question->id}}">
                            <div class="form-group">
                                  <label for="exampleFormControlSelect1">Selecciona una respuesta</label>
                                  @foreach($question->options as $option)

                                      <div class="form-control">
                                           <div class="row">
                                                <input type="checkbox" name="answer{{$question->id}}" value="{!! $option->id !!}" />{!! $option->name !!}
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">{!! $option->description !!}</div>
                                           </div>
                                      </div>
                                   @endforeach
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
