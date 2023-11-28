<div class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Recent <span>News</span></h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
            </div>
        </div>
        <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            @unless(count($news) == 0)
                @foreach($news as $new)
                    <div class="item">
                        <div class="recent-news">
                            <div class="action-box">
                                <img src="{{asset("/unity_photos/Arega.jpg")}}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li>{{$new->publish_date}}</li></ul>
                                <h5 class="post-title"><a href="/news/{{$new->id}}">{{ strlen($new["title"]) > 30 ? substr($new["title"], 0, 30) . '...' : $new["title"] }}</a></h5>
                                <p>{{ strlen($new["content"]) > 200 ? substr($new["content"], 0, 200) . '...' : $new["content"] }}</p>
                                <div class="post-extra">
                                    <a href="/news/{{$new->id}}" class="btn-link">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                    <p>No news found</p>
            @endunless
        </div>
        <div class="text-center mt-3">
            <a href="/news" class="btn">View All News</a>
        </div>
    </div>
</div>