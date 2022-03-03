<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/bootstrap.min.css')}}>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/bootstrap.min.js')}}>
        <link rel="stylesheet" type="text/css" href={{url('assets/css/style.css')}}>
        <style>
h2{
    text-align:end;
    color: blue;
}
  
 </style>
    </head>
    <div class="admin_nav">
        <nav class="navbar navbar-expand-sm ">
          
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
                  <a href="/admin"><i class="fa fa-gift fa-lg"></i> Assign  <span class="arrow"></span></a>
                </li>
                
                <li data-toggle="collapse" data-target="" class="collapsed">
                  <a href="/list"><i class="fa fa-globe fa-lg"></i> Edit Trips <span class="arrow"></span></a>
                </li>  
                
                <li  data-toggle="collapse" data-target="" class="collapsed ">
                  <a href="/list"><i class="fa fa-gift fa-lg"></i> Delete Trip <span class="arrow"></span></a>
                </li>
                
            </ul>
     </div>
</div>
<div class="container">
    <h2>Edit/Delete Trips</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Bus Name</th>
        <th scope="col">Departure</th>
        <th scope="col">Destination</th>
        <th scope="col">price</th>
        <th scope="col">date</th>
        <th scope="col">available seats</th>
        <th scope="col">arrival time</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($data as $dataElement)
      <tr>
        
        <td>{{$dataElement->bus->name}}</td>
        <td>{{$dataElement['departure_city']}}</td>
        <td>{{$dataElement['destination_city']}}</td>
        <td>{{$dataElement['price']}}</td>
        <td>{{$dataElement['date']}}</td>
        <td>{{$dataElement['available_seats']}}</td>
        <td>{{$dataElement['arrival_time']}}</td>
        <td><a href={{"delete/".$dataElement['id']}}><button type="button" id="" class="btn btn-success">Delete</button></a></td>
        <td><a href={{"edit/".$dataElement['id']}}><button type="button" id="" class="btn btn-success">Edit</button></a></td>
      </tr>
      @endforeach      
    </tbody>
  </table>

    </div>
</body>