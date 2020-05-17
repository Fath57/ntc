@extends('voyager::master')
@section('css')

    @include('voyager::compass.includes.styles')

@stop

@section('content')

    <div class="collapsible">
        <div class="collapse-head" data-toggle="collapse" data-target="#links" aria-expanded="true" aria-controls="links">
            <h4>{{ __('voyager::compass.links.title') }}</h4>
            <i class="voyager-angle-down"></i>
            <i class="voyager-angle-up"></i>
        </div>
        <div class="collapse-content collapse in" id="links">
            <div class="row">
                <div class="col-md-6"  style="margin-bottom: 15px">
                    <a href="{{route("voyager.modules.index")}}"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/voyager-home.jpg') }}')">
                        <span class="resource_label"><i class="voyager-documentation"></i> <span class="copy">{{count(getCurrentCourses(auth()->id()))}} COURS EN PROGRÈS</span></span>
                    </a>
                </div>

                <div class="col-md-6" style="margin-bottom: 15px">
                    <a href="{{route("voyager.modules.index")}}"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/documentation.jpg') }}')">
                        <span class="resource_label"><i class="voyager-archive"></i> <span class="copy">{{count(getFinishedCourses(auth()->id()))}} COURS TERMINÉS</span></span>
                    </a>
                </div>
                <div class="col-md-6" style="margin-bottom: 15px">
                    <a href="{{route("voyager.modules.index")}}"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/documentation.jpg') }}')">
                        <span class="resource_label"><i class="voyager-archive"></i> <span class="copy">{{count(getOtherCourses(auth()->id()))}} COURS À  SUIVRE</span></span>
                    </a>
                </div>

                <div class="col-md-6"  style="margin-bottom: 15px">
                    <a href="#" onclick="return false;" class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/hooks.jpg') }}')">
                        <span class="resource_label"><i class="voyager-certificate"></i> <span class="copy">{{$totalCertificate}} Certificat(s)</span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
