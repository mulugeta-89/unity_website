@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center; color: wheat">Add Advertisments</h1>
    <form action="/advertisments/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image" style="color: white">Image</label>
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