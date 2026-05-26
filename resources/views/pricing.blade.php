@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate mb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Service Pricing</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Pricing Plans</span>
            <h2>Affordable Service Packages</h2>
          </div>
        </div>
        <div class="row text-center d-flex justify-content-center">
            
            <div class="col-md-4 px-4 ftco-animate mb-4">
                <div class="table-price p-5 border bg-white rounded shadow-sm">
                    <div class="icon mb-3"><span class="flaticon-car-service text-primary" style="font-size: 60px;"></span></div>
                    <h3 class="font-weight-bold text-dark">Basic Maintenance</h3>
                    <p class="price my-4" style="font-size: 36px; color:#F96D01;"><sup>RM</sup><span>60</span></p>
                    
                    <ul class="list-unstyled text-left border-top pt-3" style="font-size: 14px; line-height: 2;">
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> 21-Point Safety Diagnosis</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Standard Engine Oil Lubrication Top-up</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Fluid Level Inspection (Coolant & Washer)</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Air Filter Cleaning & Maintenance</li>
                    </ul>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-block py-2 mt-4">Select This Package</a>
                </div>
            </div>

            <div class="col-md-4 px-4 ftco-animate mb-4">
                <div class="table-price p-5 border bg-white rounded shadow-sm border-primary">
                    <div class="icon mb-3"><span class="flaticon-repair text-primary" style="font-size: 60px;"></span></div>
                    <h3 class="font-weight-bold text-dark">Major Tune-Up</h3>
                    <p class="price my-4" style="font-size: 36px; color:#F96D01;"><sup>RM</sup><span>150</span></p>
                    
                    <ul class="list-unstyled text-left border-top pt-3" style="font-size: 14px; line-height: 2;">
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Computer OBD Diagnostic Scan</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Brake System Calibration & Pad Refitting</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Full Wheel Alignment & Suspension Tuning</li>
                        <li class="my-2"><span class="icon-check text-success mr-2"></span> Spark Plug Assessment & Overhaul</li>
                    </ul>
                    <a href="{{ route('home') }}" class="btn btn-secondary btn-block py-2 mt-4">Select This Package</a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection