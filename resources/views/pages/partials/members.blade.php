<div class="causes-carousel owl-carousel owl-theme">
    <!-- Cause Block -->
    @foreach($members as $member)
        <div class="cause-block">
            <div class="inner-box">
                <div class="image-box">
                    <figure><img src="{{asset('storage/'.str_replace_last('.','.',$member->image))}}" alt="{{$member->lastname.' '.$member->firstname}}"></figure>
                    <!--<div class="overlay-box"><a href="causes-single.html" class="link">Donate Now</a></div>-->
                </div>
                <div class="lower-content">
                    <h3><a href="#">{{$member->lastname.' '.$member->firstname}}</a></h3>
                    <div class="text">{{$member->bio}}</div>

                </div>
                <div class="info-box clearfix">
                    <a href="{{$member->facebook}}" class="raised"><i class="fa fa-facebook"></i></a>
                    <a href="{{$member->linkedin}}" class="goal"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    @endforeach

</div>
