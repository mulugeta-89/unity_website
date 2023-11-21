@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify; color:#98b4d4;">
            {{$event["title"]}}
        </h1>
        <img src="{{asset("/images/public_health.jpg")}}" alt="Image" class="img-fluid mt-4 mb-1 align-items-center">
        <div class="text-black text-justify">
            <p>
                {{$event["description"]}}
            </p>
        </div>
        
  </div>
  </div>
</div>
@endsection