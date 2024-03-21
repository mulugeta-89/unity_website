<!-- Extends the layout.blade.php file which acts as a master layout -->
@extends("layout")

<!-- Defines a section named "content" -->
@section("content")
<div>
<div class="container">
    <!-- Heading for the form -->
    <h1 style="text-align: center;">Edit Advertisments</h1>
    <!-- Form for editing advertisements, submits to /advertisments/{{$advert->id}} route with PUT method, enctype is set to multipart/form-data for handling file uploads -->
    <form action="/advertisments/{{$advert->id}}" method="POST" enctype="multipart/form-data">
      <!-- Laravel directive for generating CSRF token -->
      @csrf 
      <!-- Laravel directive for spoofing PUT method since HTML forms do not support PUT directly -->
      @method("PUT")
      <div class="form-group">
        <!-- Label for the image input field -->
        <label for="image">Image</label>
        <!-- Input field for selecting an image file -->
        <input 
        type="file" 
        class="form-control" 
        id="image" 
        name="image" 
        >
        <!-- Display the current image -->
        <img
                class="w-48 mr-6 mb-6"
                src="{{asset("storage/".$advert->image)}}"
                alt=""
            />
        <!-- Laravel directive for displaying validation errors for the "image" field -->
        @error("image")
            <!-- Displays the error message in red -->
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <!-- Submit button for the form -->
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection
<!-- End of the "content" section -->
