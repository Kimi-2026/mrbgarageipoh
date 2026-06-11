<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input untuk elakkan data pelik masuk database
        $validated = $request->validate([
            'vehicle_model' => 'required|string|max:255',
            'plat_number' => 'required|string|max:15',
            'phone_number' => 'required|string|max:20',
            'service_package' => 'required|string',
            'appointment_date' => 'required',
            'preferred_time' => 'required',
        ]);

        // Simpan terus ke database guna Query Builder (laju dan selamat dari SQL Injection)
        DB::table('bookings')->insert([
            'vehicle_model' => trim($validated['vehicle_model']),
            'plat_number' => strtoupper(trim($validated['plat_number'])),
            'phone_number' => trim($validated['phone_number']),
            'service_package' => $validated['service_package'],
            'appointment_date' => date('Y-m-d', strtotime($validated['appointment_date'])),
            'preferred_time' => date('H:i:s', strtotime($validated['preferred_time'])),
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }
}