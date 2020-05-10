@extends('layouts.default')
@section('content')
     <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/31.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>{{$post->title}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('blog')}}">Blog </a></li>
                    <li>{{$post->title}}</li>
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
                	<div class="blog-single">
						<div class="inner-box">
                        	<div class="image wow fadeIn">
                            	<img src="{{asset('storage/'.$post->image)}}" alt="" />
                            </div>
                            <div class="lower-content">
                            	<div class="post-date">{{\Carbon\Carbon::parse($post->created_at)->format('d M Y')}}</div>
                                <h3>{{$post->title}}</h3>
                                <ul class="post-info">
                                   <!-- <li><span class="icon fa fa-user"></span>By Admin</li>-->
                                    <li><span class="icon fa fa-heart-o"></span>35 Likes</li>
                                    <li><span class="icon fa fa-commenting-o"></span>23 Comment</li>
                                </ul>
                                <div class="text">
                                    {!! $post->body !!}
                                </div>
                                <!--post-share-options-->
                                <div class="post-share-options clearfix">
                                    <div class="pull-right socials-icon clearfix">
                                        Share:
                                        <a href="#" class="facebook"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="linkedin"><span class="fa fa-instagram"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments (02)</h2></div>
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-4.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Peeter son</strong><div class="comment-time">May 16 2019</div></div>
                                        <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar </div>
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Tom Marvalo</strong><div class="comment-time">May 16 2019</div></div>
                                        <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar </div>
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="comment-form">
                                
                            <div class="group-title"><h2>Leave a Reply</h2></div>
                            
                            <!--Comment Form-->
                            <form method="post" action="http://t.commonsupport.com/incles/blog.html">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Your Comments"></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-four" type="submit" name="submit-form">Post Comment</button>
                                    </div>
                                    
                                </div>
                            </form>
                                
                        </div>
                        <!--End Comment Form --> 
                        
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						

                        
                        <!-- Testimonial Widget -->

                        <!-- Upcoming Evenys -->
                        <div class="sidebar-widget upcoming-events">
                        	<div class="sidebar-title">
                            	<h2>Événemets</h2>
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
                        


                        <!-- Popular Tags
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>More Tags</h2></div>
                            <a href="#">Help</a>
                            <a href="#">Charity</a>
                            <a href="#">Found Donation</a>
                            <a href="#">Money</a>
                            <a href="#">Help Poor People</a>
                            <a href="#">Trusted</a>
                            <a href="#">Non Profit</a>
                            <a href="#">Team</a>
                        </div>-->
                        
                        <!-- Recent Post Widget -->
                        <div class="sidebar-widget recent-post-widget">
                        	<div class="sidebar-title">
                            	<h2>Articles récent</h2>
                            </div>
                            <div class="widget-content">
                            	@foreach($lastPosts as $post)
                                <div class="recent-post-content">
                                	<h3><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3>
                                    <div class="post-date">{{\Carbon\Carbon::parse($event->created_at)->format('d M Y')}}</div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        

                        
					</aside>
				</div>
                
            </div>
            
        </div>
    </div>
@stop
