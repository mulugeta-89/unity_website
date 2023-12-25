@extends("layout")
@section("content")
<style>
/* Optional: Add some custom styles for spacing */
.custom-spacing {
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
<div class="page-content">
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 style="margin-top: 90px;">Library Resources</h1>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="mb-2">
            <img src="{{asset("/unity_photos/lib1.png")}}" class="img-fluid" alt="Image">
        </div>
        <div class="mb-4">
        <!-- Your image goes here -->
        <img src="{{asset("/unity_photos/lib2.png")}}" class="img-fluid" alt="Image">
        </div>
    </div>
    </div>
</div>
@endsection