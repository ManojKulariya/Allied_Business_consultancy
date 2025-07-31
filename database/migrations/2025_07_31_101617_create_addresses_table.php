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
     Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line1')->nullable(); // M-02, Meznine Floor
            $table->string('address_line2')->nullable(); // Shree Amar Heights, DCM
            $table->string('area')->nullable();          // Ajmer Road, Nirman Nagar
            $table->string('city')->nullable();          // Jaipur
            $table->string('postal_code')->nullable();   // 302019
            $table->string('state')->nullable();         // Rajasthan
            $table->string('country')->nullable();       // India
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
        });
    }
};
