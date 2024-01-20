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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->char('vehicle_id', 6);
            $table->enum('vehicle_type', ['Mobil', 'Motor']);
            $table->string('vehicle_plate_number', 10);
            $table->dateTime('entry_time');
            $table->dateTime('exit_time')->nullable();
            $table->decimal('estimated_cost', 10, 2);
            $table->primary('vehicle_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
