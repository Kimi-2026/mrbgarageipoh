@extends('layouts.master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Spareparts <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Product Details</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card shadow-sm p-3 border-0">
                    <img src="{{ asset('images/part_1.jpg') }}" class="img-fluid rounded" alt="Part Image">
                </div>
            </div>
            
            <div class="col-md-7 pl-md-5">
                <h2 class="font-weight-bold">{{ $name }}</h2>
                <h3 class="text-primary my-3">RM {{ $data['price'] }}</h3>
                
                <hr>
                
                <div class="mt-4">
                    <h5><strong>Vehicle Compatibility:</strong></h5>
                    <p class="text-dark">{{ $data['compatibility'] }}</p>
                    
                    <h5><strong>Specifications:</strong></h5>
                    <p class="text-dark">{{ $data['spec'] }}</p>
                    
                    <h5><strong>Key Features:</strong></h5>
                    <ul class="text-dark">
                        <li>{{ $data['features'] }}</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <a href="https://wa.me/60123456789?text=Saya berminat dengan {{ $name }}" class="btn btn-success btn-lg px-5">
                        <i class="ion-logo-whatsapp"></i> Order Now via WhatsApp
                    </a>
                    <a href="{{ route('sparepart') }}" class="btn btn-outline-secondary btn-lg ml-2">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection