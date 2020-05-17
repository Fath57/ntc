@extends('layouts.default')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/34.jpg);">
        <div class="auto-container">
            <div class="title-box" style="border-radius: 0">
                <h1>Contactez-nous</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Accueil </a></li>
                    <li>Contactez-nous</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Contact Info Section-->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-block">
                        <div class="icon-box wow zoomIn">
                            <span class="icon fa fa-map-marker"></span>
                        </div>
                        <div class="text">Lot 430, Parcelle L,<br>  Quartier Kpondéhou, Cotonou</div>
                    </div>
                </div>

                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-block">
                        <div class="icon-box wow zoomIn" data-wow-delay="300ms">
                            <span class="icon fa fa-phone"></span>
                        </div>
                        <div class="text"><a href="tel:+22967199683"><span class="theme_color fa fa-phone"></span> &ensp; (229) 67 19 96 83</a> <br><a href="tel:+22966147189"><span class="theme_color fa fa-fax"></span> &ensp; (229) 66 14 71 89</a></div>
                    </div>
                </div>

                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-block">
                        <div class="icon-box wow zoomIn" data-wow-delay="600ms">
                            <span class="icon fa fa-envelope"></span>
                        </div>
                        <div class="text"><a href="mailto:contact@nouveautypedecitoyens.org" ><span class="theme_color fa fa-envelope"></span> &ensp; contact@nouveautypedecitoyens.org</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Info Section-->

    <!-- Contact Info Section -->
    <section class="contact-form-section">
        <div class="outer-container clearfix">

            <!--Form Column-->
            <div class="form-column clearfix">
                <div class="inner-column">
                    <h2>Laisser nous un message</h2>
                    <div class="alert alert-danger form-error" style="display: none"></div>
                    <div id="message-loader" style="font-size: 12pt;display: none">Envoie de votre message en cours...</div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Comment Form-->
                        <form method="post"  id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Notre nom" required>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Votre message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Envoyer</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Contact Form -->

                </div>
            </div>

            <!--Map-->
            <div class="map-column">
                <!--Map Canvas-->
                <div class="map-canvas"
                     data-zoom="12"
                     data-lat="6.385662"
                     data-lng="2.451443"
                     data-type="roadmap"
                     data-hue="#ffc400"
                     data-title="Nouveau Type de Citoyens"
                     data-icon-path="images/icons/map-marker.png"
                     data-content="Quartier Kpondéhou, Cotonou<br><a href='mailto: contact@nouveautypedecitoyens.org'> contact@nouveautypedecitoyens.org</a>">
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Info Section -->


@endsection

@section('scripts')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready( function(e) {
            $(document).on('submit', '#contact-form', function (e) {
                e.preventDefault();
                let loader = $('#message-loader')
                loader.fadeIn('slow')

                let form = $(this);
                let data = form.serialize();
                let url = '{{route('message')}}';
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: data,
                    success: function (data) {
                        console.log(data)
                        $('#message-loader').css({"display":"none"});

                        if(!data.error){
                            form.trigger('reset')
                            swal.fire('Message',data.message,'success')

                        }else{
                            $('.form-error').html(`<span class="text-danger">`+data.message+`</span>`);
                            $('.form-error').slideDown();
                        }

                    },
                    error: function (error) {
                        console.log(error)
                        $('#message-loader').css({"display":"none"});


                    }

                })
            })
        })
    </script>
@endsection
