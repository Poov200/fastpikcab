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
    $table->string('name');
    $table->string('email')->nullable();
    $table->string('contact');
    $table->string('pickup');
    $table->string('destination');
    $table->string('tripType');
    $table->string('booking_id')->unique();
    $table->string('vehicle');
    $table->integer('passengers');
    $table->string('distance');
    $table->date('date');
    $table->time('time');

    // New fields:
    $table->string('status')->default('pending');
    $table->enum('trip_status', ['pending', 'cancelled', 'completed', 'delay'])->default('pending');
   // status with default 'pending'
    $table->decimal('assigned_amount', 10, 2)->nullable();  // amount assigned to driver
    $table->unsignedBigInteger('driver_id')->nullable();    // assigned driver foreign key

    $table->timestamps();

    // Foreign key constraint (optional but recommended)
    $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('set null');
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
