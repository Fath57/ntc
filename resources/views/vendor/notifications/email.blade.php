@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Bonjour !')
@endif
@endif

{{-- Intro Lines --}}
Vous recevez ce mail parceque nous avons reçu  une demande
de réinitialisation du mot de passe de votre compte.

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'success';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Réinitialiser le mot de passe
@endcomponent
@endisset

{{-- Outro Lines --}}
Ce lien de réinitialisation expirera dans 60 minutes.<br>
S'il ne s'agit pas de vous alors faites rien.

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Cordialement')....<br>
<small>Afrique School</small>
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si vous n'arrivez pas à cliquer le bouton \":actionText\" , copier et coller le lien ci dessous".
    'dans votre navigateur: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endslot
@endisset
@endcomponent
