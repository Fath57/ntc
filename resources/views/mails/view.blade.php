<html>

@if(isset($to))
    @if($to == "school")
        <div>
            L'etudiant <a href="liensVersProfil">{{$inscription->student->frist_name. ''.$inscription->student->last_name}}</a>
            s'est inscrit dans la formation {{$inscription->formationLevel->formation}} en {{$inscription->formationLevel->level}}
            le  {{$inscription->created_at}}
        </div>
    @elseif($to == "student")
        <div>
            Votre inscription a {{$inscription->school}} dans la formation {{$inscription->formationLevel->formation}}  en {{$inscription->formationLevel->level}}licence  1 a été effectué avec succès ,
            Vous pouvez maintenant commencé par suivre vos cours
        </div>
    @elseif($to == "confirmation_school")
        <div>
            {{$admin_school}} de {{$school}} votre inscription a Afrique School est approuvée .Vous pouvez dès a présent vous connecter a votre compte
        </div>
    @endif
@else
    <div>
        <h2> De Africa School  </h2>
        <h4>
            Object {{ $data->objet }}
        </h4>
        <h2>   </h2>
    </div>
    <h2>
        : {{ $texte }}
    </h2>

@endif

</html>