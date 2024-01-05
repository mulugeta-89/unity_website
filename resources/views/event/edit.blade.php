@extends("layout")
@section("content")
<div>
<div class="container">
    <h1 style="text-align: center;"">Edit Event</h1>
    <form action="/event/{{$event->id}}" method="POST">
      @csrf
      @method("PUT")
      <div class="form-group">
        <label for="title">Event Title</label>
        <input 
        style="font-size: 16px"
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
        <label for="description" >Description</label>
        <textarea 
        style="font-size: 16px; height: 300px;"
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
        <label for="start_date_time">Start Date and Time</label>
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
        <label for="end_date_time">End Date and Time</label>
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
        <label for="location_name">Location Name</label>
        <input
        style="font-size: 16px"
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