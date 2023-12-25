{{-- @extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify; color: #c0c4c9;">
            {{$new->title}}
        </h1>
        <img  src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/arif.jpg")}}" alt="Image" class="img-fluid mt-4 mb-1 align-items-center" style="width: 100%; height:50%">
        <div class="text-black">
            <div class="row">
              <div class="col-md-6">
                <h5 style="color: wheat">Published_date:</h5>
                <p style="color: white">{{$new["publish_date"]}}</p>
              </div>
            </div>
            <p class="text-justify" style="color: white">{!! nl2br(e($new["content"])) !!}</p>
          </div>
  </div>
  </div>
</div>
@endsection --}}
{{-- @extends("layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify;">
                {{ $new->title }}
            </h1>
            <!-- Display images in a gallery or slider -->
            <div class="image-gallery">
                @forelse ($new->images as $image)
                    <img src="{{ asset("storage/".$image->photo_path) }}" alt="News Image" class="img-fluid mt-4 mb-1 align-items-center" style="width: 100%; height:50%">
                @empty
                    <img src="{{ asset("unity_photos/arif.jpg") }}" alt="Default Image" class="img-fluid mt-4 mb-1 align-items-center" style="width: 100%; height:50%">
                @endforelse
            </div>
            <div class="text-black">
                <div class="row">
                    <div class="col-md-6">
                        <h5 >Published_date:</h5>
                        <p>{{  $new->publish_date }}</p>
                    </div>
                </div>
                <p class="text-justify">{!! nl2br(e($new->content)) !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends("layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify;">
                {{ $new->title }}
            </h1>
            <!-- Display the first two images on the sides -->
            @if ($new->images->count() >= 1)
                <div class="row" style="display: flex; justify-content: center">
                        <img src="{{ asset("storage/".$new->images[0]->photo_path) }}"  alt="News Image">
                    {{-- <div class="col-md-6">
                        <img src="{{ asset("storage/".$new->images[1]->photo_path) }}" class="img-fluid mt-4 mb-1" alt="News Image">
                    </div> --}}
                </div>
            @elseif ($new->images->count() === 1)
                <img src="{{ asset("storage/".$new->images[0]->photo_path) }}" class="img-fluid mt-4 mb-1 mx-auto d-block" alt="News Image">
            @else
                <img src="{{ asset("unity_photos/arif.jpg") }}" class="img-fluid mt-4 mb-1 mx-auto d-block" alt="Default Image">
            @endif

            <div class="text-black">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Published_date:</h5>
                        <p>{{ $new->publish_date }}</p>
                    </div>
                </div>
                <p class="text-justify">{!! nl2br(e($new->content)) !!}</p>
            </div>

            <!-- Display additional images below the content -->
            @if ($new->images->count() > 1)
                <div class="row mt-4">
                    @for ($i = 1; $i < $new->images->count(); $i++)
                        <div class="col-md-6">
                            <img src="{{ asset("storage/".$new->images[$i]->photo_path) }}" class="img-fluid mb-3" alt="Additional News Image">
                        </div>
                    @endfor
                </div>
            @endif
        </div>
    </div>
</div>
@endsection



