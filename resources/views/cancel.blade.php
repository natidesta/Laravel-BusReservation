@extends('master')
@section('content')
<div class="nav1">
    <nav class="navbar navbar-expand-sm ">
      <a class="nav-link" href="#">
        GuzoBus
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="cancel">
              Cancel 
            </a>
        </li>
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
          <a href="/logout" class="btn btn-primary" role="button">Logout</a>
      </ul>
    </nav>
  </div> 
<body>
    <div class="container">
        <div class="row" >
            <div class="col-md-md-offset-4" style="margin-top:20px;">
                <h4>Cancel Ticket</h4>
                <hr>
                <form action="" method="post">
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
                        <label for="ticket_no">ticket Number</label>
                        <input type="text" class="form-control" placeholder="Choose ticket number" 
                        name="ticket_no" value="{{old('')}}">
                        <span class="text-danger">@error('ticket_no'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

@endsection