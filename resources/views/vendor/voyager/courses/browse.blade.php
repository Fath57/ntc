@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <!--<h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>-->
            <a href="{{route('voyager.modules.index')}}" class="btn btn-warning">
                <span class="glyphicon glyphicon-arrow-left"></span>
                Retour à la page précédente
            </a>
            @if(isset($progress) && $progress->progress == 100)
            <div class="row" style="padding: 5px;display: inline-block;margin-left: 10px">
                @if ($progress->examinated==1)

                    <a  href="{{route('modules.exam.result',$module->slug)}}" title="Cliquer pour consulter le résultat" class="btn btn-info ">Vous avez déjà passé l'examen le {{\Carbon\Carbon::parse($progress->exam_date)->format("d/m/Y")}} </a>
                    @if ($module->rapportModuleSoumis($module->id,auth()->id()))
                        <a href="{{route('modules.exam.certificate',$module->slug)}}" title="Cliquer pour télécharger votre certificat" class="btn btn-warning"><i class="fa fa-graduation-cap"></i> Certificat </a>
                    @else
                        <a href="{{asset("storage/".json_decode($module->consigne_tp)[0]->download_link)}}" target="_blank" class="btn btn-warning"><i class="fa fa-industry"></i> Travaux pratique</a>
                    @endif
                @else
                    <a href="{{route('modules.exam',$module->slug)}}" class="btn btn-success">Passer l’Évaluation Finale</a>
                @endif
        </div>
            @endif


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
                                        @if($data->status== \App\Models\Course::STATUS_PUBLISHED)
                                        <div class="card mb-3 col-sm-12 col-md-12" style="padding: 15px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h3 class="card-title">{{$data->module->titre}} | {{$data->title}}
                                                        </h3>
                                                        <p class="card-text">
                                                            {{\Illuminate\Support\Str::limit($data->summary,500)}}
                                                        </p>
                                                        @php
                                                            $progress = \App\Models\CourseProgress::where('user_id',auth()->id())->where('course_id',$data->id)->first();
                                                        @endphp

                                                        <h5>
                                                            <a class="btn btn-primary" href="{{route('courses.read',$data->slug)}}">Suivre ce module </a>
                                                        </h5>
                                                        <!--<h5>
                                                            <span>Nombre de chapitre : {{$data->nombre_chapitre}}</span>
                                                        </h5>-->
                                                        @if ($progress)
                                                            <h6>
                                                                @if ($progress->end_date!=null)
                                                                    <span class="badge badge-success" style="padding: 2px;color: #FFF;border-radius: 0"><i class="glyphicon glyphicon-check"></i> Vous avez terminé ce module</span><br>
                                                                @endif

                                                                <br>
                                                                <em> Commencé le {{\Carbon\Carbon::parse($data->begin_date)->format("d/m/Y") }}</em>
                                                                @if ($progress->end_date!=null)
                                                                    <em> | Fini le  {{\Carbon\Carbon::parse($data->end_date)->format("d/m/Y") }}</em>
                                                                @endif
                                                            </h6>
                                                        @endif

                                                    </div>
                                                </div>
                                               <!-- <p class="card-text"><small class="text-muted">Ajouté {{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</small></p>-->
                                                <div  class="no-sort no-click" id="bread-actions">
                                                    @if ($progress && $progress->end_date== null)
                                                        <a style="margin: 5px" href="{{route('courses.finish',$data->slug)}}" title="Marquer le cours comme fini" class="btn btn-sm btn-info pull-right view">
                                                            <span class="hidden-xs hidden-sm">J'ai terminé ce module</span>
                                                        </a>
                                                    @endif
                                                    @foreach($actions as $action)
                                                        @if (!method_exists($action, 'massAction'))
                                                            @include('voyager::bread.partials.actions', ['action' => $action])
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @else
                                    <div class="card mb-3 col-sm-12 col-md-12" style="padding: 15px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h3 class="card-title">{{$data->module->titre}} | {{$data->title}}
                                                        <span>  @if($data->status==\App\Models\Course::STATUS_PUBLISHED)<span class="badge badge-success">En ligne</span>@else <span class="badge badge-danger"> Hors ligne </span>@endif</span>
                                                    </h3>
                                                    <p class="card-text">
                                                        {{\Illuminate\Support\Str::limit($data->summary,500)}}
                                                    </p>
                                                    <h5>
                                                        <a class="btn btn-primary" href="{{route('courses.read',$data->slug)}}">Suivre ce module </a>
                                                    </h5>
                                                    <!--<h5>
                                                        <span>Nombre de chapitre : {{$data->nombre_chapitre}}</span>
                                                    </h5>-->

                                                </div>
                                            </div>
                                            <!--<p class="card-text"><small class="text-muted">Ajouté {{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</small></p>-->
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
