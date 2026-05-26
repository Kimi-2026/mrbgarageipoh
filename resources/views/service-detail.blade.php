@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate mb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Service Detail <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">{{ $serviceTitle }}</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $serviceTitle }}</h2>
                <p class="lead">{{ $serviceDescription }}</p>
                <img src="{{ asset('images/bg_1.jpg') }}" class="img-fluid rounded mb-4" alt="Service Image">
                
                <h3 class="mb-3">Scope of Work</h3>
                <ul class="list-unstyled">
                    @foreach($serviceChecklist as $item)
                        <li class="mb-2"><i class="ion-ios-checkmark-circle text-primary mr-2"></i> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- <div class="col-md-4">
                <div class="bg-light p-4 rounded shadow-sm text-center">
                    <h3 class="mb-3">Need Assistance?</h3>
                    <p class="mb-4">Ready to get your car back on the road? Click below to chat with our expert technician.</p>
                    <a href="https://wa.me/60123456789" class="btn btn-success py-3 px-4 d-block" target="_blank">
                        <i class="ion-logo-whatsapp mr-2"></i> WhatsApp Us Now
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection