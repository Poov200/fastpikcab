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
    Schema::table('bookings', function (Blueprint $table) {
        $table->string('passengers')->change(); // change from int to string
        $table->integer('no_of_days'); // add new field
    });
}

public function down()
{
    Schema::table('bookings', function (Blueprint $table) {
        $table->integer('passengers')->change(); // revert back if needed
        $table->dropColumn('no_of_days');
    });
}

};
