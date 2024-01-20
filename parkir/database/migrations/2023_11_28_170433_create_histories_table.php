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
        Schema::create('histories', function (Blueprint $table) {
            $table->char('histories_id', 6);
            $table->string('vehicle_id', 100); //foreign key table vehicle
            $table->char('mall_id', 4); //foreign key table mall
            $table->dateTime('entry_time');
            $table->dateTime('exit_time');
            $table->char('duration', 6);
            $table->char('total_payment', 4);
            $table->primary('histories_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
