<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('commissions', function (Blueprint $table) {
            $table->enum('status', ['paid', 'unpaid'])
                  ->default('unpaid')
                  ->change();
        });
    }

    public function down()
    {
        Schema::table('commissions', function (Blueprint $table) {
            $table->string('status')->change();
        });
    }
};
