<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('email');
            $table->string('service_interested')->nullable()->after('phone');
            $table->string('reply_status', 20)->default('pending')->after('is_read')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['company_name', 'service_interested', 'reply_status']);
        });
    }
};
