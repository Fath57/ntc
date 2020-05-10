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
                <div class="col-md-4"  style="margin-bottom: 15px">
                    <a href="{{route("voyager.modules.index")}}"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/voyager-home.jpg') }}')">
                        <span class="resource_label"><i class="voyager-documentation"></i> <span class="copy">{{$totalModule}} Module(s) </span></span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('voyager.users.index')}}"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/voyager-home.jpg') }}')">
                        <span class="resource_label"><i class="voyager-people"></i> <span class="copy">{{$totalMembre}} Membres</span></span>
                    </a>
                </div>
                <div class="col-md-4"  style="margin-bottom: 15px">
                    <a href="#"  class="voyager-link" style="background-image:url('{{ voyager_asset('images/compass/hooks.jpg') }}')">
                        <span class="resource_label"><i class="voyager-certificate"></i> <span class="copy">{{$totalCertificate}} Certificat(s) délivré(s)</span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
