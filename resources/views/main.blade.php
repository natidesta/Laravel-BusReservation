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
          <a href="logout" class="btn btn-primary" role="button">Logout</a>
      </ul>
    </nav>
  </div>
<body>
    <div class="container">
        <div id="c">
        <div class="row">
            <div class="col-md-md-offset-4" style="margin-top:20px;">
                <h4>Find Bus</h4>
                <hr>
                <form action="{{route('web_search')}}" method="GET" role="search">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="query">From</label>
                        <input type="text" class="form-control" placeholder="Enter Departure City" 
                        name="query" value="{{old('departure')}}">
                        <span class="text-danger">@error('query'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="destination_city">Destination</label>
                        <input type="text" class="form-control" placeholder="Enter Destination" 
                        name="query2" value="">
                        <span class="text-danger">@error('Destination'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" placeholder="Enter date" 
                        name="query3" value="">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-block btn-primary" type="submit">Find Bus</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
        </div>
    </div>
    
</body>

@endsection