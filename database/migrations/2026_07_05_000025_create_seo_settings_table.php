<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Default SEO meta per static route (home, about, contact, blog index...).
     * Dynamic records (blogs, services, pages) carry their own meta columns.
     */
    public function up(): void
    {
        Schema::create('seo_settings', function (Blueprint $table) {
            $table->id();
            $table->string('route_name')->unique(); // frontend.home, frontend.contact...
            $table->string('page_label'); // human-readable name in admin
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('og_type', 50)->default('website');
            $table->string('twitter_card', 50)->default('summary_large_image');
            $table->text('schema_markup')->nullable(); // JSON-LD
            $table->boolean('no_index')->default(false);

            // Blameable
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_settings');
    }
};
