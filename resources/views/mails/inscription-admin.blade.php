@extends('mails.layouts.default')
@section('content')
    <div class="row">
        Bonjour {{$user->name}},<br><br>
        Un nouvel utilisateur s'est inscrit sur.
        <br><br>
        <br><br>
        @component('mail::button', ['url' => route('voyager.login'), 'color' => '#166D95'])
            Tableau de bord
        @endcomponent
    </div>
@stop

