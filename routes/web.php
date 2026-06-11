<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// --- MAIN PAGES ---
Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/login', function () { return view('login'); })->name('login');

// --- VEHICLE & SERVICES (AUTO-FILTER) ---
Route::get('/vehicle', function () { return view('vehicle'); })->name('vehicle');

Route::get('/services/{category?}', function ($category = 'all') {
    $services = [
        'local' => ['title' => 'Proton & Perodua Service Packages', 'desc' => 'Pakar servis kereta tempatan, Campro/VVT.'],
        'japanese' => ['title' => 'Japanese Model Service Packages', 'desc' => 'Pakar servis Honda, Toyota, Hybrid & CVT.'],
        'motorcycle' => ['title' => 'Motorcycle Service Packages', 'desc' => 'Servis mantap untuk kapcai hingga Superbike.'],
        'all' => ['title' => 'Our Service Packages', 'desc' => 'Semua jenis servis kenderaan yang kami tawarkan.']
    ];
    $s = $services[$category] ?? $services['all'];
    return view('services', ['category' => $category, 'title' => $s['title'], 'desc' => $s['desc']]);
})->name('services');

// --- SPAREPARTS ---
Route::get('/sparepart', function () { return view('sparepart'); })->name('sparepart');

Route::get('/sparepart/detail/{name}', function ($name) {
    $details = [
        'Fully Synthetic Oil' => ['price' => '180.00', 'compatibility' => 'Semua jenis kereta moden', 'spec' => '5W-40', 'features' => 'Tahan suhu tinggi'],
        'Proton Saga VVT Oil Filter' => ['price' => '25.00', 'compatibility' => 'Saga VVT, Iriz, Persona', 'spec' => 'Original Proton', 'features' => 'Aliran minyak bersih'],
        'Waja Brake Pads' => ['price' => '110.00', 'compatibility' => 'Waja, Persona Lama', 'spec' => 'Seramik Premium', 'features' => 'Kurang bunyi'],
        'Maintenance Free Battery (NS60)' => ['price' => '280.00', 'compatibility' => 'Majoriti kereta sedan', 'spec' => '12V MF', 'features' => 'Tahan lasak']
    ];
    $data = $details[$name] ?? ['price' => 'N/A', 'compatibility' => 'N/A', 'spec' => 'N/A', 'features' => 'N/A'];
    return view('sparepart-detail', ['name' => $name, 'data' => $data]);
})->name('sparepart.detail');

Route::get('/spareparts/search', function (Request $request) {
    $parts = [
        ['name' => 'Fully Synthetic Oil', 'price' => '180.00', 'img' => 'part_1.jpg'],
        ['name' => 'Proton Saga VVT Oil Filter', 'price' => '25.00', 'img' => 'part_2.jpg'],
        ['name' => 'Waja Brake Pads', 'price' => '110.00', 'img' => 'part_3.jpg'],
        ['name' => 'Maintenance Free Battery (NS60)', 'price' => '280.00', 'img' => 'part_4.jpg']
    ];
    return response()->json($parts);
})->name('sparepart.search');

// --- SERVICE DETAIL (MODAL/DYNAMIC) ---
Route::get('/service-detail/{type}', function ($type) {
    $services = [
        'engine' => ['title' => 'Engine Mechanical', 'desc' => 'Professional engine care.', 'list' => ['Full oil swap', 'Piston check']],
        'battery' => ['title' => 'Battery & Electrical', 'desc' => 'Diagnostics.', 'list' => ['ECU parsing', 'Alternator']],
        'braking' => ['title' => 'Premium Braking', 'desc' => 'Safety first.', 'list' => ['Fluid flush', 'Pad change']],
        'suspension' => ['title' => 'Steering & Suspension', 'desc' => 'Smooth ride.', 'list' => ['Axle adjust', 'Shock renewal']]
    ];
    $s = $services[$type] ?? $services['engine'];
    return view('service-detail', ['serviceTitle' => $s['title'], 'serviceDescription' => $s['desc'], 'serviceChecklist' => $s['list']]);
})->name('service.detail');

use App\Http\Controllers\BookingController;

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');