@extends("layout")
<!-- Extends the layout.blade.php file which acts as a master layout -->

@section("content")
<!-- Defines a section named "content" -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="page-banner">
        <!-- Container for the page banner -->
        <div class="container">
            <!-- Page banner entry -->
            <div class="page-banner-entry">
                <!-- Heading for the page banner -->
                <h1 style="margin-top: 90px">Advertisment {{$advert->id}}</h1>
            </div>
        </div>
    </div>
    
    <!-- Advertisement display -->
    <div style="display: flex; justify-content: center; margin-bottom: 20px">
        <!-- Image of the advertisement -->
        <img src="{{asset("storage/".$advert->image)}}" alt="Advertisement Image" 
        style="width: 80%; height: 100%"/>
    </div>
</div>
@endsection
<!-- End of the "content" section -->
