@extends('layouts.master') 

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Spareparts <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Genuine Spare Parts</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <input type="text" id="partSearch" class="form-control form-control-lg" placeholder="🔍 Search parts (e.g. Oil Filter, Brake Pads)...">
            </div>
        </div>

        <div class="row" id="partsGrid">
            <!-- <div class="col-md-4 ftco-animate">
                <div class="car-wrap rounded bg-white shadow-sm p-3">
                    <div class="img rounded mb-3" style="background-image: url('{{ asset('images/part_1.jpg') }}'); height: 200px;"></div>
                    <div class="text text-center pt-3">
                        <h3 class="mb-0">Fully Synthetic Oil</h3>
                        <p class="price mb-2 text-primary font-weight-bold">RM 180.00</p>
                        <div class="d-flex justify-content-center"> -->
                            <!-- <button class="btn btn-outline-secondary mr-2" onclick="showDetails('Fully Synthetic Oil', '180.00', 'Minyak enjin berkualiti tinggi.')" data-toggle="modal" data-target="#detailModal">Details</button>
                            <a href="https://wa.me/60123456789" class="btn btn-success text-white">Buy</a> -->
                        <!-- </div> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h3 id="modalPartName"></h3>
        <p id="modalPartDesc"></p>
        <h4 class="text-primary" id="modalPartPrice"></h4>
        <a href="#" id="waLink" class="btn btn-success btn-block">Order via WhatsApp</a>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#partSearch').on('keyup', function() {
    let query = $(this).val();
    
    if (query.length === 0) {
        $('#partsGrid').html('');
        return;
    }

    $.ajax({
        url: "{{ route('sparepart.search') }}",
        type: "GET",
        data: { 'q': query },
        success: function(data) {
            console.log("Data berjaya ditarik:", data); // Check console F12
            let html = '';
            
            if (data.length > 0) {
                data.forEach(p => {
                    // Kod ni guna 'style="display:block"' supaya dia wajib muncul
                    html += `
                    <div class="col-md-4" style="display:block; margin-bottom: 20px;">
        <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h3>${p.name}</h3>
            <p style="color: blue; font-weight: bold;">RM ${p.price}</p>
            <p>${p.description}</p>
            
            <div class="d-flex">
                <button class="btn btn-outline-secondary mr-2" 
                        onclick="showDetails('${p.name}', '${p.price}', '${p.description}')" 
                        data-toggle="modal" data-target="#detailModal">Details</button>
                
                <a href="https://wa.me/60123456789?text=Saya berminat dengan ${p.name}" 
                   target="_blank" 
                   class="btn btn-success text-white">Buy</a>
            </div>
        </div>
    </div>`;
});
            } else {
                html = '<div class="col-12 text-center"><p>Tiada barang dijumpai.</p></div>';
            }
            
            $('#partsGrid').html(html);
        },
        error: function(xhr) {
            console.log("Error:", xhr.responseText);
        }
    });
});
</script>
