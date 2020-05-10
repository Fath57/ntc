@extends('layouts.default')
@section('title')
    {{$cj->name}}
@stop
@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/31.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>{{$cj->name}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('cj')}}">Cercle des Jeunes </a></li>
                    <li>{{$cj->name}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image wow fadeIn">
                                <img src="images/resource/news-9.jpg" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="post-date">Créé  le {{\Carbon\Carbon::parse($cj->created_at)->format("d-m-Y")}}</div>
                                <h3>Pourquoi le {{$cj->name}} ?</h3>
                                <ul class="post-info">
                                    <li><span class="icon fa fa-user"></span>{{$cj->coordonnateur->name}}</li>
                                    <!--<li><span class="icon fa fa-heart-o"></span>35 Likes</li>-->
                                    <li><span class="icon fa fa-newspaper-o "></span>{{$cj->events->count()}}</li>
                                </ul>
                                <div class="text">
                                    {!! $cj->about !!}
                                     </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">



                        <!-- Testimonial Widget -->
                        <div class="sidebar-widget testimonial-widget">
                            <div class="inner-widget" style="background-image:url(images/resource/testimonial-1.jpg)">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    @for ($i = 0; $i < 3; $i++)
                                        <!--Testimonial Widget Block-->
                                            <div class="testimonial-widget-block">
                                                <div class="inner-block">
                                                    <div class="quote-icon">
                                                        <span class="icon fa fa-quote-left"></span>
                                                    </div>
                                                    <div class="text">{{$cj->slogan}} </div>
                                                    <!--<div class="author">John Dou - <span>Donater</span></div>-->
                                                </div>
                                            </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Evenys -->
                        <div class="sidebar-widget upcoming-events">
                            <div class="sidebar-title">
                                <h2>Nos événements</h2>
                            </div>
                            <div class="widget-content">

                                @foreach($cj->events as $event)
                                <!--Event Info-->
                                <div class="event-info style-three">
                                    <div class="info-inner">
                                        <div class="post-date">{{\Carbon\Carbon::parse($event->created_at)->format('d')}}<span>{{\Carbon\Carbon::parse($event->created_at)->format('M')}}</span></div>
                                        <h3><a href="{{route('event.detail',$event->slug)}}">{{$event->title}}</a></h3>
                                        <ul>
                                            <li><span class="icon fa fa-clock-o"></span>à {{\Carbon\Carbon::parse($event->created_at)->format('H:i')}}</li>
                                            <li><span class="icon fa fa-map-marker"></span>{{$event->location}}</li>
                                        </ul>
                                    </div>
                                </div>
                                    @endforeach


                            </div>
                        </div>



                        <!-- Autres CJ -->
                        @if (count($autresCj)>0)
                            <div class="sidebar-widget popular-tags">
                                <div class="sidebar-title"><h2>Autres CJ</h2></div>
                                @foreach($autresCj as $cj)
                                    <a href="{{route('cj.detail',$cj->slug)}}">{{$cj->name}}</a>
                                @endforeach

                            </div>
                        @endif


                    </aside>
                </div>

            </div>

        </div>
    </div>


@endsection

@section('modals')
    <div class="modal fade" id="create-cj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold">Créer un Cercle de Jeune</h4>
                    <a style="color: #fff;float: right"  data-dismiss="modal" aria-label="Close">
                        Fermer
                    </a>
                </div>
                <form id="quiz-form">
                    <div class="modal-body mx-3">

                        <section id="section-1-cj">
                            <h3 class="text-center" style="margin: 15px;text-decoration: underline">Questionnaire</h3>

                            <div class="md-form mb-5">
                                <h4>Désirez-vous contribuer bénévolement à la formation des jeunes de votre quartier ?</h4>
                               <br>
                                <input type="radio" name="q1" id="q1-yes" required class="validate" value="1"> <label for="q1-yes" style="margin-right: 2%">Oui</label>
                                <input type="radio" name="q1" id="q1-no" required class="validate" value="0"> <label for="q1-no">Non</label>
                            </div>


                            <hr>
                            <div class="md-form mb-5">
                                <h4>Y-a-t-il une ou plusieurs écoles secondaires (privée ou publique) dans votre quartier ?</h4>
                              <br>
                                <input type="radio" name="q2" id="q2-yes" required class="validate" value="1"> <label for="q2-yes" style="margin-right: 2%">Oui</label>
                                <input type="radio" name="q2" id="q2-no" required class="validate" value="0"> <label  for="q2-no">Non</label>
                            </div>

                            <hr>

                            <div class="md-form mb-5">
                                <h4>
                                    Pourriez-vous dédier quatre heures deux samedis, chaque mois pour organiser des
                                    formations au profit des jeunes de votre quartier ?
                                </h4>
                                <br>
                                <input type="radio" name="q3" id="q3-yes" required class="validate" value="1"> <label for="q3-yes" style="margin-right: 2%">Oui</label>
                                <input type="radio" name="q3" id="q3-no" required class="validate" value="0"> <label  for="q3-no">Non</label>
                            </div>


                            <hr>
                            <div class="md-form mb-5">
                                <h4>
                                    Pourriez-vous convaincre quatre amis de se joindre à vous pour vous aider à organiser
                                    des activités au profit des jeunes de votre quartier ?
                                </h4>
                                <br>
                                <input type="radio" name="q4" id="q4-yes" required class="validate" value="1"> <label for="q4-yes" style="margin-right: 2%">Oui</label>
                                <input type="radio" name="q4" id="q4-no" required class="validate" value="0"> <label  for="q4-no">Non</label>
                            </div>

                            <hr>

                            <div class="md-form mb-5">
                                <h4>
                                    Pourriez-vous ensemble avec vos amis suivre une formation en ligne de quatre heures
                                    par semaine pendant un mois pour devenir Coordonnateur CJ ?
                                </h4>
                                <br>
                                <input type="radio" name="q5" id="q5-yes" required class="validate" value="1"> <label for="q5-yes" style="margin-right: 2%">Oui</label>
                                <input type="radio" name="q5" id="q5-no" required class="validate" value="0"> <label  for="q5-no">Non</label>
                            </div>

                            <div class="alert form-error-viewer alert-danger" style="display: none"></div>

                            <div class=" text-center">
                                <button  id="submit-quiz" class="btn btn-primary waves-effect text-left section-btn" style="padding: 10px;border-radius: 0px;margin: 10px" type="submit">
                                <span class="form-submit-btn">
                                     Soumettre
                                </span>
                                    <span class="form-loader" style="display: none">
                                   <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Soumission en cours...
                               </span>
                                </button>
                            </div>

                        </section>




                    </div>
                </form>
                <section id="success-section" style="text-align: center;display: none">
                    <img src="{{asset('images/Checkmark.gif')}}" style="width: 30%;margin: auto" alt="success">

                    <p>
                        Connectez vous ou créer un compte pour avoir accès aux cours destinés aux  coordonnateur CJ en vue de démarrer
                        l’initiative CJ dans votre quartier.
                    </p>
                    <br>
                    <button  data-toggle="modal" data-target="#login-modal" class="choice-btn btn btn-primary" style="padding: 10px;border-radius: 0px;margin: 10px">Connexion</button>
                    <button  data-toggle="modal" data-target="#modalregisterbecomentc" class="choice-btn_ btn btn-primary" style="padding: 10px;border-radius: 0px;margin: 10px">S'inscrire</button>

                </section>
                {{--<div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Sign Up <i class="fa fa-send ml-1"></i></button>
                </div>--}}
            </div>
        </div>
    </div>

    <!-- register become-ntc modal -->
    <div class="modal fade" id="modalregisterbecomentc" tabindex="-1" role="dialog" aria-labelledby="SignUp"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold">Devenir NTC | Inscription</h4>
                    <a style="color: #fff;float: right"  data-dismiss="modal" aria-label="Close">
                        Fermer
                    </a>
                </div>
                <form id="register-form">
                    <input type="hidden" value="cj" name="cj">
                    <div class="modal-body mx-3">

                        <div class="alert form-error-viewer alert-danger" style="display: none"></div>

                        <section id="section-1">
                            <h3>Informations personnelles</h3>

                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="nom">Votre nom</label>
                                <input type="text" id="nom" required class="form-control validate">
                                <small id="nomHelp" class="form-text"  style="color: red"></small>

                            </div>
                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="prenom">Votre prénom</label>
                                <input type="text"  id="prenom" name="prenom" class="form-control validate">
                                <small id="prenomHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="dateNaissance">Date de naissance</label>
                                <input type="date" id="dateNaissance"  name="date_naissance" class="form-control validate">
                                <small id="dateNaissanceHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="lieuNaissance">Lieu de naissance</label>
                                <input type="text" id="lieuNaissance" name="lieu_naissance" class="form-control validate">
                                <small id="lieuNaissanceHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5 form-group">
                                <select type="text" id="pays" class="form-control validate">
                                    <option>Pays de naissance</option>
                                    <option>Algerie</option>
                                    <option>Bénin</option>
                                    <option>Togo</option>
                                    <option>Gabon</option>
                                    <option>Guinée</option>
                                </select>
                                <small id="paysHelp" class="form-text"  style="color: red"></small>
                            </div>


                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="tel">Tel</label>
                                <input type="number" name="tel" id="tel" class="form-control validate">
                                <small id="telHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="numeroWhat">Numéro WhatsApp</label>
                                <input type="number" id="numeroWhat"  class="form-control validate">
                                <small id="numeroWhatHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <br>
                            <div class=" text-center form-group ">
                                <button class="btn btn-primary section-btn" id="next1">Suivant</button>
                            </div>

                        </section>

                        <section id="section-2"  style="display: none">
                            <h3>Adresse</h3>
                            <div class="md-form mb-5 form-group">
                                <label  data-error="" data-success="" for="adress1">Adresse 1*</label>
                                <input id="adress1" type="text"  class="form-control validate">
                                <small id="adress1Help" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5 form-group">
                                <label  data-error="" data-success="" for="adress2">Adresse 2</label>
                                <input id="adress2" type="text"  class="form-control validate">
                            </div>


                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="arrondissement">Arrondissement</label>
                                <input id="arrondissement" name="arrondissement" type="text"  class="form-control validate">
                                <small id="arrondissementHelp" class="form-text"  style="color: red"></small>

                            </div>


                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="quartier">Quartier</label>
                                <input type="text" id="quartier" name="quartier" class="form-control validate">
                                <small id="quartierHelp" class="form-text"  style="color: red"></small>

                            </div>
                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="profession">Profession</label>
                                <input type="text" name="profession" id="profession"  class="form-control validate">
                                <small id="professionHelp" class="form-text"  style="color: red"></small>
                            </div>
                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="centre_interet">Centres d'intérêts</label>
                                <input type="text" name="centre_interet" id="centre_interet" class="form-control validate">
                                <small id="centre_interetHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="text-center form-group">
                                <button class="btn btn-dark section-btn" id="prev2">Retour</button>
                                <button class="btn btn-primary section-btn" id="next2">Suivant</button>
                            </div>

                        </section>

                        <section id="section-3"  style="display: none">
                            <h3>Informations de connexion</h3>


                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="username">Nom d'utilisateur/Email</label>
                                <input type="email" name="username" id="username" class="form-control validate">
                                <small id="usernameHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="md-form mb-5 form-group">
                                <label data-error=""  data-success="" for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control validate">
                                <small id="passwordHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="md-form mb-5 form-group">
                                <label data-error="" data-success="" for="confirm_password">Confirmer mot de password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control validate">
                                <small id="confirm_passwordHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class=" text-center">
                                <button class="btn btn-dark section-btn" id="prev3">Retour</button>
                                <button  id="submit-btn" class="btn btn-info waves-effect text-left section-btn" type="submit">
                                <span class="form-submit-btn">
                                     S'inscrire
                                </span>
                                    <span class="form-loader" style="display: none">
                                   <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Inscription en cours...
                               </span>
                                </button>
                            </div>
                        </section>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- login become-ntc modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold">Devenir NTC | Connexion</h4>
                    <a style="color: #fff;float: right"  data-dismiss="modal" aria-label="Close">
                        Fermer
                    </a>
                </div>
                <form id="login-form">
                    <div class="modal-body mx-3">
                        <section id="section-3" >
                            <h3>Informations de connexion</h3>

                            <div class="alert form-error-viewer alert-danger" style="display: none"></div>

                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="username">Nom d'utilisateur/Email</label>
                                <input type="email" name="username" id="username" class="form-control validate">
                                <small id="usernameHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="md-form mb-5 form-group">
                                <label data-error=""  data-success="" for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control validate">
                                <small id="passwordHelp" class="form-text"  style="color: red"></small>
                            </div>


                            <div class=" text-center form-group">
                                <button  id="submit-btn" class="btn btn-primary waves-effect text-left section-btn" type="submit">
                                <span class="form-submit-btn">
                                     Connexion
                                </span>
                                    <span class="form-loader" style="display: none">
                                         <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                       Connexion en cours...
                                    </span>
                                </button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('scripts')
   @include('scripts.cj')
   @include('scripts.scripts')
    @stop
