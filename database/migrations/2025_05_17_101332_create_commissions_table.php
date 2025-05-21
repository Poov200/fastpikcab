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
       Schema::create('commissions', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('booking_id')->unique(); // one commission per booking
    $table->decimal('amount')->nullable();
    $table->enum('status', ['Pending', 'Paid'])->default('Pending');
    $table->date('paid_date')->nullable();
    $table->timestamps();

    $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissions');
    }
};
