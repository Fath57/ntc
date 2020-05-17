<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
    <!-- Material Design Bootstrap -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">-->
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
    :<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />


<style>
    .link-blue{
        color: #166d95;
    }
    @media screen and (max-width: 992px) {
        .sticky-header {
            display: none;
        }
    }
    .image-press {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 10px;

        object-fit: cover;
        object-position: top right;
    }
    .center {
        margin: 0 auto;
        width: 90%;
    }
</style>

    @yield('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><a href="mailto:contact@nouveautypedecitoyens.org">contact@nouveautypedecitoyens.org</a></li>
                            <li><a href="tel:+22967199683">(229) 67 19 96 83</a></li>
                        </ul>
                    </div>
                    <div class="clearfix" style="float: right;margin: 5px">
                        <ul class="clearfix">
                          <!--  <li>Language ; </li>
                            <li class="language dropdownn"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Eng <span class="icon fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>-->
                            @include('auth.buttons')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header-Upper-->
        <div class="header-upper" style="background-image: url(images/background/1.jpg);">
            <div class="auto-container">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{asset('images/logo.png')}}" width="300" alt="logo" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current_ "><a href="/">Accueil</a>
                                </li>
                                <li ><a href="{{route('become')}}">Devenir NTC</a>
                                    <!--<ul>
                                        <li><a href="causes-grid.html">Causes Grid View</a></li>
                                        <li><a href="causes-list.html">Causes List View</a></li>
                                        <li><a href="causes-single.html">Cause Details</a></li>
                                    </ul>-->
                                </li>
                                 <li class="dropdown"><a href="#">Nos Programmes</a>
                                <ul>
                                    <li ><a href="{{route('cj')}}">Cercles des jeunes</a></li>
                                    <li ><a href="{{route('take')}}">Participation Citoyenne</a></li>
                                    <li><a href="{{route('empower')}}">Education Communautaire</a></li>
                                    <li><a href="{{route('hero')}}">Héros d’un Village</a></li>
                                </ul>
                            </li>

                                </li>
                                <li><a href="{{route('sponsor')}}">Sponsoriser-nous</a></li>
                                <li><a href="{{route('contact')}}">Contactez-nous</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer Box -->
                    <div class="outer-box">
                        <ul class="social-icon-one">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header -->
            <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="images/logo.png" alt="" width="140" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current_ "><a href="/">Accueil</a>
                                </li>
                                <li ><a href="{{route('become')}}">Devenir NTC</a>
                                    <!--<ul>
                                        <li><a href="causes-grid.html">Causes Grid View</a></li>
                                        <li><a href="causes-list.html">Causes List View</a></li>
                                        <li><a href="causes-single.html">Cause Details</a></li>
                                    </ul>-->
                                </li>
                                <li class="dropdown"><a href="#">Nos Programmes</a>
                                    <ul>
                                        <li ><a href="{{route('cj')}}">Cercles des jeunes</a></li>
                                        <li ><a href="{{route('take')}}">Participation Citoyenne</a></li>
                                        <li><a href="{{route('empower')}}">Education Communautaire</a></li>
                                        <li><a href="{{route('hero')}}">Héros d’un Village</a></li>
                                    </ul>
                                </li>

                                </li>
                                <li><a href="{{route('sponsor')}}">Sponsoriser-nous</a></li>
                                <li><a href="{{route('contact')}}">Contactez-nous</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->


    @yield('content')


</div>

<!--Main Footer-->
<footer class="main-footer">
    <!--Upper-->
    <div class="footer-upper" style="padding: 40px">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="big-column col-md-5 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="footer-column col-md-7 col-sm-5 col-xs-12">
                                <div class="footer-widget adress-widget">
                                    <h3>Addresse</h3>
                                    <div class="text"> Lot 430, Parcelle L, Quartier Kpondéhou, Cotonou </div>
                                    <ul>
                                        <li><a href="tel:+22967199683"><span class="theme_color fa fa-phone"></span> &ensp; (229) 67 19 96 83</a></li>
                                        <li><a href="tel:+22966147189"><span class="theme_color fa fa-fax"></span> &ensp; (229) 66 14 71 89</a></li>
                                        <li><a href="mailto:contact@nouveautypedecitoyens.org" ><span class="theme_color fa fa-envelope"></span> &ensp; contact@nouveautypedecitoyens.org</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-md-7 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <!-- Post Widget -->
                                <div class="footer-widget post-widget">
                                    <h3>Lien utiles </h3>
                                    <ul>
                                        <li class="recent-post">
                                            <span class="date">14 May 2019</span>
                                            <div class="text"><a href="blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                        </li>

                                        <li class="recent-post">
                                            <span class="date">14 May 2019</span>
                                            <div class="text"><a href="blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                        </li>

                                        <li class="recent-post">
                                            <span class="date">14 May 2019</span>
                                            <div class="text"><a href="blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget tweet-widget">
                                    <h3>Tweets</h3>
                                    <div class="twitter-post">
                                        <div class="name"><span class="fa fa-twitter"></span>@Company_text</div>
                                        <div class="text">Iferei te compoen iusquam re,vid eperius aus <span>terravera</span> teri fauten it. Supienitui sente ad fac vesil tatiostrim <span>#escreissimiu</span></div>
                                        <span class="date">15 May 2019</span>
                                    </div>

                                    <div class="twitter-post">
                                        <div class="name"><span class="fa fa-twitter"></span>@Company_text</div>
                                        <div class="text">Iferei te compoen iusquam re,vid eperius aus <span>terravera</span>. Supienitui sente ad fac vesil tatiostrim <span>#donate</span></div>
                                        <span class="date">12 May 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="follow-us clearfix">
                <h5>Suivez nous sur</h5>
                <ul class="social-icon-colored">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">Copyright <a href="/">NTC</a> &copy; {{date('Y')}} | Tous droits reservés</div>
        </div>
    </div>
</footer>
<!-- End Footer -->
@yield('modals')
<!-- report result modal -->
<div class="modal fade" id="heroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Inscription</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">


                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Votre nom</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Votre email</label>
                </div>



            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-unique">Reporter <i class="fa fa-send ml-1"></i></button>
            </div>
        </div>
    </div>
</div>


<!-- success result modal -->
<div class="modal fade" id="modalSuccessForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Reporter une histoire</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">


                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Votre nom</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Votre email</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">Sujet</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Votre message</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-image prefix grey-text"></i>
                    <!--<label data-error="wrong" data-success="right" for="form8">Add images</label>-->

                    <input type="file" id="form32" class="form-control validate" multiple>
                </div>


                <div class="md-form">
                    <i class="fa fa-file prefix grey-text"></i>
                    <input type="file" id="form32" class="form-control validate" multiple>
                   <!-- <label data-error="wrong" data-success="right" for="form8">Join a document</label>-->
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-unique">Reporter <i class="fa fa-send ml-1"></i></button>
            </div>
        </div>
    </div>
</div>



<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--Revolution Slider-->
<script src="{{asset('plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/main-slider-script.js')}}"></script>
<!--End Revolution Slider-->
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/knob.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{asset('js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/sweetalert2.all.min.js')}}"></script>


<!-- JQuery -->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>

<!-- Cookie policy -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
    "content": {
        "message": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site.",
        "dismiss": "D'accord",
        "link": "En savoir plus"

    },
    "palette": {
    "popup": {
      "background": "#166d95"
    },
    "button": {
      "background": "transparent",
      "border": "#fff",
      "text": "#fff"
    }
  }
});
</script>


@if(session()->get('error'))
    <script>
        Swal.fire({
            title: "Erreur",
            text: "{{session()->get('error')}}",
            type: "error",

        });
    </script>
@endif
@if(session()->get('success'))
    <script>
        Swal.fire({
            title: "Confirmation",
            text: "{{session()->get('success')}}",
            type: "success",

        });
    </script>
@endif
@yield('scripts')
</body>

</html>
