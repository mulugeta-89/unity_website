@extends("layout")
@section("content")
<div>
<div class="container mt-6 pt-5" style="margin-top: 120px;">
    <h1 style="text-align: center">Add News</h1>
    <form action="/news/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
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
        <label for="description">Content</label>
        <textarea 
        class="form-control"
         id="content"
        name="content"
        rows="4" 
        required>{{old("content")}}</textarea>
        @error("content")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="start_date_time">Publish date</label>
        <input 
          type="datetime-local" 
          class="form-control"
          id="start_date_time"
          name="publish_date" 
          value="{{old("publish_date")}}" 
          required >
        @error("publish_date")
            <p class="text-danger mt-1">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>
</div>
@endsection