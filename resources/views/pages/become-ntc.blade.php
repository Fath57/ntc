@extends('layouts.default')
@section('title')
    Devenir NTC
@stop
@section('css')
    <style>
        .cours li a{
            font-size: 12pt;
        }
    </style>
@stop
@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>

                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-2.jpg">

                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-10.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-10.jpg">
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
{{--
    <!--Fun Facts Section-->
    <div class="fun-fact-section push-up">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-support"></span>
                                <span class="count-text" data-speed="3000" data-stop="156">0</span>
                                <span class="counter-title">Mon Histoire </span>

                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-charity-3"></span>
                                <span class="count-text" data-speed="3000" data-stop="1256">0</span>
                                <span class="counter-title">Membres totals</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-donation-2"></span>
                                <span class="count-text" data-speed="3000" data-stop="176">0</span>
                                <span class="counter-title">Organisateurs</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-mother"></span>
                                <span class="count-text" data-speed="3000" data-stop="2564">0</span>
                                <span class="counter-title">Sponsors total</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->--}}

    <!-- Who We Are -->
    <section class="who-we-are" >
        <div class="inner-container">
            <!-- Packeges Tabs -->
            <div class="services-tabs tabs-box clearfix">

                <ul class="tab-buttons">
                    <li style="font-size: 15pt" data-tab="#service-1" class="tab-btn active-btn"><i class="fa fa-angle-right"></i> Introduction au Programme DNTC</li>
                    @foreach($modules as $module)
                    <li style="font-size: 15pt" data-tab="#course-cat-{{$module->id}}" class="tab-btn "><i class="fa fa-angle-right"></i> {{$module->title}} </li>
                    @endforeach
                </ul>

                <!--Tabs Container-->
                <div class="tabs-content" style="margin-top: 5%">

                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="service-1">
                        <div class="outer-box clearfix col-md-12">
                            <!-- Content Column -->
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <div class="text">
                                        <div class="inner-column">
                                            <div class="sec-title">
                                                <h2 style="font-size: 20pt">Introduction au Programme DNTC</h2>
                                                <div class="text">
                                                    Le programme Devenir un Nouveau Type de Citoyen (DNTC) est un programme d’éducation divisé en deux grandes séries de formations.                            </div>
                                            </div>

                                            <div class="row clearfix">
                                                <!-- Feature BLock -->
                                                @foreach($modules as $module)
                                                <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <div class="icon-box"><span><img style="width: 15%;border-radius: 20%" src="{{asset("storage/".$module->image)}}" alt="{{$module->title}}"></span></div>
                                                        <h3><a href="#">{{$module->title}}</a></h3>
                                                        <div class="text">{{$module->description}}</div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                            <div class="row text">
                                                Après avoir suivi avec succès tous les cours contenus dans les deux grandes séries de formations, et après avoir fourni la preuve que vos comportements en tant que citoyen(ne) se sont désormais améliorés dans tous les domaines et ont contribué dès lors à l’avancement de votre pays, vous recevrez un pins-identifiant unique qui vous distingue comme un Nouveau Type de Citoyen (NTC).
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    @foreach($modules as $module)
                    <!--Tab / Active Tab-->
                    <div class="tab" id="course-cat-{{$module->id}}">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h2 style="font-size: 20pt">{{$module->title}}</h2>
                                    <div class="text row" style="margin: 15px">
                                        <ol class="row cours list-style-two">
                                            @foreach($module->courses as $course)
                                            <li class="col-md-4"><a href="{{route('courses.read',$course->slug)}}">{{$course->title}} </a></li>
                                                @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                        @endforeach

                    </div>

                </div>
            </div>
    </section>
    <!--End Who We Are -->

    <!-- Subscribe Section -->
    {{--<section class="subscribe-section" style="background-image: url({{asset('images/background/4.jpg')}});">

        <div class="auto-container">
            <div class="title">
                <h2>Devenir un NTC</h2>
                <div class="text">
                    À travers le programme « Devenir un(e) Nouveau Type de Citoyen(ne) – DNTC », le Mouvement NTC vous offre la possibilité de changer de mentalité et de développer la responsabilité citoyenne en suivant les séries de cours en ligne sur le changement de mentalité et sur la citoyenneté, suivis d’exercice d’application sur le terrain.                 </div>
            </div>
            <div class=" text-center">

                <a href="{{route('register')}}"  class="theme-btn btn-style-one">Cliquez ICI pour vous inscrire et démarrer les cours</a>

            </div>
        </div>
    </section>--}}
    <!-- End Subscribe Section -->


    {{--<section class="event-section-two" >
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 id="cours-mentalite">Cours sur le changement de mentalité</h2>
            </div>

            <div class="row">
                <ol class="row cours list-style-two">
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">Le Programme d’Action du Gouvernement </a></li>
                    <li class="col-md-4"><a href="#">Le Programme National de Développement</a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                    <li class="col-md-4"><a href="#">La Constitution de la République du Bénin </a></li>
                </ol>
            </div>
        </div>
    </section>--}}

    <!-- Event Section Two -->
    <section class="event-section-two" style="margin-top: -10%">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Evénement à venir</h2>
            </div>
            @include('pages.partials.events')
        </div>
    </section>
    <!--End Event Section Two -->



    <!-- Success story Section -->

    <section class="causes-section-two" style="margin-top: -10%">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Les NTC racontent leurs Histoires</h2>
                <div class="text"></div>
            </div>

            <div class="causes-carousel owl-carousel owl-theme">

                @foreach($stories as $story)
                <!-- Cause Block Two -->
                <div class="cause-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('storage/'.json_decode($story->image)[0])}}" alt="{{$story->title}}"></figure>
                            <!--<div class="overlay-box"><a href="#" class="link">Sponsoriser Maintenant</a></div>-->
                            <div class="title-box">
                               <!-- <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="65"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                                </div>-->
                                <h3><a href="#">{{$story->title}}</a></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">{!!\Illuminate\Support\Str::limit($story->body,100)!!}</div>
                            <h3 class=" text-center">
                                <a href="#" class="theme-btn btn-style-three" style="border-radius: 0">Plus
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

                    @endforeach


            </div>
        </div>
    </section>
    <!-- End Success story Section -->

@endsection
@section('modals')
    <!-- register become-ntc modal -->
    <div class="modal fade" id="modalregisterbecomentc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    <div class="modal-body mx-3">

                        <section id="section-1">
                            <h3>Informations personnelles</h3>

                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="nom">Votre nom</label>
                                <input type="text" id="nom" required class="form-control validate">
                                <small id="nomHelp" class="form-text"  style="color: red"></small>

                            </div>
                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="prenom">Votre prénom</label>
                                <input type="text"  id="prenom" name="prenom" class="form-control validate">
                                <small id="prenomHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="dateNaissance">Date de naissance</label>
                                <input type="date" id="dateNaissance"  name="date_naissance" class="form-control validate">
                                <small id="dateNaissanceHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="lieuNaissance">Lieu de naissance</label>
                                <input type="text" id="lieuNaissance" name="lieu_naissance" class="form-control validate">
                                <small id="lieuNaissanceHelp" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5">
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


                            <div class="md-form mb-5">
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
                            <div class=" text-center">
                                <button class="btn btn-primary section-btn" id="next1">Suivant</button>
                            </div>

                        </section>

                        <section id="section-2"  style="display: none">
                            <h3>Adresse</h3>
                            <div class="md-form mb-5">
                                <label  data-error="" data-success="" for="adress1">Adresse 1*</label>
                                <input id="adress1" type="text"  class="form-control validate">
                                <small id="adress1Help" class="form-text"  style="color: red"></small>

                            </div>

                            <div class="md-form mb-5">
                                <label  data-error="" data-success="" for="adress2">Adresse 2</label>
                                <input id="adress2" type="text"  class="form-control validate">
                            </div>


                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="arrondissement">Arrondissement</label>
                                <input id="arrondissement" name="arrondissement" type="text"  class="form-control validate">
                                <small id="arrondissementHelp" class="form-text"  style="color: red"></small>

                            </div>


                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="quartier">Quartier</label>
                                <input type="text" id="quartier" name="quartier" class="form-control validate">
                                <small id="quartierHelp" class="form-text"  style="color: red"></small>

                            </div>
                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="profession">Profession</label>
                                <input type="text" name="profession" id="profession"  class="form-control validate">
                                <small id="professionHelp" class="form-text"  style="color: red"></small>
                            </div>
                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="centre_interet">Centres d'intérêts</label>
                                <input type="text" name="centre_interet" id="centre_interet" class="form-control validate">
                                <small id="centre_interetHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-dark section-btn" id="prev2">Retour</button>
                                <button class="btn btn-primary section-btn" id="next2">Suivant</button>
                            </div>

                        </section>

                        <section id="section-3"  style="display: none">
                            <h3>Informations de connexion</h3>


                            <div class="md-form mb-5">
                                <label data-error="" data-success="" for="username">Nom d'utilisateur/Email</label>
                                <input type="email" name="username" id="username" class="form-control validate">
                                <small id="usernameHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="md-form mb-5">
                                <label data-error=""  data-success="" for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control validate">
                                <small id="passwordHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <div class="md-form mb-5">
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
                {{--<div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Sign Up <i class="fa fa-send ml-1"></i></button>
                </div>--}}
            </div>
        </div>
    </div>
@stop
@section('scripts')
    @include('scripts.scripts')
@stop
