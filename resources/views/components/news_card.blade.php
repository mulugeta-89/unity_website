@props(["new"])
<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
    <div class="recent-news">
        <div class="action-box">
            <img src="{{asset("/images/blog/latest-blog/pic1.jpg")}}" alt="">
        </div>
        <div class="info-bx">
            <ul class="media-post">
                <li><a href="#"><i class="fa fa-calendar"></i>{{$new->publish_date}}</a></li>
            </ul>
            <h5 class="post-title"><a href="blog-details.html">{{$new->title}}</a></h5>
            <p>{{ strlen($new["content"]) > 200 ? substr($new["content"], 0, 200) . '...' : $new["content"] }}</p>
            <div class="post-extra">
                <a href="#" class="btn-link">READ MORE</a>
            </div>
        </div>
    </div>
</div>