<li>
@if (auth()->check())
    <a class="btn btn-success" style="color: #fff;font-weight: bold;margin-right: 15px;border-radius: 0" href="{{route('voyager.dashboard')}}">
        <i class="fa fa-tachometer"></i> Tableau de bord
    </a>
        <a class="btn btn-success" style="color: #fff;font-weight: bold;margin-right: 15px;border-radius: 0" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>  Deconnexion
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
@else
    <a class="btn btn-success" style="color: #fff;font-weight: bold;margin-right: 35px;border-radius: 0" href="{{route('ntc.inscription')}}">
        <i class="fa fa-user-plus"></i>&nbsp; Devenir NTC
    </a>

     <a class="btn btn-success" style="color: #fff;font-weight: bold;border-radius: 0" href="{{route('voyager.login')}}">
        <i class="fa fa-user"></i> &nbsp; Connexion
    </a>
@endif
</li>
