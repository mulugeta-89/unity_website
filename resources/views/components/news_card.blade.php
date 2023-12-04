{{-- @props(["new"])
<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
    <div class="recent-news">
        <div class="action-box">
            <img src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/unity_logo2.png")}}" alt="">
        </div>
        <div class="info-bx">
            <ul class="media-post">
                <li><a href="#"><i class="fa fa-calendar"></i>{{$new->publish_date}}</a></li>
            </ul>
            <h5 class="post-title"><a href="/news/{{$new->id}}">{{ strlen($new["title"]) > 30 ? substr($new["title"], 0, 30) . '...' : $new["title"] }}</a></h5>
            <p>{{ strlen($new["content"]) > 300 ? substr($new["content"], 0, 300) . '...' : $new["content"] }}</p>
            <div class="post-extra">
                <a href="/news/{{$new->id}}" class="btn-link">READ MORE</a>
            </div>
        </div>
    </div>
</div> --}}
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
            <img style="height: 300px;" src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/unity_photo.jpg")}}" alt="" >
        </div>
        <div class="info-bx d-flex rounded">
            {{-- <div>
                <div class="event-time">
                    <div class="event-date">29</div>
                    <div class="event-month">October</div>
                </div>
            </div> --}}
            <div class="event-info">
                <h4 class="event-title"><a href="/news/{{$new->id}}" style="color: wheat">{{$new["title"]}}</a></h4>
                <ul class="media-post">
                    <li style="color: wheat">{{$new->publish_date}}</a></li>
                </ul>
                <p style="color: white">{{ strlen($new["content"]) > 400 ? substr($new["content"], 0, 400) . '...' : $new["content"] }}</p>
            </div>
        </div>
    </div>
</li>