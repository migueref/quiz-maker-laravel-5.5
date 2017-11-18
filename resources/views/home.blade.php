@extends('layouts.app')

@section('content')

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">

      </div>
        <div class="card col-xs-12 col-sm-12 col-md-10 col-lg-10 ">
            <div class="panel panel-default">

                <div class="panel-body" style="padding:25px;">
                    <h3>Cantidad de registros en su institución: {{$forms_qty}}</h3>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive">
                      <thead>
                        <tr>
                            <th>Nombre</th>
                            @foreach($questions as $question)
                              <th scope="col">{{$question->name}}</th>
                            @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($forms as $form)
                          <tr>
                            <td>{{$form->user->name}}</td>
                            @foreach ($form->answers as $answer)

                              @if($answer)
                                <td>{{$answer->option->name}}</td>
                              @endif
                            @endforeach

                          </tr>
                        @endforeach
                          <tr>
                            
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">

        </div>
    </div>
@endsection
