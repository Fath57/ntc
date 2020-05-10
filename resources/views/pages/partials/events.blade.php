<div class="row clearfix">

    <div class="column col-md-12 col-sm-12 col-xs-12">
        <!-- Single Event -->
        @foreach($events as $event)
            <div class="event-block-two wow fadeIn col-md-6" data-wow-delay='600ms'>
                <div class="inner-box">
                    <div class="date"><strong>{{\Carbon\Carbon::parse($event->created_at)->format('d')}}</strong> {{\Carbon\Carbon::parse($event->created_at)->format('M')}}</div>
                    <h4><a href="{{route('event.detail',($event->slug)?$event->slug:'#')}}">{{$event->title}}</a></h4>
                    <ul class="info">
                        <li><i class="fa fa-clock-o"></i> à {{\Carbon\Carbon::parse($event->created_at)->format('H:i')}}</li>
                        <li><i class="fa fa-map-marker"></i> {{$event->location}}</li>
                    </ul>
                    <div class="text">{{$event->description}}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
