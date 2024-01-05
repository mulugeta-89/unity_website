@extends("layout")
@section("content")
<div>
<div class="container">
    <h1 style="text-align: center">Edit Voice</h1>
    <form action="/voiceofunity/{{$voice->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="title">Title</label>
        <input 
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        value="{{$voice->title}}" 
        required>
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="pdf">Pdf</label>
        <input 
        type="file" 
        class="form-control" 
        id="pdf" 
        name="pdf_file" 
        value="{{old("pdf_file")}}" 
        >
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection