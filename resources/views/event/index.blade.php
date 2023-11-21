{{-- @extends("layout")
@section("content")
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">Events</h1>
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
                                <x-event_card :event="$event"/>
                            @endforeach
                        @else
                            <p>No Event found</p>
                        @endunless
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends("layout")
@section("content")
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">Events</h1>
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
                        <!-- ... (existing filter buttons) ... -->
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                        @unless(count($events) == 0)
                            @foreach($events as $event)
                                <x-event_card :event="$event"/>
                            @endforeach
                        @else
                            <p>No Event found</p>
                        @endunless
                    </ul>
                </div>
                <!-- Pagination Links -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        {{ $events->links()}} <!-- Renders Bootstrap pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
