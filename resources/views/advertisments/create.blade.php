<!-- Extends the layout.blade.php file which acts as a master layout -->
@extends("layout")

<!-- Defines a section named "content" -->
@section("content")
<!-- Beginning of the content section -->

<div>
    <div class="container">
        <!-- Container for styling -->
        
        <!-- Heading for the form -->
        <h1 style="text-align: center;">Add Advertisements</h1>
        
        <form action="/advertisments/store" method="POST" enctype="multipart/form-data">
            <!-- Form for adding advertisements, submits to /advertisments/store route with POST method, enctype is set to multipart/form-data for handling file uploads -->
            @csrf <!-- Laravel directive for generating CSRF token -->
            
            <div class="form-group">
                <!-- Form group for the image input field -->
                <label for="image">Image</label>
                <!-- Label for the image input field -->
                
                <!-- Input field for selecting an image file -->
                <input 
                type="file" <!-- Input type is set to file for uploading images -->
                class="form-control" <!-- Bootstrap class for styling -->
                id="image" <!-- ID of the input field -->
                name="image" <!-- Name of the input field, used to identify the field in the backend -->
                value="{{old("image")}}" <!-- Sets the value of the input field to the old input value, if any -->
                >
                <!-- value="{{old("image")}}" is used to retain the previously uploaded image file in case of form submission failure -->
                
                @error("title")
                <!-- Laravel directive for displaying validation errors for the "title" field -->
                <p class="text-danger mt-1">{{$message}}</p>
                <!-- Displays the error message in red -->
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            <!-- Submit button for the form -->
        </form>
    </div>
</div>

@endsection 
<!-- End of the "content" section -->
