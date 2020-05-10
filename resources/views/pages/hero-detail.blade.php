@extends("layouts.default")

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/19.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Hero du Village</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Accueil </a></li>
                    <li>Hero du Village</li>
                </ul>
                <a href="#modalregisterbecomentc" data-toggle="modal" class="theme-btn btn-style-one"><span>Devenir un Hero</span></a>

            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!--about hero Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Apropos</h2>
                <div class="text">

                    Le programme Héros d’un village (HérosV) a pour objectifs de faire du citoyen qui a à cœur le développement de son village ou d’un village, le héros de ce village.  Pour ce faire, les membres de ce programme vont à la quête de ceux qui ont la possibilité ou les moyens d’investir dans un ou des villages et de les amener à investir dans le développement d’un village de leur choix.                </div>
            </div>

        </div>
    </section>
    <!--End about List View Section-->

    <!--villages Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center" style="margin-top: -10%">
                <h2>Villages dans le besoin</h2>
                <div class="text">You can help lots of people by donating little.Leverage agile frameworks to provide a robust synopsis for <br> Organically grow the holistic world view of disruptive innovation via workplace</div>
            </div>

            <div class="row clearfix">

                @foreach($villages as $village)
                        @php
                            $imagename = \Illuminate\Support\Str::replaceLast('.','-cropped.',$village->image)
                        @endphp

                <!-- Cause Block Two -->
                <div class="cause-block-two col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('storage/'.$imagename)}}" alt="{{$village->name}}"></figure>
                          <!--  <div class="overlay-box"><a href="causes-single.html" class="link">Donate Now</a></div>-->
                            <div class="title-box">
                               <!-- <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="85"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                                </div>-->
                                <h3><a href="#">{{$village->name}}</a></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text" title="{{$village->description}}">{{\Illuminate\Support\Str::limit($village->description,200)}} </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#">Suivant</a></li>
            </ul>
            <!--End Styled Pagination-->

        </div>
    </section>
    <!--End villages List View Section-->

    <center style="">
        <a href="{{route('voyager.stories.create')}}" class="btn btn-primary btn-lg text-center"     style="border-radius: 0;padding: 15px;font-size: 15pt">Raconter un success story</a>

    </center>

    @endsection
@section('modals')
    <!-- register become-ntc modal -->
    <div class="modal fade" id="modalregisterbecomentc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold">Devenir Hero </h4>
                    <a style="color: #fff;float: right"  data-dismiss="modal" aria-label="Close">
                        Fermer
                    </a>
                </div>
                <form id="register-form">
                    <div class="modal-body mx-3">

                        <section id="section-1">
                            <h3>Informations personnelles</h3>

                            <div class="row">
                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="nom">Votre nom</label>
                                    <input type="text" id="nom" required class="form-control validate">
                                    <small id="nomHelp" class="form-text"  style="color: red"></small>
                                </div>
                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="prenom">Votre prénom</label>
                                    <input type="text"  id="prenom" required name="prenom" class="form-control validate">
                                    <small id="prenomHelp" class="form-text"  style="color: red"></small>
                                </div>
                            </div>

                            <div class="row">

                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="dateNaissance">Date de naissance</label>
                                    <input type="date" id="dateNaissance" required name="date_naissance" class="form-control validate">
                                    <small id="dateNaissanceHelp" class="form-text"  style="color: red"></small>
                                </div>
                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="quartier">Commune / Quartier</label>
                                    <input type="text" id="quartier" required name="quartier" class="form-control validate" placeholder="Ex: Cotonou/Gbegamey">
                                    <small id="quartierHelp" class="form-text"  style="color: red"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="tel">Tel</label>
                                    <input type="number" name="tel"  required id="tel" class="form-control validate">
                                    <small id="telHelp" class="form-text"  style="color: red"></small>
                                </div>

                                <div class="md-form mb-5 col-md-6">
                                    <label data-error="" data-success="" for="profession">Profession</label>
                                    <input type="text" name="profession" id="profession"  class="form-control validate">
                                    <small id="professionHelp" class="form-text"  style="color: red"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="md-form mb-5 col-md-4">
                                    <label data-error="" data-success="" for="username">Nom d'utilisateur/Email</label>
                                    <input type="email" name="username" required id="username" class="form-control validate">
                                    <small id="usernameHelp" class="form-text"  style="color: red"></small>
                                </div>

                                <div class="md-form mb-5 col-md-4">
                                    <label data-error=""  data-success="" for="password">Mot de passe</label>
                                    <input type="password" name="password" required id="password" class="form-control validate">
                                    <small id="passwordHelp" class="form-text"  style="color: red"></small>
                                </div>

                                <div class="md-form mb-5 col-md-4">
                                    <label data-error="" data-success="" for="confirm_password">Confirmer</label>
                                    <input type="password" required name="confirm_password" id="confirm_password" class="form-control validate">
                                    <small id="confirm_passwordHelp" class="form-text"  style="color: red"></small>
                                </div>
                            </div>

                            <div class="md-form form-group mb-5 col-md-12">
                                <label data-error="" data-success="" for="username">Nom du village que vous voulez soutenir</label>
                                <input type="text" name="village" required id="village" class="form-control validate">
                                <small id="villageHelp" class="form-text"  style="color: red"></small>
                            </div>

                            <br>
                            <div class=" text-center">
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
