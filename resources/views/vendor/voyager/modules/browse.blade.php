@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan
        @php $showCheckboxColumn = false @endphp
        @can('delete', app($dataType->model_name))
            @php $showCheckboxColumn = true @endphp
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if(isset($dataType->order_column) && isset($dataType->order_display_column))
                <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        @can('delete', app($dataType->model_name))
            @if($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach($actions as $action)
            @if (method_exists($action, 'massAction'))
                @php $showCheckboxColumn = true @endphp
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
        @include('voyager::multilingual.language-selector')
            @foreach($categories as $category)
               <a class="{{($category_id==$category->slug)?'btn btn-dark':'btn btn-success'}}" href="{{route('voyager.modules.index',['category_id'=>\Illuminate\Support\Str::slug($category->title)])}}">{{$category->title}}</a>
            @endforeach

    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if ($isServerSide)
                            <form method="get" class="form-search">
                                <div id="search-input">
                                    <div class="col-2">
                                        <select id="search_key" name="key">
                                            @foreach($searchNames as $key => $name)
                                                <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)){{ 'selected' }}@endif>{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select id="filter" name="filter">
                                            <option value="contains" @if($search->filter == "contains"){{ 'selected' }}@endif>contains</option>
                                            <option value="equals" @if($search->filter == "equals"){{ 'selected' }}@endif>=</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control" placeholder="{{ __('voyager::generic.search') }}" name="s" value="{{ $search->value }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                @if (Request::has('sort_order') && Request::has('order_by'))
                                    <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
                                    <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
                                @endif
                            </form>
                        @endif

                            <div class="row">
                            @foreach($dataTypeContent as $data)
                                    @if (auth()->user()->role->name == \App\User::MEMBRE)
                                        @if ($data->online ==1)
                                            @php
                                                $progress = \App\Models\Progress::where('user_id',auth()->id())->where('module_id',$data->id)->first();
                                            @endphp
                                            <div class="card mb-3 col-sm-12 col-md-12" style="padding: 15px;">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <img src="{{asset("storage/".$data->image)}}" style="width: 100%" class="card-img" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{$data->titre}}</h4>
                                                            <p class="card-text">
                                                                {{\Illuminate\Support\Str::limit($data->summary,100)}}
                                                            </p>
                                                            <h5>


                                                                @if(count(json_decode($data->pre_evaluation))>0)
                                                                <a href="{{asset("storage/".json_decode($data->pre_evaluation)[0]->download_link)}}" style="font-size: 15pt"> Pré Evaluation </a>
                                                                    @endif
                                                            </h5>

                                                            <h5>
                                                                <span>Nombre de modules : {{$data->courses->count()}}</span> |
                                                               <span> Ce cours vous prendra : {{$data->duree}}</span>
                                                                <!--<span><i class="fa fa-bar-chart-o"></i> {{$data->level  }}</span>-->
                                                            </h5>

                                                            @if ($progress)
                                                                <h5>Progression : </h5>
                                                                <div class="progress" >
                                                                    <div class="progress-bar"  role="progressbar" style="width: {{$progress->progress}}%;" aria-valuenow=" {{$progress->progress}}" aria-valuemin="0" aria-valuemax="100"> {{$progress->progress}}%</div>
                                                                </div>
                                                            @endif
                                                            <h5>
                                                                <a href="{{route('module.courses',$data->slug)}}" class="btn btn-success"><i class="glyphicon glyphicon-book"></i> Consulter le cours </a>
                                                                @if($progress && $progress->progress == 100)
                                                                @if ($progress->examinated==1 && $progress->exam_result>=80)
                                                                  <a href="{{route('modules.exam.result',$data->slug)}}" title="Cliquer pour consulter le résultat" class="btn btn-info">Vous avez déjà passé l'évaluation le {{\Carbon\Carbon::parse($progress->exam_date)->format("d/m/Y")}} </a>
                                                                  @if ($data->rapportModuleSoumis($data->id,auth()->id()))
                                                                            <a href="{{route('modules.exam.certificate',$data->slug)}}" title="Cliquer pour télécharger votre certificat" class="btn btn-warning"><i class="fa fa-graduation-cap"></i> Télécharger votre certificat </a>
                                                                       @else
                                                                             <br>
                                                                             <small class="text-danger">Vous devez faire les travaux pratique pour avoir votre certificat</small>
                                                                              <br>
                                                                        @if (count(json_decode($data->consigne_tp))>0)
                                                                                <a href="{{asset("storage/".json_decode($data->consigne_tp)[0]->download_link)}}" target="_blank" class="btn btn-warning"><i class="fa fa-industry"></i> Travaux pratique</a>
                                                                            @endif
                                                                        @endif
                                                                @else
                                                                    @if ($progress->nombre_exam==0)
                                                                            <a href="{{route('modules.exam',$data->slug)}}" class="btn btn-info">Examen final</a>
                                                                            @else
                                                                            @if ($progress->nombre_exam<env('NOMBRE_TENTATIVE_EXAMEN'))
                                                                            <a href="{{route('modules.exam',[$data->slug,'reprendre'])}}" class="btn btn-info">Reprendre l'évaluation final</a>
                                                                                @else
                                                                                <a onclick="return false;" class="btn btn-danger">Vous avez raté cette évaluation</a>
                                                                            @endif
                                                                        @endif
                                                                @endif
                                                                    <div>
                                                                        <a href="{{route('voyager.rapport-tps.index')}}" class="btn btn-default">Rapport à soumettre</a>

                                                                    </div>
                                                                @endif

                                                            </h5>

                                                        </div>
                                                    </div>
                                                  <!--  <p class="card-text"><small class="text-muted">Ajouté {{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</small></p>-->
                                                  <!--  <div  class="no-sort no-click" id="bread-actions">
                                                        @foreach($actions as $action)
                                                            @if (!method_exists($action, 'massAction'))
                                                                @include('voyager::bread.partials.actions', ['action' => $action])
                                                            @endif
                                                        @endforeach
                                                    </div>-->
                                                </div>
                                            </div>
                                        @endif
                                        @else
                                        @php
                                            $progress = \App\Models\Progress::where('user_id',auth()->id())->where('module_id',$data->id)->first();
                                        @endphp
                                        <div class="card mb-3 col-sm-12 col-md-12" style="padding: 15px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="{{asset("storage/".$data->image)}}" style="width: 100%" class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$data->titre}} <br>
                                                            @if($data->course_category_id)
                                                            <span class="badge badge-dark">{{getCategoryById($data->course_category_id)->title}}</span> |
                                                            @endif
                                                            <span>  @if($data->online==1)<span class="badge badge-success">En ligne</span>@else <span class="badge badge-danger"> Hors ligne </span>@endif</span>
                                                        </h4>
                                                        <p class="card-text">
                                                            {{\Illuminate\Support\Str::limit($data->summary,100)}}
                                                        </p>
                                                        <h5>

                                                            @if (count(json_decode($data->pre_evaluation))>0 )
                                                                <a href="{{asset("storage/".json_decode($data->pre_evaluation)[0]->download_link)}}" style="font-size: 15pt">Pré Evaluation</a>
                                                            @endif
                                                        </h5>
                                                        <h5>
                                                            <a href="{{route('module.courses',$data->slug)}}" class="btn btn-info">Consulter | Ajouter des modules </a>
                                                        </h5>
                                                        <h5>
                                                            <span>Nombre de modules : {{$data->courses->count()}}</span> |
                                                            <span>Ce cours vous prendra : {{$data->duree}}</span>
                                                           <!-- <span><i class="fa fa-bar-chart-o"></i> {{$data->level  }}</span>-->
                                                        </h5>
                                                    </div>
                                                </div>
                                              <!--  <p class="card-text"><small class="text-muted">Ajouté {{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</small></p>-->
                                                <div  class="no-sort no-click" id="bread-actions">
                                                    @foreach($actions as $action)
                                                        @if (!method_exists($action, 'massAction'))
                                                            @include('voyager::bread.partials.actions', ['action' => $action])
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                @endforeach

                            </div>

                        @if ($isServerSide)
                            <div class="pull-left">
                                <div role="status" class="show-res" aria-live="polite">{{ trans_choice(
                                    'voyager::generic.showing_entries', $dataTypeContent->total(), [
                                        'from' => $dataTypeContent->firstItem(),
                                        'to' => $dataTypeContent->lastItem(),
                                        'all' => $dataTypeContent->total()
                                    ]) }}</div>
                            </div>
                            <div class="pull-right">
                                {{ $dataTypeContent->appends([
                                    's' => $search->value,
                                    'filter' => $search->filter,
                                    'key' => $search->key,
                                    'order_by' => $orderBy,
                                    'sort_order' => $sortOrder,
                                    'showSoftDeleted' => $showSoftDeleted,
                                ])->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function () {
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [['targets' => -1, 'searchable' =>  false, 'orderable' => false]],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
            @else
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function(){
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked'));
            });
        });


        var deleteFormAction;
      //  $('td').on('click', '.delete', function (e) {
        $('div').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', ['id' => '__id']) }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                    }else{
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
