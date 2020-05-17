@extends('layouts.default')


@section('css')
    <style>
        .banner-content{
            background: rgba(000,000,000,0.5);
        }

        .cours{
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            padding: 2%;
        }
        .cours:hover{
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }

    </style>
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/19.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>S’impliquer</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>S’impliquer dans la communauté</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Causes Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Préoccupations des citoyens</h2>
                <div class="text">You can help lots of people by donating little.Leverage agile frameworks to provide a robust synopsis for <br> Organically grow the holistic world view of disruptive innovation via workplace</div>
            </div>

            <div class="row clearfix">

                @foreach($problems as $problem)
                <!-- Cause Block Two -->
                <div class="row wow fadeIn">
                    <div class="cause-block-two col-md-4 col-sm-12 col-xs-12 ">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{asset('storage/'.$problem->image)}}" alt="{{$problem->title}}"></figure>
                                <!--<div class="overlay-box"><a href="causes-single.html" class="link">Donate Now</a></div>-->
                                <div class="title-box">
                                    <!--<div class="progress-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="85"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                                    </div>-->
                                    <h3><a href="#">{{$problem->title}}</a></h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-8 col-sm-12 ">
                        <div class="text">{!!$problem->description !!}</div>
                    </div>
                </div>

                    <hr>

                @endforeach

            </div>

            <!--Styled Pagination-->
            {{$problems->links()}}
            <!--End Styled Pagination-->

        </div>
    </section>
    <!--End Causes List View Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--></span>
                <h2></h2>
            </div>

            <p class="btn-column text-center text-white"></p>
            <center style="margin-top: 1%">
                <a href="{{route('voyager.rapports-activismes.create')}}" class="btn btn-primary btn-lg text-center" style="border-radius: 0;padding: 15px;font-size: 15pt">Faire votre rapport</a>
            </center>

        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->


   {{-- <!-- engage section -->
    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Comment engager</h2>
            </div>

            <div class="row clearfix">
                <div style="font-weight: bold;margin-bottom: 3%;text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis commodi dignissimos harum, incidunt iusto laborum nihil obcaecati, odio perferendis, quaerat qui quibusdam quo quos ratione similique temporibus.
                </div>


                <div class="row text-center">
                    <div class="sec-title text-center">
                        <h2 style="font-size: 15pt">Ecrire</h2>
                    </div>

                    <button class="btn btn-primary btn-lg text-center" style="border-radius: 0">Télécharger un modèle</button>

                    <center style="margin: 15px"><h2>Les mairies</h2></center>
                    <div class="row "style="margin-left:10%;text-align: center">
                        @for($i=0;$i<3;$i++)
                        <div class="col-md-3" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h2 style="color: #4f5e6b;">11ème Arrondissement</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="mailto:example@email.com"><i class="fa fa-envelope"></i>&nbsp; example@email.com</a></li>
                                        <li><a href="#"><i class="fa fa-bookmark"></i>&nbsp; BP 872 Gbegamey</a></li>
                                        <li><a href="#"><i class="fa fa-map-pin"></i>&nbsp; Cotonou/Gbegamey</a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        @endfor

                    </div>
                </div>

                <div class="row text-center" style="margin-top: 5%">
                    <div class="sec-title text-center">
                        <h2 style="font-size: 15pt">Apeller</h2>
                    </div>

                    <button class="btn btn-primary btn-lg text-center" style="border-radius: 0">Télécharger un modèle</button>

                <center style="margin: 15px"><h2>Les mairies</h2></center>
                <div class="row" style="margin-left:10%;text-align: center">
                    @for($i=0;$i<6;$i++)
                        <div class="col-md-3  text-center" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h2 style="color: #4f5e6b;">11ème Arrondissement</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="te:example@email.com"><i class="fa fa-phone"></i>&nbsp; +229 96 42 00 00</a></li>
                                        <li><a href="te:example@email.com"><i class="fa fa-phone"></i>&nbsp; +229 96 42 00 00</a></li>
                                        <li><a href="#"><i class="fa fa-bookmark"></i>&nbsp; BP 872 Gbegamey</a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    @endfor

                </div>
            </div>

                <div class="row text-center" style="margin-top: 5%">
                    <div class="sec-title text-center">
                        <h2 style="font-size: 15pt">Visites</h2>
                    </div>


                <center style="margin: 15px"><h2>Comment ça marche</h2></center>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aspernatur doloribus enim error inventore officiis quaerat quia totam? Adipisci amet dignissimos id ipsum nam, nemo provident quas veniam.
                    </div>

                <center style="margin: 15px"><h2>Astuces et Conseils</h2></center>
                    <ul class="row list-unstyled">
                        @for($i=0;$i<6;$i++)
                            <li class="col-md-6">
                                <i class="fa fa-chevron-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </li>
                            @endfor
                    </ul>
            </div>

            </div>
        </div>
    </section>
    <!--End engage Section -->
--}}

    <!-- press section -->
    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Contacter la Presse</h2>
            </div>

            <div class="row clearfix">
                <div style="font-weight: bold;margin-bottom: 3%;text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis commodi dignissimos harum, incidunt iusto laborum nihil obcaecati, odio perferendis, quaerat qui quibusdam quo quos ratione similique temporibus.
                </div>


                <div class="row">
                    <div class="center">

                    @foreach($presses as $press)
                        @php
                            $image = $press->logo;
                            $imagename = \Illuminate\Support\Str::replaceLast('.','-medium.',$image)
                        @endphp
                        <div class="col-md-3 col-sm-12">
                            <div class="cours row">
                                <div class="col-md-12 col-sm-12 text-center"> <img class="image-press" src="{{asset('storage/'.$imagename)}}" alt="{{$press->name}}"></div>
                                <div class="col-md-12 col-sm-12 pt-2 text-center">
                                    <h3 style="color: #4f5e6b;">{{$press->name}}</h3>
                                </div>
                                <ul class="list-unstyled text-center">
                                    <li><a style="font-size: 11pt" href="mailto:{{$press->email}}">Email : &nbsp;{{$press->email}}</a></li>
                                    <li><a style="font-size: 11pt" href="tel:{{$press->phone}}">   Téléphone : &nbsp; {{$press->phone}}</a></li>
                                </ul>
                                <div class=" badge-primary col-md-12 text-center" style="margin-top: 10%">Adresse : {{$press->adress}}</div>
                            </div>

                        </div>

                    @endforeach

                </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End engage Section -->
@endsection

@section('modals')
    <!-- report result modal -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h2 class="modal-title w-100 font-weight-bold">Engager</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="form-group md-form mb-5">
                        <!-- <i class="fa fa-user prefix grey-text"></i>-->
                        <label for="targerts">Qui engager?</label>
                        <select id="targerts" class="form-control" style="">
                            <option value="1">Engager les mairies</option>
                            <option value="2">Engager la HAAC</option>
                            <option value="3">Engager le Parlement</option>
                        </select>
                        <!--<label data-error="wrong" data-success="right" for="form34">Your name</label>-->
                    </div>

                    <div class="form-group md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form34">Votre nom</label>
                        <input type="text" id="form34" class="form-control validate">
                    </div>

                    <div class="form-group md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form29">Votre email</label>
                        <input type="email" id="form29" class="form-control validate">
                    </div>

                    <div class="form-group md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form32">Sujet</label>
                        <input type="text" id="form32" class="form-control validate">
                    </div>

                    <div class="form-group md-form">
                        <label data-error="wrong" data-success="right" for="form8">Votre message</label>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    </div>

                    <div class="md-form">
                        <input type="file" id="form32" class="form-control validate">
                        <!-- <label data-error="wrong" data-success="right" for="form8">Join a document</label>-->
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Reporter <i class="fa fa-send ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>
@stop
