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
        Schema::create('machine_lists', function (Blueprint $table) {
            $table->id();
            $table->string('machine_name');
            $table->string('development_board');
            $table->string('ip_address');
            $table->timestamp('scheduled_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_lists');
    }
};
