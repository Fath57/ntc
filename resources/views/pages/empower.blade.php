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
    <section class="page-title" style="background-image:url(images/background/19.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Habiliter les citoyens</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>abiliter les citoyens</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- program Section -->
    <section class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2>Programmes sur les radios communautaires</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <span class="date">14 May 2019</span>
                                <h3><a href="blog-single-1.html">Do program on community radios to educate citizens.</a></h3>
                                <div class="link-box"><a href="blog-single-1.html" class="theme-btn btn-style-one">Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-1.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-2.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Nepal Earthquake: Clean Water Initiative</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-3.jpg" alt=""></a></div>
                           <!-- <span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-4.jpg" alt=""></a></div>
                          <!--  <span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Children make the most of all our People. donation</a></h4>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End programm Section -->

    <!-- Call To Action -
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--</span>
                <h2></h2>
            </div>

            <div class="btn-column text-center">
                <select class="form-control" style="">
                    <option value="1">Engagage your city concil</option>
                    <option value="2">Engagage HAAC</option>
                    <option value="3">Engagage Parlement</option>
                </select>
            </div>
        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->



    <!-- community radio section -->
    <section class="news-section" style="margin-top: -10%">
        <div class="auto-container">

            <div class="row text-center">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Radios Communautaires</h2>
                </div>

                <div class="row "style="margin-left:10%;text-align: center">
                    @for($i=0;$i<3;$i++)
                        <div class="col-md-3" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h3 style="color: #4f5e6b;">Soleil Fm</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="mailto:example@email.com"><i class="fa fa-envelope"></i>&nbsp; example@email.com</a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i>&nbsp; +229 98 00 01 02</a></li>
                                        <li><a href="#"><i class="fa fa-map-pin"></i>&nbsp; Cotonou/Gbegamey</a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    @endfor

                </div>
            </div>

           {{-- <div class="row text-center" style="margin-top: 5%">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Call</h2>
                </div>

                <button class="btn btn-primary btn-lg text-center" style="border-radius: 0">Download Template here</button>

                <center style="margin: 15px"><h2>City concils</h2></center>
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
                    <h2 style="font-size: 15pt">Visit</h2>
                </div>


                <center style="margin: 15px"><h2>How it works</h2></center>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aspernatur doloribus enim error inventore officiis quaerat quia totam? Adipisci amet dignissimos id ipsum nam, nemo provident quas veniam.
                </div>

                <center style="margin: 15px"><h2>Tips and advices</h2></center>
                <ul class="row list-unstyled">
                    @for($i=0;$i<6;$i++)
                        <li class="col-md-6">
                            <i class="fa fa-chevron-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </li>
                    @endfor
                </ul>
            </div>

            <center style="margin-top: 10%">
                <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalContactForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Report Result</button>

            </center>--}}


        </div>
    </section>
    <!--End community radio Section -->




    <!-- Town Hall Section -->
    <section style="margin-top: -10%" class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2>Mairie</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <span class="date">14 May 2019</span>
                                <h3><a href="blog-single-1.html">A Town Hall to explain issues to citizens.</a></h3>
                                <div class="link-box"><a href="blog-single-1.html" class="theme-btn btn-style-one">Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-1.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-2.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Nepal Earthquake: Clean Water Initiative</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-3.jpg" alt=""></a></div>
                           <!-- <span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-4.jpg" alt=""></a></div>
                          <!--  <span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Children make the most of all our People. donation</a></h4>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Town Hall Section -->

    <!-- Call To Action -
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--</span>
                <h2></h2>
            </div>

            <div class="btn-column text-center">
                <select class="form-control" style="">
                    <option value="1">Engagage your city concil</option>
                    <option value="2">Engagage HAAC</option>
                    <option value="3">Engagage Parlement</option>
                </select>
            </div>
        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->



    <!-- Event Section  -->
    <section class="event-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Evénements</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <!-- Event Block Two -->
                    <div class="event-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="date"><strong>04</strong> May</div>
                            <h4><a href="event-single.html">Let ‘s walk the poor children Education</a></h4>
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                            </ul>
                            <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.</div>
                        </div>
                    </div>

                    <!-- Event Block Two -->
                    <div class="event-block-two wow fadeIn" data-wow-delay='200ms'>
                        <div class="inner-box">
                            <div class="date"><strong>05</strong> May</div>
                            <h4><a href="event-single.html">Help and Donate from poor children Education</a></h4>
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                            </ul>
                            <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.</div>
                        </div>
                    </div>

                </div>

                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <!-- Event Block Two -->
                    <div class="event-block-two wow fadeIn">
                        <div class="inner-box">
                            <div class="date"><strong>04</strong> May</div>
                            <h4><a href="event-single.html">Let ‘s walk the poor children Education</a></h4>
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                            </ul>
                            <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.</div>
                        </div>
                    </div>

                    <!-- Event Block Two -->
                    <div class="event-block-two wow fadeIn" data-wow-delay='200ms'>
                        <div class="inner-box">
                            <div class="date"><strong>05</strong> May</div>
                            <h4><a href="event-single.html">Help and Donate from poor children Education</a></h4>
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                            </ul>
                            <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical t market-driven best practices.</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End Event Section  -->

    <!-- Donation Section --
    <section class="donation-section" style="background-image: url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>We are Charity, Our Mission to protect people & the planet, Our activities <br>are taken around the world</h2>
                    </div>
                </div>

                <div class="progress-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="90">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>Food</div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span>Cloth</div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="60">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="60" data-speed="2000"></span>Other</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Donation Section -->

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

    <!-- Call To Action -
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--</span>
                <h2></h2>
            </div>

            <div class="btn-column text-center">
                <select class="form-control" style="">
                    <option value="1">Engagage your city concil</option>
                    <option value="2">Engagage HAAC</option>
                    <option value="3">Engagage Parlement</option>
                </select>
            </div>
        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->




    <!-- Door-to-Door Section -->
    <section style="margin-top: -10%;" class="news-section">
        <div class="auto-container" style="margin-left:15%">
            <div class="sec-title text-center">
                <h2>Le Porte à Porte</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <span class="date">14 May 2019</span>
                                <h3><a href="blog-single-1.html">Former les medias sociaux sur facebook ou whatsApp ou  Telegram.</a></h3>
                                <div class="link-box"><a href="blog-single-1.html" class="theme-btn btn-style-one">Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-1.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">We make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-2.jpg" alt=""></a></div>
                            <!--<span class="date">16 May 2019</span>
                            <h4><a href="blog-single-1.html">Nepal Earthquake: Clean Water Initiative</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-3.jpg" alt=""></a></div>
                            <!-- <span class="date">16 May 2019</span>
                             <h4><a href="blog-single-1.html">Make the most of all our children. donation</a></h4>-->
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two wow fadeInRight" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-1.html"><img src="images/resource/news-thumb-4.jpg" alt=""></a></div>
                            <!--  <span class="date">16 May 2019</span>
                              <h4><a href="blog-single-1.html">Children make the most of all our People. donation</a></h4>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Door-to-Door Section -->

    <!-- Call To Action -
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);background-color: #ccc" >
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span><!--Contact Us Now !--</span>
                <h2></h2>
            </div>

            <div class="btn-column text-center">
                <select class="form-control" style="">
                    <option value="1">Engagage your city concil</option>
                    <option value="2">Engagage HAAC</option>
                    <option value="3">Engagage Parlement</option>
                </select>
            </div>
        </div>

        <div>

        </div>
    </section>

    <!--End Call To Action -->




    <!-- issues audio radio section -->
    <section class="news-section col-sm-12" style="margin-top: -10%">
        <div class="auto-container">

            <div class="row text-center">
                <div class="sec-title text-center">
                    <h2 style="font-size: 15pt">Explications des problèmes dans les langues locales</h2>
                </div>

                <div class="row "style="margin-left:10%;text-align: center">
                    @for($i=0;$i<3;$i++)
                        <div class="col-md-4" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <!--<div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>-->
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h5 style="color: #4f5e6b;text-align: left;font-weight: bold">Issue {{($i+1)}}</h5>

                                    <div>
                                        <figure>
                                            <figcaption>Ecoûtez en langue locale:</figcaption>
                                            <audio
                                                    controls
                                                    src="/media/examples/t-rex-roar.mp3">
                                                Your browser does not support the
                                                <code>audio</code> element.
                                            </audio>
                                        </figure>

                                    </div>

                                </div>

                            </div>
                        </div>
                    @endfor

                </div>
            </div>

            {{-- <div class="row text-center" style="margin-top: 5%">
                 <div class="sec-title text-center">
                     <h2 style="font-size: 15pt">Call</h2>
                 </div>

                 <button class="btn btn-primary btn-lg text-center" style="border-radius: 0">Download Template here</button>

                 <center style="margin: 15px"><h2>City concils</h2></center>
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
                     <h2 style="font-size: 15pt">Visit</h2>
                 </div>


                 <center style="margin: 15px"><h2>How it works</h2></center>
                 <div>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aspernatur doloribus enim error inventore officiis quaerat quia totam? Adipisci amet dignissimos id ipsum nam, nemo provident quas veniam.
                 </div>

                 <center style="margin: 15px"><h2>Tips and advices</h2></center>
                 <ul class="row list-unstyled">
                     @for($i=0;$i<6;$i++)
                         <li class="col-md-6">
                             <i class="fa fa-chevron-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         </li>
                     @endfor
                 </ul>
             </div>

             <center style="margin-top: 10%">
                 <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalContactForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Report Result</button>

             </center>--}}


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

                <div class="row "style="margin-left:15%;text-align: center">
                    @for($i=0;$i<4;$i++)
                        <div class="col-md-4" style="margin: 10px;padding: 10px">
                            <div class="cours row">
                                <!--<div class="col-md-3 col-sm-12" style="background: url('{{asset('images/logo-ctn.jpeg')}}');background-size: contain;background-repeat: no-repeat;background-position: center; height: 150px;">
                                </div>-->
                                <div class="col-md-9 col-sm-12 pt-2 pb-2">
                                    <h5 style="color: #4f5e6b;text-align: left;font-weight: bold">News {{($i+1)}}</h5>

                                    <div>
                                        <figure>
                                            <figcaption>Listen in your local language:</figcaption>
                                            <audio
                                                    controls
                                                    src="/media/examples/t-rex-roar.mp3">
                                                Your browser does not support the
                                                <code>audio</code> element.
                                            </audio>
                                        </figure>

                                    </div>

                                </div>

                            </div>
                        </div>
                    @endfor

                </div>
            </div>

            {{-- <div class="row text-center" style="margin-top: 5%">
                 <div class="sec-title text-center">
                     <h2 style="font-size: 15pt">Call</h2>
                 </div>

                 <button class="btn btn-primary btn-lg text-center" style="border-radius: 0">Download Template here</button>

                 <center style="margin: 15px"><h2>City concils</h2></center>
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
                     <h2 style="font-size: 15pt">Visit</h2>
                 </div>


                 <center style="margin: 15px"><h2>How it works</h2></center>
                 <div>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aspernatur doloribus enim error inventore officiis quaerat quia totam? Adipisci amet dignissimos id ipsum nam, nemo provident quas veniam.
                 </div>

                 <center style="margin: 15px"><h2>Tips and advices</h2></center>
                 <ul class="row list-unstyled">
                     @for($i=0;$i<6;$i++)
                         <li class="col-md-6">
                             <i class="fa fa-chevron-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         </li>
                     @endfor
                 </ul>
             </div>

             <center style="margin-top: 10%">
                 <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalContactForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Report Result</button>

             </center>--}}


        </div>
    </section>
    <!--End news radio Section -->


    <!-- Donation Section --
    <section class="donation-section" style="background-image: url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>We are Charity, Our Mission to protect people & the planet, Our activities <br>are taken around the world</h2>
                    </div>
                </div>

                <div class="progress-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="90">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>Food</div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span>Cloth</div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress-block col-md-4 col-sm-4 col-xs-12">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffffff" data-bgColor="#ba3b2a" data-width="125" data-height="125" data-linecap="normal"  value="60">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="60" data-speed="2000"></span>Other</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Donation Section -->


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
        <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalSuccessForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Report A Success Story</button>

    </center>


@endsection