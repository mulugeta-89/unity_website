@extends("layout")
@section("content")
  <style>
    .login-form {
      width: 360px;
      margin: 150px auto;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-form">
    <h2 class="text-center mb-4">Login</h2>
    <form method="POST" action="/users/authenticate">
        @csrf
      <div class="form-group">
        <input 
            type="text" 
            class="form-control" 
            name="username" 
            placeholder="Username" 
            required="required"
            value="{{old('username')}}">
        @error('username')
        <p style="color: red; margin-top: 5px">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
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
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </div>
    </form>
  </div>
</div>
@endsection
