<style>
    .event-bx {
	border: 1px solid wheat;
	border-radius: 7px;
}
</style>
@props(["event"])
<?php $months = [
    "01" => 'January',
    "02" => 'February',
    "03" => 'March',
    "04" => 'April',
    "05" => 'May',
    "06" => 'June',
    "07" => 'July',
    "08" => 'August',
    "09" => 'September',
    "10" => 'October',
    "11" => 'November',
    "12" => 'December'
];

    $dateAndTime = explode(" ", $event["start_date"]);
    $monthAndDate = explode("-", $dateAndTime[0]);
    $month = $monthAndDate[1];
    $date = $monthAndDate[2];

    $startTime = $dateAndTime[1];


?>
<li class="action-card col-lg-6 col-md-6 col-sm-12 happening ">
    <div class="event-bx">
        <div class="action-box">
            <img src="{{$event->image ? asset("storage/".$event->image) : asset("unity_photos/arif.jpg")}}" alt="" >
        </div>
        <div class="info-bx d-flex rounded">
            <div>
                <div class="event-time">
                    <div class="event-date">{{$date}}</div>
                    <div class="event-month">{{$months[$month]}}</div>
                </div>
            </div>
            <div class="event-info">
                <h4 class="event-title"><a href="/event/{{$event->id}}" style="color: wheat">{{ strlen($event["title"]) > 30 ? mb_substr($event["title"], 0, 30, 'UTF-8') . '...' : $event["title"] }}</a></h4>
                <ul class="media-post">
                    <li><a href="#" style="color: white"><i class="fa fa-clock-o" style="color: wheat"></i>{{$startTime}}</a></li>
                    <li><a href="#" style="color: white"><i class="fa fa-map-marker" style="color: wheat"></i> {{$event["location_name"]}}</a></li>
                </ul>
                <p style="color: white; text-align: justify">{{ strlen($event["description"]) > 400 ? mb_substr($event["description"], 0, 200, 'UTF-8') . '...' : $event["description"] }}</p>
            </div>
        </div>
    </div>
</li>
