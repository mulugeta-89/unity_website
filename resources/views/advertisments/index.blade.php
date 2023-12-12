@extends("layout")
@section("content")
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">Advertisments</h1>
            </div>
        </div>
    </div>
        @unless(count($advertisments) == 0)
        @foreach($advertisments as $advert)
        <div style="display: flex; justify-content: center; margin-bottom: 20px">
            <img src="{{asset("storage/".$advert->image)}}"alt="Advertisement Image" 
            style="width: 80%; height: 100%"/>
            {{-- <div class="advertisement-body">
                <!-- You can add additional content or details about the advertisement here -->
            </div> --}}
        </div>
        @endforeach
        @endunless
</div>
@endsection
