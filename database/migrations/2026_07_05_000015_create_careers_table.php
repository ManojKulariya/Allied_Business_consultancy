<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('department', 100)->nullable();
            $table->string('location')->nullable();
            $table->string('job_type', 50)->default('full-time'); // full-time, part-time, contract, internship, remote
            $table->string('experience', 100)->nullable();
            $table->string('salary_range', 100)->nullable();
            $table->unsignedInteger('vacancies')->default(1);
            $table->longText('description')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('benefits')->nullable();
            $table->date('deadline')->nullable()->index();
            $table->tinyInteger('status')->default(1)->index();
            $table->unsignedInteger('sort_order')->default(0);

            // SEO meta fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Blameable
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
