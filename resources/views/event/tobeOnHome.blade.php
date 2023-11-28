<div class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading-bx">
                <h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
                <p class="m-b0">Upcoming Education Events To Feed Brain. </p>
            </div>
        </div>
        <div class="row">
        <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
            @foreach($events as $event)
                <div class="item">
                    <div class="event-bx">
                        <div class="action-box">
                            <img src="{{asset("/unity_photos/Arega.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div>
                                <div class="event-time">
                                    <div class="event-date">29</div>
                                    <div class="event-month">October</div>
                                </div>
                            </div>
                            <div class="event-info">
                                <h4 class="event-title"><a href="/event/{{$event->id}}">{{$event["title"]}}</a></h4>
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>{{$event["location_name"]}}</a></li>
                                </ul>
                                <p>{{ strlen($event["description"]) > 400 ? substr($event["description"], 0, 400) . '...' : $event["description"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
        <div class="text-center">
            <a href="/events" class="btn">View All Event</a>
        </div>
    </div>
</div>