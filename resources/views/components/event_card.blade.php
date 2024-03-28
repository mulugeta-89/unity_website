@props(["event"])
<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
    <div class="event-bx m-b30">
        <div class="action-box">
            <img style="height: 400px" src="{{asset("storage/".$event->image)}}" alt="">
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
                    <li><a href="#"><i class="fa fa-map-marker"></i> {{$event["location_name"]}}</a></li>
                </ul>
                <p>{{ strlen($event["description"]) > 400 ? substr($event["description"], 0, 400) . '...' : $event["description"] }}</p>
            </div>
        </div>
    </div>
</li>