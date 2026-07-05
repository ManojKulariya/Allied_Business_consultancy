<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('image');
            $table->string('button_text', 100)->nullable();
            $table->string('button_url')->nullable();
            $table->string('button_text_2', 100)->nullable();
            $table->string('button_url_2')->nullable();
            $table->string('text_position', 20)->default('left'); // left, center, right
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
        Schema::dropIfExists('sliders');
    }
};
