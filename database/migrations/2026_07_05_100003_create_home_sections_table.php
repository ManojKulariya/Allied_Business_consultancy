<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_key', 50)->unique(); // hero, about, services, stats, testimonials...
            $table->string('name');                      // human label in admin
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('content')->nullable();
            $table->json('data')->nullable();            // flexible per-section fields
            $table->string('background_image')->nullable();
            $table->string('background_color', 20)->nullable();
            $table->string('cta_text', 100)->nullable();
            $table->string('cta_url')->nullable();
            $table->string('cta_text_2', 100)->nullable();
            $table->string('cta_url_2')->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->unsignedInteger('sort_order')->default(0);

            // Blameable
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
