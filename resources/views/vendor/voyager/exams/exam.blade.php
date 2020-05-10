@extends('voyager::master')

@section('page_title')
    Examen final
@stop


@section('page_header')
    <h1 class="page-title" style="background-color: #0d95e8;width: 100%;text-align: center;color: #FFF;font-size: 25pt">
        <i class="fa fa-hand-peace-o"></i> EXAMEN FINAL
    </h1>
@stop

@section('content')

    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">



                        <form action="{{route("modules.exam.pass",$module->slug)}}" method="post">
                            @csrf
                            @foreach($questions as $question)
                                <h3 style="text-decoration: underline;">Question {{$question->numero}}</h3>

                                <h5 class="form-group">
                                {!! $question->question !!}
                                  </h5>

                            <div class="form-group" style="margin-left: 5%">
                                {!! $question->propositions !!}
                            </div>
                            <div class="form-group">
                                <label for="name">Votre réponse</label>
                                <input  type="text" class="form-control" required  name="question_{{$question->id}}" placeholder="Séparez les réponses par une virgule si elles sont multiples (A,B,...)" value="">
                            </div>
                            @endforeach
                            <div class="form-group">
                                <a href="" class="btn btn-dark">Annuler</a>
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
