@extends("layout")
@section("content")
<div>
<div class="container">
    <h1 style="text-align: center">Edit the new</h1>
    <form action="/news/{{$new->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="title">Title</label>
        <input 
        style="font-size: 21px"
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        value="{{$new->title}}" 
        required>
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      {{-- <div class="form-group">
        <label for="image">Image</label>
        <input 
        type="file" 
        class="form-control" 
        id="image" 
        name="image" 
        >
        <img
                class="w-48 mr-6 mb-6"
                src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/unity_photo.jpg")}}"
                alt=""
            />
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div> --}}
      <div class="form-group">
        <label for="description">Content</label>
        <textarea 
        style="font-size: 21px; height: 300px"
        class="form-control"
         id="description"
          name="content"
           rows="4" 
           required>{{$new->content}}</textarea>
        @error("description")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="start_date_time">Publish_date</label>
        <input 
          type="datetime-local" 
          class="form-control"
          id="start_date_time"
          name="publish_date" 
          value="{{$new->publish_date}}" 
          required >
        @error("publish_date")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Edit</button>
    </form>
  </div>
</div>
@endsection