<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.V
     */
    public function up(): void
    {
        Schema::create('malls', function (Blueprint $table) {
            $table->char('mall_id', 4);
            $table->string('mall_name', 100);
            $table->string('city', 100);
            $table->string('address', 100);
            $table->string('help_desk', 15);
            $table->char('quotas_motor', 4);
            $table->char('quotas_mobil', 4);
            $table->char('fee_motor', 4);
            $table->char('fee_mobil', 4);
            $table->primary('mall_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('malls');
    }
};
