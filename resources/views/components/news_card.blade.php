
<style>
    .event-bx {
	border: 1px solid wheat;
	border-radius: 7px;
}
    </style>
@props(["new"])
<li class="action-card col-lg-6 col-md-6 col-sm-12 mb-3" style="height: 100vh">
    <div class="event-bx">
        <div class="action-box">
            <img src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/arif.jpg")}}" alt="" >
        </div>
        <div class="info-bx d-flex rounded">
            <div class="event-info">
                <h5 class="event-title"><a href="/news/{{$new->id}}" style="color: wheat">{{ strlen($new["title"]) > 30 ? mb_substr($new["title"], 0, 30, 'UTF-8') . '...' : $new["title"] }}</a></h5>
                <ul class="media-post">
                    <li style="color: wheat">{{$new->publish_date}}</a></li>
                </ul>
                <p style="color: white;text-align: justify">{{ strlen($new["content"]) > 400 ? mb_substr($new["content"], 0, 200, 'UTF-8') . '...' : $new["content"] }}
                </p>
            </div>
        </div>
    </div>
</li>