@extends("layout")
<!-- Extends the layout.blade.php file -->

@section("content")
<!-- Content section -->
<style>
    /* CSS styling for the calendar */
    .calendar {
        margin-top: 100px;
    }
</style>
<div class="calendar">
    <!-- Displaying calendar images -->
    <img src="{{asset("calandar/0001.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0002.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0003.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0004.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0005.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0006.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0007.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0008.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0009.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0010.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0011.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0012.jpg")}}" alt="calendar_img"/>
    <img src="{{asset("calandar/0013.jpg")}}" alt="calendar_img"/>
</div>
<!-- End of content section -->
@endsection
<!-- End of content section -->
