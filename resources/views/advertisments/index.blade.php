@extends("layout")
@section("content")
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 style="margin-top: 90px; text-align: center">Advertisments</h1>
            </div>
        </div>
    </div>
        @unless(count($advertisments) == 0)
            @foreach($advertisments as $advert)
            <div style="display: flex; justify-content: center; margin-bottom: 20px">
                <img src="{{asset("storage/".$advert->image)}}" alt="Advertisement Image" 
                style="width: 80%; height: 100%"/>
            </div>
            @endforeach
            @else
            <p style="text-align: center">No Advertisement Found!</p>
        @endunless
</div>
@endsection
