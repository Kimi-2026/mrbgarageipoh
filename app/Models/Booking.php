<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'vehicle_model', 'plat_number', 'phone', 'service_package', 
        'appointment_date', 'preferred_time', 'custom_desc'
    ];
}