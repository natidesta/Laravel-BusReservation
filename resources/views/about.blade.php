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
    <div class="aboutus">
        <h2>Guzo Bus Ticket Booking Platform<h2>
          <br>
          <p>Guzo Bus is a bus ticket booking platform which enables you to reserve your ticket easily    </p> 
          <p> With Guzo bus you can reserve bus tcket from different bus company's </p>
      </div>
@endsection