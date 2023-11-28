@extends("layout")
@section("content")
<div class="page-content bg-white">
        @include("partials.hero")
        <div class="content-block">
            @include("partials.services")
            @include("partials.popular_departments")
            {{-- @include("partials.counter") --}}
            @include("event.tobeOnHome")
            @include("partials.testimonial")
            @include("news.tobeOnHome")
        </div>
    </div>
@endsection