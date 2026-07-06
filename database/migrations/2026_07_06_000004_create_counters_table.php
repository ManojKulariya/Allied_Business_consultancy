<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('title');                              // e.g. "Clients Served"
            $table->unsignedInteger('value');                     // numeric part, animated
            $table->string('prefix', 10)->nullable();             // e.g. "$"
            $table->string('suffix', 10)->nullable();             // e.g. "+", "%"
            $table->string('icon', 100)->nullable();
            $table->unsignedInteger('duration')->default(2000);   // animation ms
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
        Schema::dropIfExists('counters');
    }
};
