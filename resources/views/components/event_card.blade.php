<style>
    .event-bx {
	border: 1px solid wheat;
	border-radius: 7px;
}
    .event-bx a:hover {
        color: white;
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
            <img style="height: 300px" src="{{$event->images && $event->images->isNotEmpty() ? asset("storage/".$event->images->first()->photo_path) : asset("unity_photos/arif.jpg")}}" alt="" >
        </div>
        <div class="info-bx d-flex rounded" style="background: #343a40">
            <div>
                <div class="event-time">
                    <div class="event-date" style="color: white">{{$date}}</div>
                    <div class="event-month" style="color: white">{{$months[$month]}}</div>
                </div>
            </div>
            <div class="event-info" >
                <h4 style="color: white"><a href="/event/{{$event->id}}">{{ strlen($event["title"]) > 30 ? mb_substr($event["title"], 0, 30, 'UTF-8') . '...' : $event["title"] }}</a></h4>
                <ul class="media-post">
                    <li><a href="#" style="color: white"><i class="fa fa-clock-o"></i>{{$startTime}}</a></li>
                    <li><a style="color: white" href="#"><i class="fa fa-map-marker"></i> {{$event["location_name"]}}</a></li>
                </ul>
                <p style="text-align: justify; color: white">{{ strlen($event["description"]) > 400 ? mb_substr($event["description"], 0, 200, 'UTF-8') . '...' : $event["description"] }}</p>
            </div>
        </div>
    </div>
</li>
