@extends("layout")
<!-- Extends the layout.blade.php file, which acts as the master layout for this page -->

@section("content")
<!-- Start of content section -->
<div class="page-content">
    <!-- Inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <!-- Heading for the news page -->
                <h1 style="margin-top: 90px; text-align: center">News</h1>
            </div>
        </div>
    </div>
    <div class="content-block">
        <!-- Portfolio section -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="clearfix">
                    <!-- News listing -->
                    <ul id="masonry">
                        @unless(count($news) == 0)
                            @foreach($news as $new)
                                <!-- Include the news card component -->
                                <x-news_card :new="$new"/>
                            @endforeach
                        @else
                            <!-- Message for no news found -->
                            <p>No News found</p>
                        @endunless
                    </ul>
                </div>
                <!-- Pagination Links -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Renders Bootstrap pagination links -->
                        {{ $news->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of content section -->
@endsection
