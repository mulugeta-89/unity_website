@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify; color: #c0c4c9;">
            {{$new->title}}
        </h1>
        <img src="{{asset("/images/public_health.jpg")}}" alt="Image" class="img-fluid mt-4 mb-1 align-items-center">
        <div class="text-black">
            <div class="row">
              <div class="col-md-6">
                <h5 style="color: wheat">Published_date:</h5>
                <p style="color: white">{{$new["publish_date"]}}</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <h5 style="color: wheat">Description:</h5>
                <p class="text-justify" style="color: white">{{$new["content"]}}</p>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <a href="/news/{{$new->id}}/edit" style="color: white">Edit</a>
                  {{-- <a href="/event/{{$event->id}}/delete">Delete</a> --}}
                </div>
              </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/news/{{$new->id}}">
                            @csrf
                            @method("DELETE")
                            <button class="text-red-600">
                                Delete
                            </button>
                        </form>
                </div>
            </div>

          </div>
          
        
  </div>
  </div>
</div>
@endsection