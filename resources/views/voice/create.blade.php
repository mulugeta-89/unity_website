@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center; color: wheat">Add Voice</h1>
    <form action="/voiceofunity/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title" style="color: white">Title</label>
        <input 
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        value="{{old("title")}}" 
        required>
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="pdf" style="color: white">Pdf</label>
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