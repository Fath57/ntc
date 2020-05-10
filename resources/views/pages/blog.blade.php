@extends('layouts.default')
@section('content')

     <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/27.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Blog</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Accueil </a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Blog Three Column Section-->
	<section class="blog-grid-section">
		<div class="auto-container">
			<div class="row clearfix">
				
                <!--Blog single-->
                @foreach($posts as $post)
                 <div class="gallery-block-two col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" />
                            <div class="overlay-box">
                            	<div class="content">
                                    <div class="post-date">{{\Carbon\Carbon::parse($post->created_at)->format('d M Y')}}</div>
                                    <a href="{{asset('storage/'.$post->image)}}" data-fancybox="images" data-caption="" class="plus-icon lightbox-image"></a>
                                    <div class="lower-content">
                                    	<h3><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3>
                                        <ul class="post-info">
                                        	<li><a href="blog-single-1.html"><span class="icon fa fa-user"></span>By <br> Admin</a></li>
                                            <li><a href="blog-single-1.html"><span class="icon fa fa-heart-o"></span>35 <br> Likes</a></li>
                                            <li><a href="blog-single-1.html"><span class="icon fa fa-commenting-o"></span>23 <br> Comment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!--Styled Pagination-->
            {{$posts->links()}}
            <!--End Styled Pagination-->
            
		</div>
	</section>
	<!--End Blog Three Column Section-->
    
  @stop
