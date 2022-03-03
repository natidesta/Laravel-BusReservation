<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/bootstrap.min.css')}}>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/bootstrap.min.js')}}>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/style.css')}}>
        <style>

  
 </style>
    </head>
    <div class="admin_nav">
        <nav class="navbar navbar-expand-sm ">
          <a class="nav-link" href="#">
            GuzoBus
          </a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/cancel">
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
              <a href="logout" class="btn btn-primary" role="button">Logout</a>
          </ul>
        </nav>
      </div>    
<body>
  <div class="nav-side-menu">
    <div class="brand">Welcome Admin</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target=""></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
                </li>

                <li  data-toggle="collapse" data-target="" class="collapsed active">
                  <a href="/admin"><i class="fa fa-gift fa-lg"></i> Assign <span class="arrow"></span></a>
                </li>
                
                <li data-toggle="collapse" data-target="" class="collapsed">
                  <a href="/list"><i class="fa fa-globe fa-lg"></i> Edit Trips <span class="arrow"></span></a>
                </li>  
                
                <li  data-toggle="collapse" data-target="" class="collapsed ">
                  <a href="/list"><i class="fa fa-gift fa-lg"></i> Delete Trip <span class="arrow"></span></a>
                </li>
                {{--  
                <li  data-toggle="collapse" data-target="" class="collapsed ">
                  <a href="/booked"><i class="fa fa-gift fa-lg"></i> Booking <span class="arrow"></span></a>
                </li>
--}}
                
            </ul>
     </div>
</div>
         
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-md-offset-4" style="margin-top:20px;">
                <h4>Assign buses</h4>
        <form action="{{route('assign_bus')}}" method="post">
            @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
            @csrf
            <div class="form-group">
              <label  for="busname" name="name">Bus Name:</label>
              <div class="col-sm-10">
                <input type="text" name="busname" class="form-control" id="busname" placeholder="Enter Bus name">
              </div>
              <span class="text-danger">@error('busname'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
              <label for="plateno" name="plate_no">Plate_No:</label>
              <div class="col-sm-10">
                <input type="text" name="plate_number"class="form-control" id="plateno" placeholder="Enter Plate_Number">
              </div>
              <span class="text-danger">@error('plate_number'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="seatno" name="No_of_Seats">Seat_Number:</label>
                <div class="col-sm-10">
                  <input type="number" name="number_of_seats" class="form-control" id="seatno" placeholder="Enter Number of seats">
                </div>
                <span class="text-danger">@error('number_of_seats'){{$message}}@enderror</span>
              </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
              </div>
            </div>
          </form>
    </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container" >
        <div class="row">
            <div class="col-md-md-offset-4" style="margin-top:20px;">
                <h4>Add Trips</h4>
                <hr>

                <form action="{{route('add_trip')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="busid">Bus id</label>
                        <input type="text" class="form-control" placeholder="Enter bus id" 
                        name="bus_id" value="">
                        <span class="text-danger">@error('bus_id'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="departurecity">Departure City</label>
                        <input type="text" class="form-control" placeholder="Enter Departure City" 
                        name="departure_city" value="">
                        <span class="text-danger">@error('departure_city'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="destinationcity">Destination City</label>
                        <input type="text" class="form-control" placeholder="Enter Destination City" 
                        name="destination_city" value="">
                        <span class="text-danger">@error('destination_city'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price" 
                        name="price" value="">
                        <span class="text-danger">@error('price'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" placeholder="Enter date" 
                        name="date" value="">
                        <span class="text-danger">@error('date'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="availableseat">Available Seats</label>
                        <input type="text" class="form-control" placeholder="Enter seats" 
                        name="available_seats" value="">
                        <span class="text-danger">@error('available_seat'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="arrivaltime">Arrival Time</label>
                        <input type="time" class="form-control" placeholder="Enter arrival time" 
                        name="arrival_time" value="">
                        <span class="text-danger">@error('arrival_time'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Add Route</button>
                    </div>
                    <br>
                </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>