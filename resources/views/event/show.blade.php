@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify; color:#98b4d4;">
            {{$event["title"]}}
        </h1>
        <img src="{{asset("/images/public_health.jpg")}}" alt="Image" class="img-fluid mt-4 mb-1 align-items-center">
        {{-- <div class="text-black">
            <h5>Starting date:</h5><span>{{$event["start_date"]}}</span>
            <h5>End Date: {{$event["end_date"]}}</h5>
            <h5>Location: {{$event["location_name"]}}</h5>
            <p>
                {{$event["description"]}}
            </p>
        </div> --}}
        <div class="text-black">
            <div class="row">
              <div class="col-md-6">
                <h5>Starting Date:</h5>
                <p>{{$event["start_date"]}}</p>
              </div>
              <div class="col-md-6">
                <h5>End Date:</h5>
                <p>{{$event["end_date"]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5>Location:</h5>
                <p>{{$event["location_name"]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5>Description:</h5>
                <p class="text-justify">{{$event["description"]}}</p>
              </div>
            </div>
          </div>
          
        
  </div>
  </div>
</div>
@endsection