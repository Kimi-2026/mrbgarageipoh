@extends('layouts.master')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate mb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">System Access</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 justify-content-center">
    	<div class="col-md-6 block-9 mb-md-5">
        <form action="#" class="bg-white p-5 contact-form rounded shadow-sm border">
          <h3 class="mb-4 text-center font-weight-bold text-dark">Account Sign-In</h3>
          <div class="form-group">
            <label class="text-dark">Email Address</label>
            <input type="email" class="form-control" placeholder="enter your email account" required>
          </div>
          <div class="form-group">
            <label class="text-dark">Secure Password</label>
            <input type="password" class="form-control" placeholder="••••••••" required>
          </div>
          <div class="form-group mt-4">
            <input type="submit" value="Sign In" class="btn btn-primary py-3 px-5 btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection