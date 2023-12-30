@extends("layout")
@section("content")
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 style="margin-top: 90px">News</h1>
            </div>
        </div>
    </div>
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="clearfix">
                    {{-- class="ttr-gallery-listing magnific-image row m-0" --}}
                    <ul id="masonry">
                        @unless(count($news) == 0)
                            @foreach($news as $new)
                                <x-news_card :new="$new"/>
                            @endforeach
                        @else
                            <p>No News found</p>
                        @endunless
                    </ul>
                </div>
                <!-- Pagination Links -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        {{ $news->links()}} <!-- Renders Bootstrap pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
