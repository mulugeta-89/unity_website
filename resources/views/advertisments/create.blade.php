@extends("layout")
@section("content")
<div>
<div class="container">
    <h1 style="text-align: center;">Add Advertisments</h1>
    <form action="/advertisments/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image">Image</label>
        <input 
        type="file" 
        class="form-control" 
        id="image" 
        name="image" 
        value="{{old("image")}}" 
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