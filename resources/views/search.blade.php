@extends('master')
@section('content')
<head>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  </style>
</head>
<div class="nav1">
  <nav class="navbar navbar-expand-sm ">
    <a class="nav-link" href="#">
      GuzoBus
    </a>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="cancel">
          Cancel Ticket
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
      @if(@isset($data))
    
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
          @if(count($data) > 0)
          
          @foreach ($data as $dataElement)
          <tr>
            <td>{{$dataElement->bus->name}}</td>
            <td>{{$dataElement->departure_city}}</td>
            <td>{{$dataElement->destination_city}}</td>
            <td>{{$dataElement->price}}</td>
            <td>{{$dataElement->date}}</td>
            <td>{{$dataElement->available_seats}}</td>
            <td>{{$dataElement->arrival_time}}</td>
            <td><a href="reservation/{{$dataElement->price."&".$dataElement->bus_id."&".$dataElement->id}}"><button type="button" id="" class="btn btn-success">Book</button></a></td>
          </tr>
          @endforeach
          @else
          <tr><td>No trip found</td></tr>
          @endif
        </tbody>
      </table>
      @endif
        </div>
        
        <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Thank you for booking</p>
          </div>
        
        </div>
</body>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

@endsection