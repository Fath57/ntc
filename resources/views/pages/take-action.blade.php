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
                <h1>Agir</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>Agir</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Causes Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Problèmes récents</h2>
                <div class="text">You can help lots of people by donating little.Leverage agile frameworks to provide a robust synopsis for <br> Organically grow the holistic world view of disruptive innovation via workplace</div>
            </div>

            <div class="row clearfix">

                @for($i=0;$i<6;$i++)
                <!-- Cause Block Two -->
                <div class="cause-block-two col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/cause-15.jpg" alt=""></figure>
                            <!--<div class="overlay-box"><a href="causes-single.html" class="link">Donate Now</a></div>-->
                            <div class="title-box">
                                <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="85"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                                </div>
                                <h3><a href="causes-single.html">Drought And Hunger</a></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Integer et diam libero. Praesent  varius nisi. Nunc vCapitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override .</div>

                        </div>
                    </div>
                </div>

                    @endfor

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
    <!--End Causes List View Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--></span>
                <h2></h2>
            </div>

            <div class="btn-column text-center">
                <select class="form-control" style="">
                    <option value="1">Engager les mairies</option>
                    <option value="2">Engager la HAAC</option>
                    <option value="3">Engager le Parlement</option>
                </select>
            </div>
        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->


    <!-- engage section -->
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

                <center style="margin-top: 10%">
                    <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalContactForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Faire un rapport</button>

                </center>


            </div>
        </div>
    </section>
    <!--End engage Section -->




    <!-- press section -->
    <section class="news-section" style="margin-top: -10%">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Contacter la Presse</h2>
            </div>

            <div class="row clearfix">
                <div style="font-weight: bold;margin-bottom: 3%;text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis commodi dignissimos harum, incidunt iusto laborum nihil obcaecati, odio perferendis, quaerat qui quibusdam quo quos ratione similique temporibus.
                </div>


                    <div class="row "style="margin-left:10%;text-align: center">
                        @for($i=0;$i<3;$i++)
                        <div class="col-md-3" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h2 style="color: #4f5e6b;">ORTB</h2>
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





            </div>
        </div>
    </section>
    <!--End engage Section -->




@endsection