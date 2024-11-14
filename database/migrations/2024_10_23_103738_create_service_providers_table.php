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
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->decimal('rating', 3, 2)->default(0.0);
            $table->bigInteger('start_from');
            $table->string('email')->unique();
            $table->string('whatsapp_number');
            $table->integer('rate_count')->default(0);
            $table->string('link_porto');
            $table->string('link_photo');
            $table->timestamps();
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
