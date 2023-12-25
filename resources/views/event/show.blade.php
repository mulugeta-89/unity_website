@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify;">
            {{$event["title"]}}
        </h1>
        
        @if ($event->images->count() >= 1)
                <div class="row" style="display: flex; justify-content: center">
                        <img src="{{ asset("storage/".$event->images[0]->photo_path) }}"  alt="News Image">
                </div>
            @else
                <img src="{{ asset("unity_photos/arif.jpg") }}" class="img-fluid mt-4 mb-1 mx-auto d-block" alt="Default Image">
            @endif
        <div class="text-black">
            <div class="row">
              <div class="col-md-6">
                <h5 >Starting Date:</h5>
                <p >{{$event["start_date"]}}</p>
              </div>
              <div class="col-md-6">
                <h5 >End Date:</h5>
                <p >{{$event["end_date"]}}</p>
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
                <p class="text-justify">{!! nl2br(e($event["description"])) !!}</p>
              </div>
            </div>
          </div>
          @if ($event->images->count() > 1)
                <div class="row mt-4">
                    @for ($i = 1; $i < $event->images->count(); $i++)
                        <div class="col-md-6">
                            <img src="{{ asset("storage/".$event->images[$i]->photo_path) }}" class="img-fluid mb-3" alt="Additional News Image">
                        </div>
                    @endfor
                </div>
            @endif
          
        
  </div>
  </div>
</div>
@endsection