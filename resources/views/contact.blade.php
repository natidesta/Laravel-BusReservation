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
    <div class="section">
      <h1>Contact Us</h1>
    </div>
       
        <div class="container">
          <div class="row">
            <div class="col">
              <h2><b>How to Find Us</b></h2>
              <pre>
    If you have any questions
    use our phne number 
    or our socual media platforms
              </pre>
            </div>
            <div class="col">
              <h3><b>Office Info</b><br></h3>
              our phone no: 011 000 00 00<br>
              GoldBus Plaza, 2nd Floor, Bole<br>
              City, Addis Ababa, Ethiopia
            </div>
            <div class="col">
              <h3><b><p>Follow us on social media</p></b></h3>
              <div id="social">
              <p><img src="assets/image/facebook.svg" alt="" title=""></a>
                <img src="assets/image/twitter.svg" alt="" title=""></a>
                <img src="assets/image/instagram.svg" alt="" title=""></a></p>
              </div>
              <p id="p2">Find us on Social Media</p>
            </div>
          </div>
        </div>
@endsection