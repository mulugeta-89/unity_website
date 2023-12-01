
@extends("layout")
@section("content")
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">Events</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    {{-- <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/">Home</a></li>
                <li>Events</li>
            </ul>
        </div>
    </div> --}}
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="ttr-blog-grid-3 row" id="masonry">
                        @unless(count($events) == 0)
                            @foreach($events as $event)
                                <x-event_card :event="$event"/>
                            @endforeach
                        @else
                            <p>No Event found</p>
                        @endunless
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
