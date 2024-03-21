@extends("layout")
@section("content")
  <style>
    /* Custom styles for login form */
    .login-form {
      width: 360px;
      margin: 150px auto;
    }
  </style>

<div class="container">
  <div class="login-form">
    <!-- Login Form -->
    <h2 class="text-center mb-4">Login</h2>
    <!-- Form for user authentication -->
    <form method="POST" action="/users/authenticate">
        @csrf <!-- CSRF protection -->
      <div class="form-group">
        <!-- Username input -->
        <input 
            type="text" 
            class="form-control" 
            name="username" 
            placeholder="Username" 
            required="required"
            value="{{old('username')}}">
        <!-- Display error message if username validation fails -->
        @error('username')
        <p style="color: red; margin-top: 5px">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <!-- Password input -->
        <input 
            type="password" 
            class="form-control" 
            name="password" 
            placeholder="Password" 
            required="required"
            value="{{old('password')}}"
            >
      </div>
      <div class="form-group">
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </div>
    </form>
  </div>
</div>
@endsection
