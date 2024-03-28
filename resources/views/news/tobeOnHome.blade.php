<div class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Recent <span>News</span></h2>
                <p>Consume news from our university</p>
            </div>
        </div>
        <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            @unless(count($news) == 0)
                @foreach($news as $new)
                    <div class="item">
                        <div class="recent-news" style="height: 500px">
                            <div class="action-box">
                                <img style="height: 250px" src="{{asset("storage/" . $new->image)}}" alt="">
                            </div>
                            <div class="info-bx">
                                <ul class="media-post">
                                    <li>{{$new->publish_date}}</li></ul>
                                <h5 class="post-title"><a href="/news/{{$new->id}}">{{ strlen($new["title"]) > 30 ? substr($new["title"], 0, 30) . '...' : $new["title"] }}</a></h5>
                                <p>{{ strlen($new["content"]) > 200 ? mb_substr($new["content"], 0, 200, 'UTF-8') . '...' : $new["content"] }}</p>
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