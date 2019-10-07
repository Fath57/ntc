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
                <h1>Nous Sponsoriser</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>Nous sponsoriser</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Causes Grid View Section-->
    <section class="causes-grid-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2 style="font-size: 15pt">Faire un don par Banque</h2>
                <div class="text">You can help lots of people by donating little.Leverage agile frameworks to provide a robust synopsis for <br> Organically grow the holistic world view of disruptive innovation via workplace</div>

                <br>
                <center>
                    <a href="#" class="theme-btn btn-style-one" style="border-radius: 0">Faire un Don</a>
                </center>

            </div>



        </div>
    </section>
    <!--End Causes List View Section-->





    <!-- press section -->
    <section class="news-section" style="margin-top: -10%;background-color: rgba(255,163,70,0.47)">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2 style="font-size: 15pt">Faire un don par Mobil Money</h2>
            </div>

            <div class="row clearfix">
                <div style="font-weight: bold;margin-bottom: 3%;text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis commodi dignissimos harum, incidunt iusto laborum nihil obcaecati, odio perferendis, quaerat qui quibusdam quo quos ratione similique temporibus.
                </div>

                <br>
                <center>
                    <a href="#" class="theme-btn btn-style-one" style="border-radius: 0">Faire un don</a>
                </center>
            </div>

        </div>
    </section>
    <!--End engage Section -->





    <!-- press section -->
    <section class="news-section" style="margin-top: -10%">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2 style="font-size: 15pt">Devenir donnateur regulier</h2>
            </div>

            <div class="row clearfix">
                <div style="font-weight: bold;margin-bottom: 3%;text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis commodi dignissimos harum, incidunt iusto laborum nihil obcaecati, odio perferendis, quaerat qui quibusdam quo quos ratione similique temporibus.
                </div>


            </div>

        </div>
    </section>
    <!--End engage Section -->




@endsection