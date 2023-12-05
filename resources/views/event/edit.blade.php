@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center;color: wheat">Add Event</h1>
    <form action="/event/{{$event->id}}" method="POST">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="title" style="color: white">Event Title</label>
        <input 
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        value="{{$event->title}}" 
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
                src="{{$event->image ? asset("storage/".$event->image) : asset("unity_photos/unity_photo.jpg")}}"
                alt=""
            />
        @error("title")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="description" style="color: white">Description</label>
        <textarea 
        class="form-control"
         id="description"
          name="description"
           rows="4" 
           required>{{$event->description}}</textarea>
        @error("description")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="start_date_time" style="color: white">Start Date and Time</label>
        <input 
          type="datetime-local" 
          class="form-control"
          id="start_date_time"
          name="start_date" 
          value="{{$event->start_date}}" 
          required >
        @error("start_date")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="end_date_time" style="color: white">End Date and Time</label>
        <input 
          type="datetime-local" 
          class="form-control" 
          id="end_date" 
          name="end_date"
          value="{{$event->end_date}}" 
          required>
        @error("end_date")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="location_name" style="color: white">Location Name</label>
        <input
          type="text" 
          class="form-control" 
          id="location_name" 
          name="location_name" 
          value="{{$event->location_name}}" 
          required />
        @error("location_name")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Edit Event</button>
    </form>
  </div>
</div>
@endsection