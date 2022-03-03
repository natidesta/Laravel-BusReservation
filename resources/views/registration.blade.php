@extends('master')
@section('content')
<div class="nav1">
    <nav class="navbar navbar-expand-sm ">
      <a class="nav-link" href="#">
        GuzoBus
      </a>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="/">
                Home
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/contact">
                Contacts
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about">
                About
              </a>
          </li>
          <a href="login" class="btn btn-primary" role="button">Login</a>
      </ul>
    </nav>
  </div>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-md-offset-4" style="margin-top:20px;">
                <h4>Registration</h4>
                <hr>
                <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter YourFull Name" 
                        name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" 
                        name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" 
                        name="password" value="">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
            
                    <a href="login">Already Registerd ! Login Here></a>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection