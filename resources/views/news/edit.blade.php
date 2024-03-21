@extends("layout")
<!-- This line extends the layout.blade.php file, which acts as the master layout for this page -->

@section("content")
<!-- Start of content section -->
<div>
    <div class="container">
        <!-- Heading for editing news -->
        <h1 style="text-align: center">Edit the new</h1>
        <!-- Form for updating news -->
        <form action="/news/{{$new->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <!-- Input field for news title -->
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
                <!-- Validation error message for title -->
                @error("title")
                    <p class="text-danger mt-1">{{$message}}</p>
                @enderror
            </div>
            <!-- Input field for news content -->
            <div class="form-group">
                <label for="description">Content</label>
                <textarea 
                style="font-size: 21px; height: 300px"
                class="form-control"
                id="description"
                name="content"
                rows="4" 
                required>{{$new->content}}</textarea>
                <!-- Validation error message for content -->
                @error("description")
                    <p class="text-danger mt-1">{{$message}}</p>
                @enderror
            </div>
            <!-- Input field for publish date of news -->
            <div class="form-group">
                <label for="start_date_time">Publish_date</label>
                <input 
                type="datetime-local" 
                class="form-control"
                id="start_date_time"
                name="publish_date" 
                value="{{$new->publish_date}}" 
                required >
                <!-- Validation error message for publish date -->
                @error("publish_date")
                    <p class="text-danger mt-1">{{$message}}</p>
                @enderror
            </div>
            <!-- Submit button for editing news -->
            <button type="submit" class="btn btn-primary mb-2">Edit</button>
        </form>
    </div>
</div>
<!-- End of content section -->
@endsection
