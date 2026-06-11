<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
   public function store(Request $request)
  {
    // 1. Validasi
    $request->validate([
        'vehicle_model' => 'required',
        'plat_number' => 'required',
        'phone' => 'required', // Pastikan semua field wajib ada
        'appointment_date' => 'required',
        'preferred_time' => 'required',
        'service_package' => 'required'
    ]);

    // 2. Ambil semua data
    $data = $request->all();


    // 3. Format tarikh dan masa
    // Tukar tarikh ke Y-m-d
    $data['appointment_date'] = date('Y-m-d', strtotime($request->appointment_date));

    // 4. Tukar masa ke format 24-jam (H:i:s)
    $data['preferred_time'] = date('H:i:s', strtotime($request->preferred_time));

    // 5. Simpan SEKALI SAHAJA
    Booking::create($data);

    return redirect()->back()->with('success', 'Booking berjaya dihantar!');
  }
}