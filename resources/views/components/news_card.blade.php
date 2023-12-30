<style>
    .event-bx {
        color: white;
        width: 540px;
    }
    @media only screen and (max-width: 767px) {
            #news-div {
                margin: 0;
                width: 300px;
            }
    }
    </style>
@props(["new"])
<li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3  happening" style="list-style: none; margin-right: 75px" >
    
    <div class="event-bx" id = "news-div" >
        <div class="action-box">
            <img style="height: 260px" src="{{$new->images && $new->images->isNotEmpty() ? asset("storage/".$new->images->first()->photo_path) : asset("unity_photos/arif.jpg")}}" alt="" >
        </div>
        <div class="info-bx d-flex rounded" style="background: #343a40">
            <div class="event-info" >
                <h5 class="event-title"><a style="color: white" href="/news/{{$new->id}}">{{ strlen($new["title"]) > 30 ? mb_substr($new["title"], 0, 30, 'UTF-8') . '...' : $new["title"] }}</a></h5>
                <ul class="media-post">
                    <li style="color: white">{{$new->publish_date}}</a></li>
                </ul>
                <p style="text-align: justify; color: white">{{ strlen($new["content"]) > 400 ? mb_substr($new["content"], 0, 200, 'UTF-8') . '...' : $new["content"] }}
                </p>
            </div>
        </div>
    </div>
</li>