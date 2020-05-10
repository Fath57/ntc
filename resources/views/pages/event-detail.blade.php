
@extends('layouts.default')
@section('title')
   {{$event->title}}
@stop
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/18.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>{{$event->title}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Accueil </a></li>
                    <li>{{$event->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="event-single">
                        <div class="inner-box">
                            @if ($event->image)
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    @for ($i = 0; $i < count(json_decode($event->image)); $i++)
                                        @php
                                            $images = (json_decode($event->image));
                                            $imagename = \Illuminate\Support\Str::replaceLast('.','-cropped.',$images[$i])
                                        @endphp
                                        <div class="image wow fadeIn">
                                            <img src="{{asset('storage/'.$imagename)}}" alt="{{$event->title}}" />
                                            <div class="post-date">{{\Carbon\Carbon::parse($event->created_at)->format('F')}} {{\Carbon\Carbon::parse($event->created_at)->format('d')}} </div>
                                        </div>
                                    @endfor
                                </div>
                            @endif


                            <div class="lower-content">
                                <h2>{{$event->title}}</h2>
                                <ul class="post-info clearfix">
                                    <li class="clock"><span class="icon fa fa-clock-o"></span> à {{\Carbon\Carbon::parse($event->created_at)->format('H:i')}}</li>
                                    <li><span class="icon fa fa-map-marker"></span>{{$event->location}}</li>
                                </ul>
                                <div class="text">
                                    <p>{{$event->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Upcoming Evenys -->
                        <div class="sidebar-widget upcoming-events">
                            <div class="sidebar-title">
                                <h2>Evénements récents</h2>
                            </div>
                            <div class="widget-content">

                            @foreach($autresEvents as $event)
                                <!--Event Info-->
                                    <div class="event-info style-three">
                                        <div class="info-inner">
                                            <div class="post-date">{{\Carbon\Carbon::parse($event->created_at)->format('d')}}<span>{{\Carbon\Carbon::parse($event->created_at)->format('M')}}</span></div>
                                            <h3><a href="{{route('event.detail',$event->slug)}}">{{$event->title}}</a></h3>
                                            <ul>
                                                <li><span class="icon fa fa-clock-o"></span>à {{\Carbon\Carbon::parse($event->created_at)->format('H:i')}}</li>
                                                <li><span class="icon fa fa-map-marker"></span>{{$event->location}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>



                    </aside>
                </div>

            </div>


        </div>
    </div>
    <!--End Sidebar Page Container-->

   @stop
