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
                <a href="#heroModal" data-toggle="modal" class="theme-btn btn-style-one"><span>Devenir un Hero</span></a>

            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!--about hero Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Apropos d'Hero</h2>
                <div class="text">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, debitis dolore dolorum est eum impedit laboriosam libero magnam magni molestias necessitatibus nesciunt placeat quo soluta tempore. Dolorum magni numquam praesentium?
                </div>
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

                <!-- Cause Block Two -->
                <div class="cause-block-two col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/cause-15.jpg" alt=""></figure>
                          <!--  <div class="overlay-box"><a href="causes-single.html" class="link">Donate Now</a></div>-->
                            <div class="title-box">
                                <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="85"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                                </div>
                                <h3><a href="causes-single.html">North Village</a></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Integer et diam libero. Praesent  varius nisi. Nunc vCapitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override .</div>

                        </div>
                    </div>
                </div>

                <!-- Cause Block Two -->
                <div class="cause-block-two col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/cause-16.jpg" alt=""></figure>
                            <div class="title-box">
                                <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="65"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div></div></div></div>
                                </div>
                                <h3><a href="#"></a>Tombo Village</h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Integer et diam libero. Praesent  varius nisi. Nunc vCapitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override .</div>

                        </div>
                    </div>
                </div>

                <!-- Cause Block Two -->
                <div class="cause-block-two col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/cause-17.jpg" alt=""></figure>
                            <div class="title-box">
                                <div class="progress-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="48"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="48">0</span>%</div></div></div></div>
                                </div>
                                <h3><a href="#">Atapka Village</a></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Integer et diam libero. Praesent  varius nisi. Nunc vCapitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override .</div>

                        </div>
                    </div>
                </div>


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
        <button class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#modalSuccessForm" style="border-radius: 0;padding: 15px;font-size: 15pt">Raconter une histoire de succès</button>

    </center>

    @endsection