<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('vehicle_model');
        $table->string('plat_number');
        $table->string('phone_number');
        $table->string('service_package');
        $table->date('appointment_date');
        $table->time('preferred_time');
        $table->string('status')->default('pending'); // pending, approved, completed, cancelled
        $table->timestamps();
    });
  }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
