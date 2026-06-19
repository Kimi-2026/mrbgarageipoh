@extends('layouts.master')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-md-11 text-center font-weight-bold ftco-animate">
        <h1 class="mb-4">Fast & Easy Way To Book Your Vehicle Service</h1>
        <p style="font-size: 18px;">Transitioning traditional workshop management into a centralized, modern web application ecosystem.</p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 featured-top">
                <div class="row no-gutters">
                    
                    <div class="col-md-4 d-flex align-items-stretch">
                        <form id="bookingForm" action="{{ route('booking.store') }}" method="POST" class="request-form ftco-animate bg-primary w-100">
                            @csrf
                            <h2>Make an Appointment</h2>
                            
                            <div class="form-group">
                                <label class="label">Vehicle Model</label>
                                <input type="text" name="vehicle_model" class="form-control" placeholder="e.g. Proton Saga, Yamaha Y15, Van Hiace" required>
                            </div>

                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label class="label">Plat Number</label>
                                    <input type="text" name="plat_number" class="form-control" placeholder="VKM 6853" pattern="[A-Za-z0-9\s]{2,10}" style="text-transform: uppercase;" required>
                                </div>
                                <div class="form-group ml-2">
                                    <label class="label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="013-4567899" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="label">Select Service Package</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="service_package" id="service_package" class="form-control" style="color: rgba(255,255,255,0.8) !important;" required>
                                        <option value="" style="color: black;">-- Choose Package --</option>
                                        <option value="basic" style="color: black;">Basic Maintenance (RM 60)</option>
                                        <option value="major" style="color: black;">Major Tune-Up (RM 150)</option>
                                        <option value="custom" style="color: black;">Custom Repair Work (Inspection Needed)</option>
                                    </select>
                                </div>
                                <div id="custom-input-wrapper" style="display: none; margin-top: 10px;">
                                    <label for="custom-desc" style="color: white;">Nyatakan servis yang diperlukan:</label>
                                    <textarea  id="custom_desc" name="custom_desc"  class="form-control" placeholder="Contoh: Tukar brek pad, check aircond..."></textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label class="label">Appointment Date</label>
                                    <input type="text" name="appointment_date" class="form-control" id="book_pick_date" min="{{ date('Y-m-d') }}" placeholder="DD-MM-YYYY" required>
                                </div>
                                <div class="form-group ml-2">
                                    <label class="label">Preferred Time</label>
                                    <input type="time" name="preferred_time" class="form-control" id="time_picker" placeholder="Time" required autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="Submit Booking Request" class="btn btn-secondary py-3 px-4 w-100">
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100 p-5 bg-white shadow-sm">
                            <h3 class="heading-section mb-4" style="color: black;">Easy Way To Service Your Vehicle</h3>
                            <div class="row d-flex mb-4">
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                        <div class="media-body">
                                            <h3 class="heading mb-3">1. Choose Package</h3>
                                            <p>Select from our basic maintenance or major tune-up packages that suit your vehicle needs.</p>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                        <div class="media-body">
                                            <h3 class="heading mb-3">2. Book A Slot</h3>
                                            <p>Pick your preferred date and time dynamically without worrying about queue conflicts.</p>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                        <div class="media-body">
                                            <h3 class="heading mb-3">3. Track & Drive</h3>
                                            <p>Bring your vehicle in, track your service log history, and receive digital invoices instantly.</p>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <p><a href="{{ route('about') }}" class="btn btn-primary py-3 px-4">Learn More About Project</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
    // 1. Initialise Datepicker
    $('#book_pick_date').datepicker({
        format: 'yyyy-mm-dd', // Format ni database suka
        autoclose: true,
        todayHighlight: true,
        startDate: new Date()
    }).on('changeDate', function(e) {
        // Paksa nilai masuk ke input supaya form nampak data tu
        $('#book_pick_date').val(e.format('yyyy-mm-dd'));
    });

    // 2. Initialise Timepicker (Pastikan kau ada library timepicker)
    $('#timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '8',
        maxTime: '10:00pm',
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        change: function(time) {
            // Ini yang buatkan input 'preferred_time' tu ada value
            $('#timepicker').val($(this).val());
        }
    });

    $(document).on('change', '#service_package', function() {
        if ($(this).val() === 'custom') {
            $('#custom-input-wrapper').show();
        } else {
            $('#custom-input-wrapper').hide();
        }
    });
});  

</script>

<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('images/about.jpg') }});">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Welcome to MRB Garage</h2>
                    
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    
                    <p><a href="{{ route('services') }}" class="btn btn-primary py-3 px-4">Browse Services</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-3">Our Professional Maintenance Offerings</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="services-1 d-block">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-car-service"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Engine Tuning</h3>
                        <p>Complete mechanical diagnostics, oil changes, spark plug overhauls, and filter replacements.</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="services-1 d-block">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-battery"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Electrical Diagnostics</h3>
                        <p>Comprehensive troubleshooting of vehicle alternators, electrical starter motors, and wiring circuits.</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="services-1 d-block">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-repair"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Brake Maintenance</h3>
                        <p>Precision calibration of front and rear braking structures alongside premium pad updates.</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="services-1 d-block">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-handshake"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Wheel Alignment</h3>
                        <p>Advanced suspension assessments, high-precision wheel balancing, and tire tread calibrations.</p>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients Feedback</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{ asset('images/person_1.jpg') }})"></div>
              <div class="text pt-4 border-top">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{ asset('images/person_2.jpg') }})"></div>
              <div class="text pt-4 border-top">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Interface Designer</span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{ asset('images/person_3.jpg') }})"></div>
              <div class="text pt-4 border-top">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">UI Designer</span>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center mb-4">Lokasi Kami</h2>
        <div class="shadow-sm rounded overflow-hidden">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.146685890786!2d101.07185037496645!3d4.606771395368301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cae5e1a3d6d025%3A0x6a2c2c045b85a363!2s246a%2C%20Jalan%20Pauh%20Kijang%2C%20Kampung%20Tengku%20Hussein%20Hujung%2C%2030020%20Ipoh%2C%20Perak!5e0!3m2!1sen!2smy!4v1717381665046!5m2!1sen!2smy" 
          width="100%" height="450" style="border:0; display:block;" allowfullscreen="" loading="lazy"></iframe>
          <div class="col-md-12 text-center mt-3">
            <div class="p-3">
              <a href="https://www.google.com/maps/dir/?api=1&destination=4.606771395368301,101.07185037496645" 
              target="_blank" 
              class="btn btn-primary">
              <span class="icon-map-marker"></span> Open in google maps
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="12">0</strong>
                        <span>Year Experienced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="578">0</strong>
                        <span>Total Cars</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="698">0</strong>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="1">0</strong>
                        <span>Total Branches</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
    </section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
        Swal.fire({
            title: 'Berjaya!',
            text: '{{ session("success") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
</script>
@endsection