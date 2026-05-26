@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate mb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Vehicle Expertise <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Our Vehicle Expertise</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="car-wrap rounded shadow-sm bg-white ftco-animate p-4">
                    <div class="text-center">
                        <h2 class="mb-2"><a href="#">Proton & Perodua</a></h2>
                        <span class="badge badge-primary mb-3">Popular Choice</span>
                        <p class="text-muted">Experts in Campro/VVT engines, transmission systems, and local vehicle maintenance.</p>
                        <p class="d-flex mb-0 d-block justify-content-center">
                            <a href="{{ route('services', 'local') }}" class="btn btn-secondary py-2">View Service Packages</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded shadow-sm bg-white ftco-animate p-4">
                    <div class="text-center">
                        <h2 class="mb-2"><a href="#">Japanese Models</a></h2>
                        <span class="badge badge-primary mb-3">Hybrid Expert</span>
                        <p class="text-muted">Specializing in VTEC, i-VTEC, Hybrid powertrains, and modern CVT systems.</p>
                        <p class="d-flex mb-0 d-block justify-content-center">
                            <a href="{{ route('services', 'japanese') }}" class="btn btn-secondary py-2">View Service Packages</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded shadow-sm bg-white ftco-animate p-4">
                    <div class="text-center">
                        <h2 class="mb-2"><a href="#">Motorcycles</a></h2>
                        <span class="badge badge-primary mb-3">Superbike Ready</span>
                        <p class="text-muted">Fast and reliable maintenance for standard bikes up to high-CC superbikes.</p>
                        <p class="d-flex mb-0 d-block justify-content-center">
                            <a href="{{ route('services', 'motorcycle') }}" class="btn btn-secondary py-2">View Service Packages</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection