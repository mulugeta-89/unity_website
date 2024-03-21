@extends("layout")
<!-- Extends the layout.blade.php file which acts as a master layout -->

@section("content")
<!-- Defines a section named "content" -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <!-- Heading for the page banner -->
                <h1 style="margin-top: 90px; text-align: center">Advertisments</h1>
            </div>
        </div>
    </div>
    
    <!-- Check if there are any advertisements -->
    @unless(count($advertisments) == 0)
        <!-- Iterate over each advertisement -->
        @foreach($advertisments as $advert)
            <!-- Display each advertisement -->
            <div style="display: flex; justify-content: center; margin-bottom: 20px">
                <img src="{{asset("storage/".$advert->image)}}" alt="Advertisement Image" 
                style="width: 80%; height: 100%"/>
            </div>
        @endforeach
    @else
        <!-- If no advertisements found, display a message -->
        <p style="text-align: center">No Advertisement Found!</p>
    @endunless
</div>
@endsection
<!-- End of the "content" section -->
