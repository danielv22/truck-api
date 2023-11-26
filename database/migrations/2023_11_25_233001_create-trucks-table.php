<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('truck_brand');
            $table->string('truck_reference');
            $table->string('plate_number');
            $table->integer('model');
            $table->string('color');
            $table->string('capacity');
            $table->date('vehicle_inspection_expiration_date');
            $table->date('insurance_expiration_date');
            $table->date('registration_expiration_date');
            $table->enum('status', [
                'active',
                'vehicle_inspection_expired',
                'insurance_expired',
                'crashed',
                'in_maintenance'
            ])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
