<!-- Extends the layout.blade.php file which acts as a master layout -->
@extends("layout")

<!-- Defines a section named "content" -->
@section("content")

<!-- Opening div tag for the content section -->
<div>

    <!-- Container for the content -->
    <div class="container">

        <!-- Heading for the form -->
        <h1 style="text-align: center;">Edit Event</h1>

        <!-- Form for editing events, submits to /event/{{$event->id}} route with PUT method -->
        <form action="/event/{{$event->id}}" method="POST">
            @csrf <!-- Laravel directive for generating CSRF token -->
            @method("PUT") <!-- Method override to send PUT request -->

            <!-- Form group for the event title -->
            <div class="form-group">
                <label for="title">Event Title</label> <!-- Label for the event title input field -->
                <input 
                    style="font-size: 16px"
                    type="text" 
                    class="form-control" 
                    id="title" 
                    name="title" 
                    value="{{$event->title}}" 
                    required
                >
                @error("title")
                    <p class="text-danger mt-1">{{$message}}</p> <!-- Display validation error messages for the event title -->
                @enderror
            </div>

            <!-- Form group for the event description -->
            <div class="form-group">
                <label for="description" >Description</label> <!-- Label for the description textarea -->
                <textarea 
                    style="font-size: 16px; height: 300px;"
                    class="form-control"
                    id="description"
                    name="description"
                    rows="4" 
                    required
                >{{$event->description}}</textarea> <!-- Textarea for the event description -->
                @error("description")
                    <p class="text-danger mt-1">{{$message}}</p> <!-- Display validation error messages for the description -->
                @enderror
            </div>

            <!-- Form group for the start date and time -->
            <div class="form-group">
                <label for="start_date_time">Start Date and Time</label> <!-- Label for the start date and time input field -->
                <input 
                    type="datetime-local" 
                    class="form-control"
                    id="start_date_time"
                    name="start_date" 
                    value="{{$event->start_date}}" 
                    required 
                >
                @error("start_date")
                    <p class="text-danger mt-1">{{$message}}</p> <!-- Display validation error messages for the start date and time -->
                @enderror
            </div>

            <!-- Form group for the end date and time -->
            <div class="form-group">
                <label for="end_date_time">End Date and Time</label> <!-- Label for the end date and time input field -->
                <input 
                    type="datetime-local" 
                    class="form-control" 
                    id="end_date" 
                    name="end_date"
                    value="{{$event->end_date}}" 
                    required
                >
                @error("end_date")
                    <p class="text-danger mt-1">{{$message}}</p> <!-- Display validation error messages for the end date and time -->
                @enderror
            </div>

            <!-- Form group for the location name -->
            <div class="form-group">
                <label for="location_name">Location Name</label> <!-- Label for the location name input field -->
                <input
                    style="font-size: 16px"
                    type="text" 
                    class="form-control" 
                    id="location_name" 
                    name="location_name" 
                    value="{{$event->location_name}}" 
                    required
                />
                @error("location_name")
                    <p class="text-danger mt-1">{{$message}}</p> <!-- Display validation error messages for the location name -->
                @enderror
            </div>

            <!-- Submit button for the form -->
            <button type="submit" class="btn btn-primary mb-2">Edit Event</button>
        </form>
    </div>
</div>

<!-- End of the "content" section -->
@endsection
