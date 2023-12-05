@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center;color: wheat">Edit the new</h1>
    <form action="/news/{{$new->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="title" style="color: white">Title</label>
        <input 
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
                src="{{$new->image ? asset("storage/".$new->image) : asset("unity_photos/unity_photo.jpg")}}"
                alt=""
            />
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="description" style="color: white">Content</label>
        <textarea 
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
        <label for="start_date_time" style="color: white">Publish_date</label>
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