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
        figure {
            margin: 0;
        }

    </style>
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/background/19.jpg')}});height: auto" >
        <div class="auto-container">
            <div class="title-box">
                <h1>Education Citoyenne</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>Education Citoyenne</li>
                </ul>
            </div>
        </div>
    </section>

    <!--End Page Title-->

    <!-- program Section -->
    <section  class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2 style="font-size: 25pt">Programme sur les radios communautaires, pour éduquer les citoyens</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('storage/'.json_decode($communityProgram->images)[0])}}" alt=""></a></div>
                            <div class="lower-content">
                                <!--  <span class="date">14 May 2019</span>-->
                                <h3><a href="#">{!!$communityProgram->body!!}</a></h3>
                                <!--<div class="link-box"><a href="#" class="theme-btn btn-style-one">Plus</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                @for ($i = 0; $i < count(json_decode($communityProgram->images)); $i++)
                    @php

                        $images = (json_decode($communityProgram->images));
                        $imagename = \Illuminate\Support\Str::replaceLast('.','-cropped.',$images[$i]);
                        $imagename_original = $images[$i];
                    @endphp

                    <!-- News Block Two -->
                        <div class="news-block-two wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="{{asset('storage/'.$imagename_original)}}" class="light-box" data-fancybox="gallery">
                                                <img src="{{asset('storage/'.$imagename)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--<span class="date">16 May 2019</span>
                                <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </section>
    <!--End programm Section -->

    <!-- community radio section -->
    <section class="news-section" style="margin-top: -10%">
        <div class="auto-container">

            <div class="row">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Radios Communautaires</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="center">
                    @foreach($radios as $radio)
                        @php
                            $image = $radio->logo;
                            $imagename = \Illuminate\Support\Str::replaceLast('.','-medium.',$image)
                        @endphp
                        <div class="col-md-3 col-sm-12">
                            <div class="cours row">
                                <div class="col-md-12 col-sm-12 text-center"> <img class="image-press" src="{{asset('storage/'.$imagename)}}" alt="{{$radio->name}}"></div>
                                <div class="col-md-12 col-sm-12 pt-2 text-center">
                                    <h3 style="color: #4f5e6b;">{{$radio->name}}</h3>
                                </div>
                                <ul class="list-unstyled text-center">
                                    <li><a style="font-size: 11pt" href="mailto:{{$radio->email}}">Email : &nbsp;{{$radio->email}}</a></li>
                                    <li><a style="font-size: 11pt" href="tel:{{$radio->phone}}">   Téléphone : &nbsp; {{$radio->phone}}</a></li>
                                </ul>
                                <div class=" badge-primary col-md-12 text-center" style="margin-top: 10%">Adresse : {{$radio->adress}}</div>
                            </div>

                        </div>

                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--End community radio Section -->




    <!-- Town Hall Section -->
    <section style="margin-top: -10%" class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2 style="font-size: 25pt">Organiser des rencontres pour expliquer les problèmes aux citoyens</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('storage/'.json_decode($townHallProgram->images)[0])}}" alt=""></a></div>
                            <div class="lower-content">
                              <!--  <span class="date">14 May 2019</span>-->
                                <h3><a href="#">{!!$townHallProgram->body!!}</a></h3>
                                <!--<div class="link-box"><a href="#" class="theme-btn btn-style-one">Plus</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                @for ($i = 0; $i < count(json_decode($townHallProgram->images)); $i++)
                    @php

                       $images = (json_decode($townHallProgram->images));
                       $imagename = \Illuminate\Support\Str::replaceLast('.','-cropped.',$images[$i]);
                       $imagename_original = $images[$i];
                    @endphp

                    <!-- News Block Two -->
                        <div class="news-block-two wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="{{asset('storage/'.$imagename_original)}}" class="light-box" data-fancybox="gallery">
                                                <img src="{{asset('storage/'.$imagename)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--<span class="date">16 May 2019</span>
                                <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </section>
    <!--End Town Hall Section -->


    <!-- Event Section  -->
    <section class="event-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Evénements</h2>
            </div>

            @include('pages.partials.events')
        </div>
    </section>
    <!--End Event Section  -->


    <!-- Documments Section -->
    <section style="margin-top: -10%;background-color: #FFF" class="news-section" >
        <div class="auto-container">
            <center style="margin: 15px"><h2>Modèles</h2></center>
            <ul class="row list-unstyled">
                @for($i=0;$i<6;$i++)
                    <li class="col-md-6">
                        <i class="fa fa-chevron-right"></i><a href="#"> <i class="fa fa-file-word-o"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
    <!--End Documments Section -->


    <!-- Door-to-Door Section -->
    <section style="margin-top: -10%" class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2 tyle="font-size: 25pt">Porte à porte pour créer les groupes sur les réseaux sociaux</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('storage/'.json_decode($doorTodoorProgram->images)[0])}}" alt=""></a></div>
                            <div class="lower-content">
                                <!--  <span class="date">14 May 2019</span>-->
                                <h3><a href="#">{!!$doorTodoorProgram->body!!}</a></h3>
                                <!--<div class="link-box"><a href="#" class="theme-btn btn-style-one">Plus</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                @for ($i = 0; $i < count(json_decode($doorTodoorProgram->images)); $i++)
                    @php

                        $images = (json_decode($doorTodoorProgram->images));
                        $imagename = \Illuminate\Support\Str::replaceLast('.','-cropped.',$images[$i]);
                        $imagename_original = $images[$i];
                    @endphp

                    <!-- News Block Two -->
                        <div class="news-block-two wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="{{asset('storage/'.$imagename_original)}}" class="light-box" data-fancybox="gallery">
                                                <img src="{{asset('storage/'.$imagename)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--<span class="date">16 May 2019</span>
                                <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </section>
    <!--End Door-to-Door Section -->


    <!-- issues audio radio section -->
    <section class="news-section col-sm-12" style="margin-top: -10%">
        <div class="auto-container">

            <div class="row text-center">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Explications des problèmes dans les langues locales</h2>
                </div>

                <div class="row justify-content-center" style="text-align: center">
                    @foreach($problemLocaux as $problem)
                        @php
                        $path = json_decode($problem->path)[0]->download_link;
                        @endphp
                        <div class="col-md-4">
                            <div class="cours row">
                                <!--<div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>-->
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h5 style="color: #4f5e6b;text-align: left;font-weight: bold">{{$problem->title}}</h5>

                                    <div>
                                        <figure>
                                            <figcaption>Ecoûtez en langue locale:</figcaption>
                                        </figure>
                                        <audio controls>
                                            <source  src="{{asset('storage/'.$path)}}" type="audio/mp3">
                                            Your browser does not support the audio element.
                                        </audio>

                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>



        </div>
    </section>
    <!--End issues radio Section -->


    <!-- news audio radio section -->
    <section class="news-section col-sm-12" style="margin-top: -5%;padding : 5px;">
        <div class="auto-container">
            <hr style="color: #0d3349;height: 15px;">

            <div class="row text-center">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Actualité en langue locale</h2>
                </div>

                <div class="row justify-content-center" style="text-align: center">
                    @foreach($journauxLocaux as $journal)
                        @php
                            $path = json_decode($journal->path)[0]->download_link;
                        @endphp
                        <div class="col-md-4">
                            <div class="cours row">
                            <!--<div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>-->
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h5 style="color: #4f5e6b;text-align: left;font-weight: bold">{{$journal->title}}</h5>

                                    <div>
                                        <figure>
                                            <figcaption>Ecoûtez en langue locale:</figcaption>
                                        </figure>
                                        <audio controls>
                                            <source  src="{{asset('storage/'.$path)}}" type="audio/mp3">
                                            Your browser does not support the audio element.
                                        </audio>

                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>



        </div>
    </section>
    <!--End news radio Section -->

    <!--help concil Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Aidez votre Mairie</h2>
                <div class="text">
                    You can help lots of people by donating little.Leverage agile frameworks to provide a robust synopsis for <br> Organically grow the holistic world view of disruptive innovation via workplace
                </div>
            </div>

        </div>
    </section>
    <!--End help consil List View Section-->

    <center style="">
        <a href="{{route('voyager.stories.create')}}" class="btn btn-primary btn-lg text-center"     style="border-radius: 0;padding: 15px;font-size: 15pt">Raconter un success story</a>

    </center>


@endsection
