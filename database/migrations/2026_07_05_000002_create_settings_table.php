<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Grouped key-value settings store.
     * Groups: site, header, footer, contact, seo, social, mail, scripts
     * (covers site_settings / header_settings / footer_settings requirements
     * without duplicating identical table structures).
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('group', 50)->default('site')->index();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->string('type', 30)->default('text'); // text, textarea, image, boolean, json, editor
            $table->string('label')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
