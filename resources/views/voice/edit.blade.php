@extends("layout")
@section("content")
<div class="container">
    <!-- Form for editing voice -->
    <h1 style="text-align: center">Edit Voice</h1>
    <form action="/voiceofunity/{{$voice->id}}" method="POST" enctype="multipart/form-data">
      @csrf <!-- CSRF protection -->
      @method("PUT") <!-- Method spoofing for PUT request -->
      <div class="form-group">
        <!-- Title input -->
        <label for="title">Title</label>
        <input 
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        value="{{$voice->title}}" 
        required>
        <!-- Display error message if title validation fails -->
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <!-- PDF file input -->
        <label for="pdf">PDF</label>
        <input 
        type="file" 
        class="form-control" 
        id="pdf" 
        name="pdf_file" 
        value="{{old("pdf_file")}}" 
        >
        <!-- Display error message if file validation fails -->
        @error("pdf_file")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection
