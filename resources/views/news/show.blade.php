@extends("layout")
<!-- Extends the layout.blade.php file -->

@section("content")
<!-- Content section -->
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" style="margin-bottom: 100px">
            <!-- Display the title of the news -->
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 32px; text-transform: uppercase; text-align: justify;">
                {{ $new->title }}
            </h1>
            <!-- Check if the news has images -->
            @if ($new->images->count() >= 1)
                <!-- Display the first image -->
                <div class="row" style="display: flex; justify-content: center">
                        <img src="{{ asset("storage/".$new->images[0]->photo_path) }}"  alt="News Image">
                </div>
            @else
                <!-- Display a default image if no images are available -->
                <img src="{{ asset("unity_photos/arif.jpg") }}" class="img-fluid mt-4 mb-1 mx-auto d-block" alt="Default Image">
            @endif

            <!-- Display the published date -->
            <div class="text-black">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Published_date:</h6>
                        <p>{{ $new->publish_date }}</p>
                    </div>
                </div>
                <!-- Display the content of the news -->
                <p class="text-justify" style="font-size: 21px; font-weight: 700">{!! nl2br(e($new->content)) !!}</p>
            </div>

            <!-- Display additional images below the content -->
            @if ($new->images->count() > 2)
                <div class="row mt-4">
                    <!-- Loop through additional images starting from the second one -->
                    @for ($i = 1; $i < $new->images->count(); $i++)
                        <div class="col-md-6">
                            <!-- Display the additional images -->
                            <img src="{{ asset("storage/".$new->images[$i]->photo_path) }}" class="img-fluid mb-3" alt="Additional News Image">
                        </div>
                    @endfor
                </div>
            <!-- Check if there are exactly two images -->
            @elseif($new->images->count() == 2)
                <!-- Display the second image -->
                <div class="row" style="display: flex; justify-content: center">
                    <img src="{{ asset("storage/".$new->images[1]->photo_path) }}"  alt="News Image">
                </div>
            @endif
        </div>
    </div>
</div>
<!-- End of content section -->
@endsection
<!-- End of content section -->
