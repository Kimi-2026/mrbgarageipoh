<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vehicle Service Booking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
      .topbar-social a {
        color: #fff;
        font-size: 14px;
        margin-left: 12px;
        transition: color 0.3s ease;
      }
      .topbar-social a:hover {
        color: #01d28e !important; /* Warna tema bertukar hijau/oren bila hover */
      }
    </style>
  </head>
  <body>
    
    
    <div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex align-items-center">
              <div class="col-md-6 pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                <span class="text" style="font-size: 12px;">MRB GARAGE, 246a Jalan Pauh Kijang, Kg Tengku Hussein Hujung, Ipoh</span>
              </div>
              
              <div class="col-md-6 d-flex topper align-items-center justify-content-end text-right">
                <p class="mb-0 register-link mr-3">
                  <span>Operating Hours:</span> <span>8:00am - 5:00pm</span>
                </p>
                <div class="topbar-social d-flex align-items-center border-left pl-3" style="border-color: rgba(255,255,255,0.2) !important;">
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">MRB<span>GARAGE</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item {{ Request::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
            <li class="nav-item {{ Request::is('sparepart') ? 'active' : '' }}"><a href="{{ route('sparepart') }}" class="nav-link">Sparepart</a></li>
            <li class="nav-item {{ Request::is('pricing') ? 'active' : '' }}"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>
            <li class="nav-item {{ Request::is('vehicle') ? 'active' : '' }}"><a href="{{ route('vehicle') }}" class="nav-link">Vehicle</a></li>
            <li class="nav-item {{ Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">MRB<span>GARAGE</span></a></h2>
              <p>Driven by passion and engineered for reliability, MRB Garage Ipoh delivers top-tier automotive maintenance and repair services. We integrate modern digital solutions to ensure a seamless, transparent, and efficient booking experience for every vehicle owner.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('about') }}" class="py-2 d-block">About</a></li>
                <li><a href="{{ route('services') }}" class="py-2 d-block">Services</a></li>
                <li><a href="{{ route('sparepart') }}" class="py-2 d-block">Spareparts</a></li>
                <li><a href="{{ route('pricing') }}" class="py-2 d-block">Pricing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Info</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">MRB GARAGE, 246a Jalan Pauh Kijang, Kampung Tengku Hussein Hujung, 30020 Ipoh, Perak</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+60 12-555 1234</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">MRBGARAGE@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Vehicle Service Booking System</p>
          </div>
        </div>
      </div>
    </footer>
    
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="circumference" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="class-name" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D01"/></svg></div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
    <a href="https://wa.me/60125551234?text=Hai%20MrB%20Garage,%20saya%20nak%20tanya%20servis" 
       target="_blank"
       style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background-color: #25d366; color: white; padding: 15px 20px; border-radius: 50px; text-decoration: none; font-weight: bold; box-shadow: 2px 2px 10px rgba(0,0,0,0.3); font-size: 14px;">
       <i class="icon-whatsapp" style="margin-right: 5px;"></i> WhatsApp Us Now
    </a>
  </body>
</html>