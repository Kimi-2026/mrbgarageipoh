@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate mb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">
            @if($category == 'local') Proton & Perodua Services
            @elseif($category == 'japanese') Japanese Models Services
            @elseif($category == 'motorcycle') Motorcycle Services
            @else Our Services
            @endif
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="alert alert-light border shadow-sm">
                    Viewing services for: <strong>{{ ucfirst($category) }}</strong> | 
                    <a href="{{ route('vehicle') }}" class="text-primary">Change Category</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-center ftco-animate">
                <div class="services-1 d-block p-4 border rounded shadow-sm">
                    <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-car-service"></span></div>
                    <h3>Engine Mechanical</h3>
                    <p class="mb-4">Specialized {{ $category }} engine diagnostics & tuning.</p>
                    <p><a href="{{ route('service.detail', 'engine') }}" class="btn btn-primary py-2 px-4">View Details</a></p>
                </div>
            </div>

            <div class="col-md-3 text-center ftco-animate">
                <div class="services-1 d-block p-4 border rounded shadow-sm">
                    <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-battery"></span></div>
                    <h3>Battery & Electrical</h3>
                    <p class="mb-4">Professional electrical care for {{ $category }} models.</p>
                    <p><a href="{{ route('service.detail', 'battery') }}" class="btn btn-primary py-2 px-4">View Details</a></p>
                </div>
            </div>

            <div class="col-md-3 text-center ftco-animate">
                <div class="services-1 d-block p-4 border rounded shadow-sm">
                    <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-repair"></span></div>
                    <h3>Premium Braking</h3>
                    <p class="mb-4">Safety-first braking fixes for {{ $category }}.</p>
                    <p><a href="{{ route('service.detail', 'braking') }}" class="btn btn-primary py-2 px-4">View Details</a></p>
                </div>
            </div>

            <div class="col-md-3 text-center ftco-animate">
                <div class="services-1 d-block p-4 border rounded shadow-sm">
                    <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-handshake"></span></div>
                    <h3>Steering & Suspension</h3>
                    <p class="mb-4">Alignment and suspension setup for {{ $category }}.</p>
                    <p><a href="{{ route('service.detail', 'suspension') }}" class="btn btn-primary py-2 px-4">View Details</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection