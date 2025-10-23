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
        Schema::create('queue_tasks', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->enum('status', ['queued', 'running', 'success', 'failure']);
            $table->decimal('progress', 3, 2)->nullable(); // 0.00 as 0% to 1.00 as 100%
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queue_tasks');
    }
};
