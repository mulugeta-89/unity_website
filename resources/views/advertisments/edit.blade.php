@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center; color: wheat">Edit Advertisments</h1>
    <form action="/advertisments/{{$advert->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="image" style="color: white">Image</label>
        <input 
        type="file" 
        class="form-control" 
        id="image" 
        name="image" 
        >
        <img
                class="w-48 mr-6 mb-6"
                src="{{asset("storage/".$advert->image)}}"
                alt=""
            />
        @error("image")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection