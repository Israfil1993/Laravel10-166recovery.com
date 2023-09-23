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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_title_ar');
            $table->string('about_title_en')->nullable();
            $table->string('about_title_ru')->nullable();
            $table->text('about_description_ar');
            $table->text('about_description_en')->nullable();
            $table->text('about_description_ru')->nullable();
            $table->string('about_image');
            $table->string('our_values_title_ar');
            $table->string('our_values_title_en')->nullable();
            $table->string('our_values_title_ru')->nullable();
            $table->text('our_values_description_ar');
            $table->text('our_values_description_en')->nullable();
            $table->text('our_values_description_ru')->nullable();
            $table->string('vision_description_ar');
            $table->string('vision_description_en')->nullable();
            $table->string('vision_description_ru')->nullable();
            $table->string('vision_image');
            $table->string('mission_description_ar');
            $table->string('mission_description_en')->nullable();
            $table->string('mission_description_ru')->nullable();
            $table->string('mission_image');
            $table->enum('status', ['Active', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
