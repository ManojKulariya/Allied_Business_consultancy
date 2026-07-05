<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Central media library + polymorphic attachments
     * (multiple image/file upload for any model via mediable relation).
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('mediable_type')->nullable();
            $table->unsignedBigInteger('mediable_id')->nullable();
            $table->string('collection', 100)->default('default'); // e.g. gallery, attachments
            $table->string('name');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('mime_type', 100)->nullable();
            $table->string('extension', 20)->nullable();
            $table->unsignedBigInteger('size')->default(0); // bytes
            $table->string('alt_text')->nullable();
            $table->unsignedInteger('sort_order')->default(0);

            // Blameable
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->index(['mediable_type', 'mediable_id', 'collection']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
