<!-- Extends the layout.blade.php file -->
@extends("layout")

<!-- Defines a section named "content" -->
@section("content")

<!-- Opening div tag for the page content -->
<div class="page-content">

    <!-- Opening div tag for the inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 style="margin-top: 90px;text-align: center">Events</h1> <!-- Heading for the events -->
            </div>
        </div>
    </div>
    <!-- Closing div tag for the inner page banner -->

    <!-- Opening div tag for the contact area -->
    <div class="content-block">

        <!-- Opening div tag for the Portfolio section -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="ttr-blog-grid-3 row" id="masonry">

                    <!-- Check if there are events -->
                    @unless(count($events) == 0)
                        <!-- Loop through each event -->
                        @foreach($events as $event)
                            <!-- Include the event card component -->
                            <x-event_card :event="$event"/>
                        @endforeach
                    <!-- If no events are found -->
                    @else
                        <p>No Event found</p> <!-- Display a message -->
                    @endunless
                </div>
                <!-- Closing div tag for the ttr-blog-grid-3 row -->

                <!-- Pagination Links -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        {{ $events->links()}} <!-- Renders Bootstrap pagination links -->
                    </div>
                </div>
                <!-- Closing div tag for the row -->
            </div>
            <!-- Closing div tag for the container -->
        </div>
        <!-- Closing div tag for the section area -->
    </div>
    <!-- Closing div tag for the content block -->
</div>
<!-- Closing div tag for the page content -->

<!-- End of the "content" section -->
@endsection
