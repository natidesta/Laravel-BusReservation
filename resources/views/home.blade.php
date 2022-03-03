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
        <a href="/login" class="btn btn-primary" role="button">Login</a>
    </ul>
  </nav>
</div>

  <div class="info">
    <h2>Book easily from your favourate bus companys</h2>
  </div>
 <div class="company">
  <img src="assets/image/abaylogo.png" alt>
  <img src="assets/image/skylogo.png" alt>
  <img src="assets/image/gadalogo.jpg" alt>
  <img src="assets/image/zemenlogo.png" alt>
  <img src="assets/image/selamlogo.png" alt>
 </div>
        
 <div class="how">
   <h1> How it Works</h1>
  <p> We've made it easy for you to book. Here's how.</p>
   <div class="container">
    <div class="row">
      <div class="col-sm">
     1. First Login in to our system   
     <div class="center">
      <a href="login" class="btn btn-primary" role="button">Login</a>
      </div>
      </div>
      <div class="col-sm">
  2. Search for your trip
      Make sure to enter your departure and destination cities, 
      in addition to the departure date and hit the  button.
      </div>
      <div class="col-sm">
        3. Choose your trip and 
        Take a look at the results available 
        for your trip and select the one that best meets your needs.
      </div>
    </div>
    <p id="p2" style="padding-top: 20px">After reserving the choosen trip</p>
      <p id="p3">You will get your ticket number which you will need to pay in banks.</p>
  </div>
 </div>
   
  


 </div>
@endsection