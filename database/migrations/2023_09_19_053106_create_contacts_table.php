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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('description_ar');
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location_ar');
            $table->string('location_en')->nullable();
            $table->string('location_ru')->nullable();
            $table->enum('status', ['Active', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
