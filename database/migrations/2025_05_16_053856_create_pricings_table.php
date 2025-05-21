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
    Schema::create('pricings', function (Blueprint $table) {
        $table->id();
        $table->string('vehicle_type'); // e.g., sedan, suv
        $table->string('trip_type');    // one_way, round_trip
        $table->decimal('base_price_per_km', 8, 2);
        $table->integer('minimum_distance');
        $table->decimal('driver_beta_300', 8, 2)->nullable();
        $table->decimal('driver_beta_500', 8, 2)->nullable();

        // Extra Charges
        $table->decimal('waiting_charge_per_hour', 8, 2);
        $table->integer('free_waiting_minutes');
        $table->decimal('hill_station_charge', 8, 2);
       
        $table->decimal('luggage_charge_per_kg', 8, 2);
        $table->integer('free_luggage_kg');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
