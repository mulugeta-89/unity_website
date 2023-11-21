@extends("layout")
@section("content")
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">{{$heading}}</h1>
             </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/">Home</a></li>
                <li>Events</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1 gallery-bx">
            <div class="container">
                <div class="feature-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#"><span>All</span></a> 
                        </li>
                        <li data-filter="happening" class="btn">
                            <input type="radio">
                            <a href="#"><span>Happening</span></a> 
                        </li>
                        <li data-filter="upcoming" class="btn">
                            <input type="radio">
                            <a href="#"><span>Upcoming</span></a> 
                        </li>
                        <li data-filter="expired" class="btn">
                            <input type="radio">
                            <a href="#"><span>Expired</span></a> 
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                        @unless(count($events) == 0)
                            @foreach($events as $event)
                            
                                <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                                    <div class="event-bx m-b30">
                                        <div class="action-box">
                                            <img src="{{asset("/images/event/pic1.jpg")}}" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <div class="event-date">29</div>
                                                    <div class="event-month">October</div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="#">{{$event["title"]}}</a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i> {{$event["location_name"]}}</a></li>
                                                </ul>
                                                <p>{{$event["description"]}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <p>No Event found</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>
@endsection