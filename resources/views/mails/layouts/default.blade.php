@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        <h2 style="background: #fff;color: #30a551;text-align: center">A &nbsp; F &nbsp; R &nbsp; I &nbsp; Q &nbsp; U &nbsp; E &nbsp;&nbsp; S &nbsp;C &nbsp;H &nbsp; O &nbsp; O &nbsp;L</h2>
        @component('mail::header', ['url' => config('app.url')])
            <!-- header here -->
            <img src="{{asset('img/mail-header.png')}}" alt="logo" style="width: 100%"><br>
            <img src="{{asset('img/logo.png')}}" alt="logo" width="200">
        @endcomponent
    @endslot

    {{-- Body --}}
    <!-- Body here -->

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->

        @endcomponent
        @yield('content')
    @endslot

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
            © {{date('Y')}} Afrique School. Tous droits reservés
        @endcomponent
    @endslot
@endcomponent
