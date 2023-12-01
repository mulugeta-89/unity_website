@props(["event"])
<li class="action-card col-lg-6 col-md-6 col-sm-12 happening ">
    <div class="event-bx rounded">
        <div class="action-box">
            <img src="{{asset("/images/Gerji 2.jpg")}}" alt="">
        </div>
        <div class="info-bx d-flex rounded">
            <div>
                <div class="event-time">
                    <div class="event-date">29</div>
                    <div class="event-month">October</div>
                </div>
            </div>
            <div class="event-info">
                <h4 class="event-title"><a href="/event/{{$event->id}}" style="color: wheat">{{$event["title"]}}</a></h4>
                <ul class="media-post">
                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> {{$event["location_name"]}}</a></li>
                </ul>
                <p style="color: white">{{ strlen($event["description"]) > 400 ? substr($event["description"], 0, 400) . '...' : $event["description"] }}</p>
            </div>
        </div>
    </div>
</li>