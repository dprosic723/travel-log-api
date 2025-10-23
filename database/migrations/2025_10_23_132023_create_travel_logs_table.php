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
        Schema::create('travel_logs', callback: function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('type', ['flight', 'rail', 'car', 'hotel']);
            $table->dateTime('arrival_date');
            $table->dateTime('departure_date');
            $table->string('arrival_place')->nullable();
            $table->string('departure_place')->nullable();
            $table->string('accomodation_place')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_logs');
    }
};
