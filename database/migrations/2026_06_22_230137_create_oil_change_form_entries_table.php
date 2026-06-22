<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('oil_change_form_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('current_odometer')->unsigned();
            $table->integer('previous_odometer')->unsigned();
            $table->date('prev_change_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oil_change_form_entries');
    }
};
