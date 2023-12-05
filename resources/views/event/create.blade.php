@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center; color: wheat">Add Event</h1>
    <form action="/events/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title" style="color: white">Event Title</label>
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
      <div class="form-group">
        <label for="description" style="color: white">Description</label>
        <textarea 
        class="form-control"
         id="description"
          name="description"
           rows="4" 
           required>{{old("description")}}</textarea>
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
          value="{{old("start_date")}}" 
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
          value="{{old("end_date")}}" 
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
          value="{{old("location_name")}}" 
          required />
        @error("location_name")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection