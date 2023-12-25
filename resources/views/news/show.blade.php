
@extends("layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify;">
                {{ $new->title }}
            </h1>
            @if ($new->images->count() >= 1)
                <div class="row" style="display: flex; justify-content: center">
                        <img src="{{ asset("storage/".$new->images[0]->photo_path) }}"  alt="News Image">
                </div>
            @else
                <img src="{{ asset("unity_photos/arif.jpg") }}" class="img-fluid mt-4 mb-1 mx-auto d-block" alt="Default Image">
            @endif

            <div class="text-black">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Published_date:</h4>
                        <p>{{ $new->publish_date }}</p>
                    </div>
                </div>
                <p class="text-justify" style="font-size: 21px; font-weight: 700">{!! nl2br(e($new->content)) !!}</p>
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



