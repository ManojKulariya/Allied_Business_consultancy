<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained('careers')->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20);
            $table->string('resume'); // stored file path
            $table->text('cover_letter')->nullable();
            $table->string('current_company')->nullable();
            $table->string('expected_salary', 100)->nullable();
            $table->string('notice_period', 100)->nullable();
            $table->string('application_status', 30)->default('pending')->index(); // pending, reviewed, shortlisted, rejected, hired
            $table->text('admin_notes')->nullable();
            $table->string('ip_address', 45)->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['career_id', 'application_status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
