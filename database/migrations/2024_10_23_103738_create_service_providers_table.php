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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->string('category');
            // $table->string('requirement'); // ini apus aja
            $table->decimal('rating', 2, 1)->default(0.0);
            $table->bigInteger('start_from');
            $table->string('email')->unique();
            $table->string('whatsapp_number');
            $table->string('link_porto');
            $table->string('link_photo');
            $table->timestamps();
            // tambain String buat link porto sama path photo services
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};