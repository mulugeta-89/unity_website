@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify; color: #c0c4c9;">
            {{$event["title"]}}
        </h1>
        <img src="{{$event->image ? asset("storage/".$event->image) : asset("unity_photos/arif.jpg")}}" alt="Image" class="img-fluid mt-4 mb-1 align-items-center" style="width: 100%; height:50%">
        <div class="text-black">
            <div class="row">
              <div class="col-md-6">
                <h5 style="color: wheat">Starting Date:</h5>
                <p style="color: white">{{$event["start_date"]}}</p>
              </div>
              <div class="col-md-6">
                <h5 style="color: wheat">End Date:</h5>
                <p style="color: white">{{$event["end_date"]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 style="color: wheat">Location:</h5>
                <p style="color: white">{{$event["location_name"]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 style="color: wheat">Description:</h5>
                <p class="text-justify" style="color: white;">{!! nl2br(e($event["description"])) !!}</p>
              </div>
            </div>
          </div>
          
        
  </div>
  </div>
</div>
@endsection