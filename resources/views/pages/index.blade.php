@extends("layout")
@section("content")
<div class="page-content bg-white">
        @include("partials.hero")
        <div class="content-block">
            @include("partials.services")
            @include("partials.popular_departments")
            @include("event.tobeOnHome")
            @include("partials.testimonial")
            @include("news.show")
        </div>
    </div>
@endsection