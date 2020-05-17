@extends('voyager::master')

@section('page_title')
    Examen final
@stop


@section('page_header')
    <h1 class="page-title" style="background-color: #0d95e8;width: 100%;text-align: center;color: #FFF;font-size: 25pt">
        <i class="fa fa-hand-peace-o"></i> VOTRE RÉSULTAT DE L'EXAMEN
    </h1>
    <a href="{{route('voyager.modules.index')}}" class="btn btn-warning" style="margin: 10px">
        <span class="glyphicon glyphicon-list"></span>&nbsp;
        Retourner aux modules
    </a>
@stop

@section('content')

    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="row text-center">
                            <div>
                                @if ($percentage<80)
                                    <img src="{{asset("images/smileys/bad.png")}}" width="300">
                                @else
                                    <img src="{{asset("images/smileys/good.png")}}" width="300">
                                @endif
                            </div>
                        </div>
                        <div class="row" style="font-size: 45pt; text-align: center">
                            {{count($userPassResults) ."/".count($questions)}} | {{$percentage}} %
                        </div>
                        <div style="text-align: center;margin: 20px">
                            @if ($percentage<80)
                                @if ($progress->nombre_exam<env('NOMBRE_TENTATIVE_EXAMEN'))
                                    <strong style="color: #FF0000">Vous avez encore {{(5-$progress->nombre_exam)}} tentatives</strong>
                                    @else
                                    <strong style="color: #FF0000">Désolé vous avez échoué à cette évaluation</strong>
                                @endif
                            @else
                                <strong class="text-success" style="font-size: 12pt">Félicitations ! Vous pouvez passer à l’étape suivante, qui est celle des Travaux Pratiques. </strong>
                            @endif
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Questions</th>
                                        <th>Vos Réponses</th>
                                        @if ($percentage==100)
                                            <th>Réponses Correctes</th>
                                        @endif
                                        <th>Résultat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($questions as $question)
                                            @php
                                            $result = $question->results()->where('user_id',auth()->id())->first();
                                            @endphp
                                            <tr>
                                              <td>{{$question->numero}}</td>
                                              <td>{{$result->reponse}}</td>
                                                @if ($percentage==100)
                                                    <td>{{$question->reponse}}</td>
                                                @endif
                                              <td>
                                                  @if ($result->state==\App\Models\Result::FAILED)
                                                      <img src="{{asset("images/marks/no.png")}}" width="10">
                                                      @else
                                                      <img src="{{asset("images/marks/ok.jpg")}}" width="10">
                                                  @endif
                                              </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if($percentage<80 && $progress->nombre_exam<env('NOMBRE_TENTATIVE_EXAMEN'))
                                <a href="{{route('modules.exam',[$module->slug,'reprendre'])}}" class="btn btn-warning">Reprendre l'exame</a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

