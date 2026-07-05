<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_category_id')->constrained('gallery_categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('image');
            $table->string('type', 20)->default('image'); // image, video
            $table->string('video_url')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->unsignedInteger('sort_order')->default(0);

            // Blameable
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
