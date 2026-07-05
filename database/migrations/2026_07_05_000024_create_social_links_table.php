<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('platform', 50); // facebook, twitter, linkedin, instagram, youtube...
            $table->string('url');
            $table->string('icon', 100)->nullable(); // bootstrap icon / fontawesome class
            $table->tinyInteger('status')->default(1)->index();
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
