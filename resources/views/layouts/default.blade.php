<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/ntc/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 13:03:41 GMT -->
<head>
    <meta charset="utf-8">
    <title>NTC - Nouveau Type de Citoyens | Home Main</title>

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->




    @yield('css')
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
                            <li><a href="#">info@ntc.com</a></li>
                            <li>+123 456 789 000</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="clearfix">
                            <li>Language ; </li>
                            <li class="language dropdownn"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Eng <span class="icon fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
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
                    <div class="logo"><a href="index-2.html"><img src="images/logo.png" width="200" alt="" title=""></a></div>
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
                                    <!--<ul>
                                        <li><a href="index-2.html">Home Main</a></li>
                                        <li><a href="index-3.html">Volunteer Home</a></li>
                                        <li><a href="index-4.html">Charity Home</a></li>
                                        <li><a href="index-5.html">Senior Citizen Home</a></li>
                                        <li><a href="index-6.html">Ecology Home</a></li>

                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                                <li><a href="index-4.html">Header Style Three</a></li>
                                                <li><a href="index-5.html">Header Style Four</a></li>
                                                <li><a href="index-6.html">Header Style Five</a></li>

                                            </ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <li ><a href="{{route('become')}}">Devenir NTC</a>
                                    <!--<ul>
                                        <li><a href="causes-grid.html">Causes Grid View</a></li>
                                        <li><a href="causes-list.html">Causes List View</a></li>
                                        <li><a href="causes-single.html">Cause Details</a></li>
                                    </ul>-->
                                </li>
                                <li ><a href="{{route('take')}}">Agir</a>
                                    <!--<ul>
                                        <li><a href="event-list.html">Event List View</a></li>
                                        <li><a href="event-grid.html">Event Grid View</a></li>
                                        <li><a href="event-single.html">Event Details</a></li>
                                    </ul>-->
                                </li>
                                <li><a href="{{route('empower')}}">Habiliter les citoyens</a>
                                   <!-- <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">Services Type 01</a></li>
                                                <li><a href="services-2.html">Services Type 02</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Team</a>
                                            <ul>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-single.html">Team Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>-->
                                </li>
                               <!-- <li class="dropdown"><a href="#">Blogs</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Three Column</a></li>
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-single-1.html">Blog Post Details 01</a></li>
                                        <li><a href="blog-single-2.html">Blog Post Details 02</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>-->

                                <li><a href="{{route('sponsor')}}">Sponsoriser</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
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
                    <a href="index-2.html" title=""><img src="images/logo.png" alt="" width="120" title=""></a>
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
                                    <!--<ul>
                                        <li><a href="index-2.html">Home Main</a></li>
                                        <li><a href="index-3.html">Volunteer Home</a></li>
                                        <li><a href="index-4.html">Charity Home</a></li>
                                        <li><a href="index-5.html">Senior Citizen Home</a></li>
                                        <li><a href="index-6.html">Ecology Home</a></li>

                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                                <li><a href="index-4.html">Header Style Three</a></li>
                                                <li><a href="index-5.html">Header Style Four</a></li>
                                                <li><a href="index-6.html">Header Style Five</a></li>

                                            </ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <li ><a href="{{route('become')}}">Devenir NTC</a>
                                    <!--<ul>
                                        <li><a href="causes-grid.html">Causes Grid View</a></li>
                                        <li><a href="causes-list.html">Causes List View</a></li>
                                        <li><a href="causes-single.html">Cause Details</a></li>
                                    </ul>-->
                                </li>
                                <li ><a href="{{route('take')}}">Agir</a>
                                    <!--<ul>
                                        <li><a href="event-list.html">Event List View</a></li>
                                        <li><a href="event-grid.html">Event Grid View</a></li>
                                        <li><a href="event-single.html">Event Details</a></li>
                                    </ul>-->
                                </li>
                                <li><a href="{{route('empower')}}">Habiliter les citoyens</a>
                                    <!-- <ul>
                                         <li><a href="about.html">About Us</a></li>
                                         <li class="dropdown"><a href="#">Services</a>
                                             <ul>
                                                 <li><a href="services.html">Services Type 01</a></li>
                                                 <li><a href="services-2.html">Services Type 02</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Team</a>
                                             <ul>
                                                 <li><a href="team.html">Team</a></li>
                                                 <li><a href="team-single.html">Team Single</a></li>
                                             </ul>
                                         </li>
                                         <li><a href="gallery.html">Gallery</a></li>
                                     </ul>-->
                                </li>
                                <!-- <li class="dropdown"><a href="#">Blogs</a>
                                     <ul>
                                         <li><a href="blog-grid.html">Blog Three Column</a></li>
                                         <li><a href="blog-standard.html">Blog Standard</a></li>
                                         <li><a href="blog-left-sidebar.html">Blog left Sidebar</a></li>
                                         <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                         <li><a href="blog-single-1.html">Blog Post Details 01</a></li>
                                         <li><a href="blog-single-2.html">Blog Post Details 02</a></li>
                                         <li><a href="error-page.html">404 Page</a></li>
                                     </ul>
                                 </li>-->

                                <li><a href="{{route('sponsor')}}">Sponsoriser</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
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
    <div class="footer-upper">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="big-column col-md-5 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="footer-column col-md-7 col-sm-5 col-xs-12">
                                <div class="footer-widget adress-widget">
                                    <h3>Addresses</h3>
                                    <div class="text">Michael I. Days 3756 <br>Preston Street Wichita, KS 67213 <br>- <a href="#">USA</a></div>
                                    <ul>
                                        <li><a href="#"><span class="theme_color fa fa-phone"></span> &ensp; +123 456 789 000</a></li>
                                        <li><a href="#"><span class="theme_color fa fa-fax"></span> &ensp; +000 123 456 789</a></li>
                                        <li><a href="#"><span class="theme_color fa fa-envelope"></span> &ensp; info@ntc.com</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer-column col-md-5 col-sm-4 col-xs-12">
                                <div class="footer-widget donation-widget">
                                    <h3>Liens utiles</h3>
                                    <ul class="donation-links">
                                        <li><a href="#">Lien 1</a></li>
                                        <li><a href="#">Lien 2</a></li>
                                        <li><a href="#">Lien 3</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--
                                            <div class="big-column col-md-7 col-sm-12 col-xs-12">
                                                <div class="row clearfix">
                                                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                                        <!-- Post Widget -->
                                                        <div class="footer-widget post-widget">
                                                            <h3>Recent Posts </h3>
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
                    --}}
                </div>
            </div>

            <div class="follow-us clearfix">
                <h5>Suivez nous sur </h5>
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
            <div class="copyright">Copyright <a href="#">NTC</a> &copy; 2019. Tous droits reservés</div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- report result modal -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Faire un rapport</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                   <!-- <i class="fa fa-user prefix grey-text"></i>-->
                    <select type="text" id="form34" class="form-control validate">
                        <option>Reporter des résultats</option>
                        <option>Reporter ce qui ne marche pas </option>
                        <option>Féliciter sur ce qui marche</option>
                    </select>
                    <!--<label data-error="wrong" data-success="right" for="form34">Your name</label>-->
                </div>

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
                    <i class="fa fa-file prefix grey-text"></i>
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

<!-- JQuery -->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>
</body>

<!-- Mirrored from t.commonsupport.com/ntc/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 13:10:58 GMT -->
</html>