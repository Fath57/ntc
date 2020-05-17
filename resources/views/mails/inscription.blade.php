@extends('mails.layouts.default')
@section('content')
    <div class="row">
        Bonjour {{$user->name}},<br><br>
        Pour avoir accès à la plateforme nous devons procéder à la validation
        de votre compte. <a href="{{ route('user.verify',$user->remember_token)}}">Cliquez sur ce lien pour valider votre compte </a>
        <br><br>
        <br><br>
        @component('mail::button', ['url' => route('user.verify',$user->remember_token), 'color' => '#166D95'])
            Valider mon compte
        @endcomponent
    </div>
@stop

